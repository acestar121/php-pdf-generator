<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'documents',
        'maritime',
        'competency',
        'medical',
        'offshore',
        'sea',
        'add_info'
    ];
}