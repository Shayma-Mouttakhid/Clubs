<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'event_date', 'club_id', 'club_responsable'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
