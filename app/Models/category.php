<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\database\softDeletes;

class category extends Model
{
    use HasFactory, Model, HasApiTokens, Notifiable, softDeletes;
    protected $fillable = [
        'category_id'
    ];
};
