<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';

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

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function studend()
    {
        return $this->hasOne(Student::class);
    }
}
