<?php

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
use App\Models\Cadastro;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('cadastro');
});

Route::post('/cadastrar-pessoa',function(Request $request){

    Cadastro::create([
        'nome'=> $request->nome,
        'endereco'=> $request->endereco,
        'bairro'=> $request->bairro,
        'cep'=> $request->cep,
        'cidade'=> $request->cidade,
        'estado'=> $request->estado
    ]);

    echo "Cadastro feito com sucesso !";
});

Route::get('/pesquisa-pessoa/{id}', function($id){

    $cadastro = Cadastro::find($id);
    return view('pesquisa', ['cadastro' => $cadastro]);
});

Route::get('/atualizacao-pessoa/{id}', function($id){

    $cadastro = Cadastro::find($id);
    return view('atualizacao', ['cadastro' => $cadastro]);
});

Route::post('/atualizacao-pessoa/{id}', function(Request $request, $id){

    $cadastro = Cadastro::find($id);
    $cadastro->update([
        'nome'=> $request->nome,
        'endereco'=> $request->endereco,
        'bairro'=> $request->bairro,
        'cep'=> $request->cep,
        'cidade'=> $request->cidade,
        'estado'=> $request->estado
    ]);

    echo "Atualizado com sucesso!";
});

Route::get('/excluir-pessoa/{id}', function($id){

    $cadastro = Cadastro::find($id);
    return view('excluir', ['cadastro' => $cadastro]);
});

Route::post('/excluir-pessoa/{id}', function(Request $request, $id){

    $cadastro = Cadastro::find($id);
    $cadastro->delete();

    echo "Excluido com sucesso!";
});
