<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //up   for create table 
    //down for delete table
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->nullable()->unsigned();
            $table->char('name',255);
            $table->text('description')->nullable();
            //vv timestamps عباره عن حقلين (created_at,updated_at)
            $table->timestamps();

            //on for table
            //references for PK 
            $table->foreign('parent_id')->references('id')->on('categories');

            //for adding this table in terminal write this command vv
            //php artisan migrate
            //54 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        //for delete this table in terminal write this command vv
        //php artisan migrate:rollback

    }
};
