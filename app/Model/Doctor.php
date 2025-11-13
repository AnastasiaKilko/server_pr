<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'birthdate'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

}