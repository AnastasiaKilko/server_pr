<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'specialty',
    ];
    public function doctor_specialty()
    {
        return $this->hasMany(Doctor_Specialty::class);
    }
}