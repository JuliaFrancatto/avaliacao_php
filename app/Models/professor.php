<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['name', 'cpf', 'email'];

    public function materias() {
        return $this->hasMany(Materia::class);
    }
}
