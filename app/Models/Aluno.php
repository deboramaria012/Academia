<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'alunos';
    protected $primaryKey = 'idAlunoo';

    const CREATED_AT = 'criado_em_Alunoo';
    const UPDATED_AT = 'atualizado_em_Alunoo';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    // de acordo com o nome q ta no banco
}
