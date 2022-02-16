<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function index(){
        //dd('Bem vindo ao curso');
        $cursos = Curso::all();
        //dd($cursos);
        
        return view('cursos.index', ['curso'=>$cursos]);
    }

    public function create(){
        return view('cursos.create');
        
    }
    public function store(Request $request){
       
        Curso::create($request->all());
        return redirect()->route('cursos-index');

    }
    public function edit($id){
        $cursos = Curso::where('id', $id)->first();
        if(!empty($cursos)){
            return view('cursos.edit', ['cursos'=>$cursos]);
        } else {
            return redirect()->route('cursos-index');

        }
        

    }
    public function update(Request $request,$id){

        $data = [
            'nome'=>$request->nome,
            'professor'=>$request->professor,
            'ano'=>$request->ano,
            'valor'=>$request->valor



        ];
        Curso::where('id',$id)->update($data);
        return redirect()->route('cursos-index');

    }

    public function destroy($id){
        Curso::where('id',$id)->delete();
        return redirect()->route('cursos-index');
    }
}
