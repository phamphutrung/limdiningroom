<?php

namespace App\Models;

use App\Models\Traits\Relationships\MessageRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, MessageRelationship;

    protected $guarded = [];
}
