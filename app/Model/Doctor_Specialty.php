<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_Specialty extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'doctors_id',
        'specialties_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctors_id');
    }
    public function specialty()
    {
        return $this->belongsTo(Specialty::class, 'specialties_id');
    }
}