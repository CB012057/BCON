<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'Project Title',
        'slug',
        'Description',
        'Project Address',
        'Client Name',
        'Client Number',
        'status',
    ];
}
