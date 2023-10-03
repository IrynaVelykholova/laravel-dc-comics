<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $casts = [
        "artists" => "array",
        "writters" => "array",
    ];

    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "series",
        "type",
        "artists",
        "writters"
    ];
}
