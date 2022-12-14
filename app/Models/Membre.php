<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $table= 'membres';
    protected $fillable = [
        'nom',
        'age',
        'genre',
    ];
}
