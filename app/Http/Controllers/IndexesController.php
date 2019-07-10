<?php

namespace App\Http\Controllers;

use App\Book;
use Sastrawi\Tokenizer\TokenizerFactory;
use Sastrawi\Stemmer\StemmerFactory;
use App\InvertedBook;
use App\DetailIndex;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use Illuminate\Http\Request;

class IndexesController extends Controller
{
    public function setAll()
    {
        foreach (Book::all() as $book) {
            if ($book->status)
                continue;

            $synopsis = strtolower($book->name) . ' ' . strtolower($book->synopsis);

            /** Proses Stop Word Remover */
            $stopwordFactory = new StopWordRemoverFactory();
            $stopword = $stopwordFactory->createStopWordRemover();
            $output = $stopword->remove($synopsis);

            /** Proses stemming */
            $stemmerFactory = new StemmerFactory();
            $stemmer  = $stemmerFactory->createStemmer();
            $output   = $stemmer->stem($output);

            /** Proses tokenisasi */
            $tokenizerFactory = new TokenizerFactory();
            $tokenizer = $tokenizerFactory->createDefaultTokenizer();
            $tokens = $tokenizer->tokenize($output);

            /** Count array */
            $counts = array_count_values($tokens);

            foreach ($counts as $token => $val) {
                $ib = InvertedBook::where('term', $token)->first();

                if ($ib) {
                    $ib->increment('n_books');
                    $ib->increment('n_freq', $val);
                } else {
                    $ib = InvertedBook::create([
                        'term' => $token,
                        'n_books' => 1,
                        'n_freq' => $val,
                    ]);
                }

                $di = DetailIndex::updateOrCreate(['books_id' => $book->id, 'inverted_books_id' => $ib->id], [
                    'books_id' => $book->id,
                    'inverted_books_id' => $ib->id,
                ]);
                $di->increment('freq', $val);
            }
            $book->update(['status' => 1]);
        }

        return "SUCCESS";
    }

    public function setOnlyBook($id)
    {
        $book = Book::where('id', $id)->where('status', 0)->first();
        if ($book) {
            $synopsis = strtolower($book->name) . strtolower($book->synopsis);

            /** Proses Stop Word Remover */
            $stopwordFactory = new StopWordRemoverFactory();
            $stopword = $stopwordFactory->createStopWordRemover();
            $output = $stopword->remove($synopsis);

            /** Proses stemming */
            $stemmerFactory = new StemmerFactory();
            $stemmer  = $stemmerFactory->createStemmer();
            $output   = $stemmer->stem($output);

            /** Proses tokenisasi */
            $tokenizerFactory = new TokenizerFactory();
            $tokenizer = $tokenizerFactory->createDefaultTokenizer();
            $tokens = $tokenizer->tokenize($output);

            /** Count array */
            $counts = array_count_values($tokens);

            foreach ($counts as $token => $val) {
                $ib = InvertedBook::where('term', $token)->first();

                if ($ib) {
                    $ib->increment('n_books');
                    $ib->increment('n_freq', $val);
                } else {
                    $ib = InvertedBook::create([
                        'term' => $token,
                        'n_books' => 1,
                        'n_freq' => $val,
                    ]);
                }

                $di = DetailIndex::updateOrCreate(['books_id' => $book->id, 'inverted_books_id' => $ib->id], [
                    'books_id' => $book->id,
                    'inverted_books_id' => $ib->id,
                ]);
                $di->increment('freq', $val);
            }
            $book->update(['status' => 1]);

            return "SUCCESS";
        }

        return "BUKU TELAH DI INDEX ATAU TIDAK ADA";
    }

    public function bobot()
    {
        /** Get All book */
        $D = Book::all()->count();
        $result = [];

        foreach (InvertedBook::all() as $data) {

            $df = $data->n_books;
            $Ddf = ($D / $df);
            $idf = log($Ddf, 10);

            $data->update(['idf' => $idf]);
            $az = [];
            foreach (DetailIndex::where('inverted_books_id', $data->id)->get() as $index) {
                $d = $index->freq;
                $w = $d * $idf;
                $index->update(['weight' => $w]);
                $az[] = [$index->book->name, $d, $w];
            }

            $result[] = [$data->term, $df, $Ddf, $idf, $az];
        }
        return $result;
    }

    public function search(Request $request)
    {
        $query = $request->field;

        $synopsis = strtolower($query);

        /** Proses Stop Word Remover */
        $stopwordFactory = new StopWordRemoverFactory();
        $stopword = $stopwordFactory->createStopWordRemover();
        $output = $stopword->remove($synopsis);

        /** Proses stemming */
        $stemmerFactory = new StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();
        $output   = $stemmer->stem($output);

        /** Proses tokenisasi */
        $tokenizerFactory = new TokenizerFactory();
        $tokenizer = $tokenizerFactory->createDefaultTokenizer();
        $tokens = $tokenizer->tokenize($output);

        /** Count array */
        $counts = array_count_values($tokens);
        $KK = collect([]);

        foreach ($counts as $val => $q) {
            $kk = InvertedBook::where('term', $val)->first();
            if ($kk)
                $KK->push(['val' => sqrt($q * $kk->idf), 'id' => $kk->id]);
        }

        $vectorBook = collect([]);
        $books = collect([]);
        foreach (Book::all() as $book) {
            $sumD = DetailIndex::where('books_id', $book->id)->sum('weight');
            $sqrtD = sqrt($sumD);
            $sqrtKK = sqrt($KK->sum('val'));

            $kkD = 0;
            foreach ($KK as $kk) {
                $D = DetailIndex::where('books_id', $book->id)->where('inverted_books_id', $kk['id'])->first();
                if ($D) {
                    $kkD += sqrt($kk['val'] * $D->freq);
                }
            }
            $cosine = 0;
            if ($sqrtD * $sqrtKK > 0)
                $cosine = $kkD / ($sqrtKK * $sqrtD);
            $vectorBook->push(['cosine' => $cosine, 'id' => $book->id]);
            if ($cosine > 0)
                $books->push(['image' => $book->image, 'name' => $book->name, 'synopsis' => $book->synopsis, 'cosine' => $cosine]);
        }
        $books = $books->sortByDesc('cosine')->values()->all();
        return view('search', with(['books' => $books]));
    }
}
