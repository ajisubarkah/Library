<?php

use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books_category')->insert([
            [
                'id' => 1,
                'name' => 'Romantis',
            ],
            [
                'id' => 2,
                'name' => 'Misteri'
            ],
            [
                'id' => 3,
                'name' => 'Komedi'
            ],
            [
                'id' => 4,
                'name' => 'Non Fiksi'
            ],
            [
                'id' => 5,
                'name' => 'Fiksi'
            ],
            [
                'id' => 6,
                'name' => 'Horror'
            ]
        ]);
    }
}
