<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Pengunjung;
use App\Models\Pegawai;


class Peminjaman extends Model
{
    use HasFactory;
// app/Models/Peminjaman.php

    protected $table = 'peminjaman';
    protected $fillable = ['no_peminjaman', 'books_id', 'pengunjung_id', 'pegawai_id', 'status'];

    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id');
    }

    public function visitor()
    {
        return $this->belongsTo(Pengunjung::class, 'pengunjung_id');
    }

    public function employee()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
