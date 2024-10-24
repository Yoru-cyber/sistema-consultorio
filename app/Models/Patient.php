<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // Table associated with the model
    protected $table = 'patients';

    // Indicates if the model should be timestamped

    // Fields that can be mass-assigned
    protected $fillable = [
        'name',
        'sex',
        'email',
        'dni',  // Cedula del paciente
        'address',
        'phone_number',
        'age',
        'birthday',
        'emergency_phone_number',
    ];
    protected $casts = [
        'birthday' => 'date',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }


}
