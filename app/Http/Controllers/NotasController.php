<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;


class NotasController extends Controller
{

    public function welcome() {
        return view('welcome');
    }

    public function index(){
        $notas = Notas::all(); //DB::table('notas')->get();

        return view('notas', ['notas' => $notas]);
    }
    
    public function vistaAgregar() {
        return view('agregar');
    }

    public function crear(Request $reques){
        Notas::create([
            'titulo' => $reques->input('title'),
            'contenido' => $reques->input('content')
        ]);
        return redirect('/notas');
        
    }

    public function edit($id){
        $notas = Notas::find($id); //DB::table('notas')->where('id', $id)->first();
            
        return view('editar', ['notas' => $notas]);
            #return 'Aqui se van a editar las notas' .$id;
    }

    public function update(Notas $notas, Request $request){
        $notas->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);
        return redirect('/notas');
    }

}
