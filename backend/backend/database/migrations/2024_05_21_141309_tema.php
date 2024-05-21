<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('temanev');
            $table->timestamps();
        });
        DB::table('temas')->insert(['temanev'=>'válaszok']);
        DB::table('temas')->insert(['temanev'=>'kaják']);
    }

    public function down(): void
    {
        //
    }
};
