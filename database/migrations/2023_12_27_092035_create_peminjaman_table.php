<?php

// database/migrations/[timestamp]_create_peminjaman_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('no_peminjaman')->unique();

            $table->unsignedBigInteger('books_id');
            $table->unsignedBigInteger('pengunjung_id');
            $table->unsignedBigInteger('pegawai_id');
            
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            // $table->foreign('books_id')->references('id')->on('books');
            // $table->foreign('pengunjung_id')->references('id')->on('pengunjung');
            // $table->foreign('pegawai_id')->references('id')->on('pegawai');
        });
    
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
