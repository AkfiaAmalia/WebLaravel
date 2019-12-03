<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portofolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_portofolios', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('title');
            $table->text('content');
  
            $table->timestamps();
          });

        DB::table('tb_portofolios')->insert([
            'icon' => 'fa fa-desktop',
            'title' => 'Watching Movie',
            'content'=> 'Genre : Drama, Mystery, Horror.',
            ]);
        DB::table('tb_portofolios')->insert([
            'icon' => 'glyphicon glyphicon-book',
            'title' => 'Reading a book ',
            'content'=> 'Novel, comic.',
            ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_konten');
    }
}
