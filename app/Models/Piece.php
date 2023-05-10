<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'composer', 'link', 'genre_id'];
}
