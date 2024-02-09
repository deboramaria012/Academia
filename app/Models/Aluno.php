<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $primaryKey = 'idAlunoo';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    // de acordo com o nome q ta no banco
}
