<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';

    protected $primaryKey = 'persona_dni';

    public $incrementing = false;

    protected $fillable = [
        'persona_dni',
        'estado',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_dni', 'dni');
    }
}
