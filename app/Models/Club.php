<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'id',
        'nom_club',
        'rspnsbl_club',
        'description',
    ];
    use HasFactory;
}
