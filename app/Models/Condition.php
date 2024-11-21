<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    /** @use HasFactory<\Database\Factories\ConditionFactory> */
    use HasFactory;
    protected $table = 'conditions';
    protected $fillable = ['name'];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_conditions');
    }
}
