<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_Position extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'doctors_id',
        'positions_id',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctors_id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class, 'positions_id');
    }
}