<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('writer');
            $table->string('publisher');
            $table->text('synopsis');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        
    }
};
