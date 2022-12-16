<?php

namespace App\Models;

use App\Models\Traits\Attributes\FoodAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory,
        FoodAttribute;

    protected $guarded = [];

    protected $casts = [
        'content' => 'array',
        'more_info' => 'array'
    ];

    protected $appends = [
        'image'
    ];
}
