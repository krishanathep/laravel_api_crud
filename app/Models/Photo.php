<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'create_at', 'id', 'photo_date', 'photo_name', 'photo_size',
        'photo_status', 'photo_url', 'update_at'
    ];
}
