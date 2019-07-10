<?php

namespace App\Http\Controllers;

use App\Book;
use Sastrawi\Tokenizer\TokenizerFactory;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;

class TokenizerController extends Controller
{
    public function index($id)
    {
        if (Book::find($id)) {

            $string = Book::find($id)->synopsis;
            /** Proses stop word remove */
            $stopwordFactory = new StopWordRemoverFactory();
            $stopword = $stopwordFactory->createStopWordRemover();
            $output = $stopword->remove($string);
            /** Proses stemming */
            $stemmerFactory = new StemmerFactory();
            $stemmer  = $stemmerFactory->createStemmer();
            $output   = $stemmer->stem($output);

            /** Proses tokenisasi */
            $tokenizerFactory = new TokenizerFactory();
            $tokenizer = $tokenizerFactory->createDefaultTokenizer();
            $tokens = $tokenizer->tokenize($output);

            $counts = array_count_values($tokens);
            return view('tokenizer')->with(['tokens' => $counts, 'desc' => $string]);
        }

        return redirect(route('home'));
    }
}
