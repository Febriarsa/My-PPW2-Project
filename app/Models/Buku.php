<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{

    protected $dates = ['tgl_terbit'];
    
    use HasFactory;
    
    protected $table = 'books';

}
