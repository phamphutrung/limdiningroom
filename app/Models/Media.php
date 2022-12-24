<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $media_type = [
        'FOOD' => 'food',
        'WINE' => 'wine',
        'GALLERY' => 'gallery',
        'EVENT' => 'event'
    ];
}
