<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "artikel";
    protected $fillable = ['id_artikel','judul_artikel','thumbnail_artikel', 'tag_artikel', 'kategori_artikel','logo_artikel'];
}
