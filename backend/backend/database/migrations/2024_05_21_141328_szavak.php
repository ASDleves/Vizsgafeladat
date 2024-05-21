<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('Magyar');
            $table->unsignedBigInteger('temaId');
            $table->foreign('temaId')->references('id')->on('temas');
            $table->timestamps();
        });
        DB::table('szavaks') ->insert(['angol'=>'yes','Magyar'=>'igen','temaId'=>1]);
        DB::table('szavaks') ->insert(['angol'=>'cinnamonroll','Magyar'=>'fahéjas tekercs','temaId'=>2]);

    
    }

    public function down(): void
    {
        //
    }
};
