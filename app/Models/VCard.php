<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VCard extends Model
{
    use HasFactory;

    protected $table = 'vcards'; // Pastikan ini sesuai dengan nama tabel yang benar

    // Tambahkan properti fillable di sini
    protected $fillable = [
        'name',
        'photo',
        'position',
        'phone',
        'email',
    ];
}
