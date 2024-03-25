<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $table = 'funcionario';
    protected $primaryKey = 'idFuncionario';


    const CREATED_AT = 'criadoEm';
    const UPDATED_AT = 'atualizadoEm';
    
    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
