<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome_da_cidade',
        'latitude',
        'longitude',
        'created_at',
        'updated_at'
    ];
}
