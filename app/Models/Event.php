<?php

namespace App\Models;

use App\Models\Traits\Attributes\EventAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, EventAttribute;

    protected $guarded = [];

    protected $appends = [
        'image'
    ];
}
