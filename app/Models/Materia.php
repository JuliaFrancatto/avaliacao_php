<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['name', 'professor_id'];

    public function professor() {
        return $this->belongsTo(Professor::class);
    }
}
