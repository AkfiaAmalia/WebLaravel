<?php

use Illuminate\Database\Seeder;

class PortoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_portofolios')->insert([
            'icon' => 'fa fa-desktop',
            'title' => 'Watching Movie Alone Karena Jomblo',
            'content'=> 'Genre : Drama, Mystery, Horror.',
            ]);
        DB::table('tb_portofolios')->insert([
            'icon' => 'glyphicon glyphicon-book',
            'title' => 'Reading a book ',
            'content'=> 'Novel, comic.',
            ]);
    }
}
