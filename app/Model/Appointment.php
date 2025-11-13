<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'doctors_id',
        'patients_id',
        'date',
        'time',
        'users_id'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctors_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patients_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}

