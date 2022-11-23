<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'talk_to',
        'people_id',
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
