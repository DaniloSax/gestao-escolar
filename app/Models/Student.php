<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration', // matricula
        'shift', // turno
        'home_school', //escola origem
        'school_year', //ano letivo
        'has_disabled', //pnr
        'desc_disabled', //desc pnr
        'allergy', //alergia
        'desc_allergy', //desc alergia
        'number_brothers', //qtd irmaos
        'people_id',
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
