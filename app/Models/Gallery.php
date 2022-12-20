<?php

namespace App\Models;

use App\Models\Traits\Attributes\GalleryAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory, GalleryAttribute;

    protected $guarded = [];
}
