<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cidade_id',
        'reservatorio',
        'latitude',
        'longitude',
        'created_at',
        'updated_at'
    ];
}
