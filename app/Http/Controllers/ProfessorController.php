<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function criar(Request $request) {
        $professor = new Professor;
        $professor->name = $request->name;
        $professor->cpf = $request->cpf;
        $professor->email = $request->email;

        $professor->save();
        return redirect('/lista_professores');
    }

    public function listar() {
        $professores = Professor::all();

        return view("professores", ["professores"=>$professores]);
    }

    public function formCriarProfessor() {
        return view("cadastro_Professor");
    }

    public function deletar($id) {
        $professor = new Professor;
        $professor->find($id)->delete();
        return redirect('/lista_professores');
    }

    public function formEditarProfessor($id) {
        $professor = Professor::find($id);

        return view('editar_professor', ["professor" => $professor]);
    }


    public function editar(Request $request) {
        Professor::where('id', $request->id)->update([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email
        ]);

        return redirect('/lista_professores');
    }


}
