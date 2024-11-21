<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\database\softDeletes;

class Movie extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'title',
        'description',
        'image',
        'image',
    ];
}
