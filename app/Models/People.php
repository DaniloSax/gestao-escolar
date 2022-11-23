<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'color',
        'cpf',
        'rg',
        'ssp',
        'birth',
        'nationality',
        'naturalness',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}