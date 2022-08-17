<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'status',
        'type',
        'detail'
    ];

    const TYPE = ["文房具", "食品", "キッチン用品", "衣料品"];
}
