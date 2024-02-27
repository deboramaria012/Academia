<?php

use App\Http\Controllers\administradorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ContatoDoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeDoController;
use App\Http\Controllers\instrutorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModalidadeDoController;
use App\Http\Controllers\NoticiasDoController;
use App\Http\Controllers\NoticiasoDoController;
use App\Http\Controllers\SobreDoController;
use App\Http\Controllers\TreinoDoController;
use App\Http\Middleware\AutAcademiaMiddle;
use App\Http\Middleware\LogAcessoAcademia;
use App\Models\Aluno;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeDoController::class, 'index'])->name('home'); // Página "Home"
Route::get('/sobre', [SobreDoController::class, 'index'])->name('sobre'); //Página "Sobre"
Route::get('/noticias', [NoticiasDoController::class, 'index'])->name('noticia'); // Página "Noticias"
Route::get('/modalidade', [ModalidadeDoController::class, 'index'])->name('modalidade'); //Página "Modalidade"
Route::get('/modalidade/musculacao',[ModalidadeDoController::class,'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/aerobica',[ModalidadeDoController::class, 'aerobica'])->name('modalidade.aerobica');
Route::get('/modalidade/pilates',[ModalidadeDoController::class,'pilates'])->name('modalidade.pilates');
Route::get('/modalidade/yoga',[ModalidadeDoController::class,'yoga'])->name('modalidade.yoga');
Route::get('/modalidade/Treinamentofuncional',[ModalidadeDoController::class ,'Treinamentofuncional'])->name('modalidade.treinamentofuncional');
Route::get('/treino',[TreinoDoController::class,'index'])->name('treino'); // Página "Treino"


Route::get('/login',[LoginController::class,'index'])->name('login');
route::post('/login', [LoginController::class, 'autenticar'])->name('login');


Route::middleware(['autenticacao:aluno'])->group(function (){


  Route::get('/dashboard/aluno',[AlunoController::class,'index'])->name('dashboard.aluno.aluno');
});





Route::middleware(['autenticacao:instrutor'])->group(function (){

 Route::get('/dashboard/instrutor',[instrutorController::class,'instrutor'])->name('dashboard.instrutor');
});


//Route::get('/dasboard/administrativo/funcionario',[administrador::class, 'indexFunc'])->name('admin.func.index');


Route::middleware(['autenticacao:administrativo'])->group(function (){

  Route::get('/dashboard/administrador',[administradorController::class,'indexFunc'])->name('dashboard.administrativo');





});



Route::get('/contato',[ContatoDoController::class,'index'])->name('contato');

Route::post('contato/enviar',[ContatoDoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/enviarNew',[ContatoDoController::class, 'salvarEmail'])->name('contato.enviarNew');

Route::get('/sair',function(){
  session()->flush();
  return redirect('/');
})->name('sair');


