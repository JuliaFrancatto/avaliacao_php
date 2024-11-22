<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function criar(Request $request) {
        $materia = new Materia;
        $materia->name = $request->name;
        $materia->professor = $request->professor;

        $materia->save();
        return redirect('/listar_materia');
    }

    public function listar() {
        $materias = \App\Models\Materia::with('professor')->get();
        return view("materias", ["materias"=>$materias]);
    }

    public function formCriarMateria() {
        $professores = \App\Models\Professor::all(); // Busca todos os professores
        return view('cadastro_materia', ['professores' => $professores]); // Envia para a view
    }
    

    public function deletar($id) {
        $materia = Materia::find($id);
        if ($materia) {
            $materia->delete();
        }
        return redirect('/listar_materia');
    }
    

    public function formEditarMateria($id) {
        $materia = Materia::find($id);

        return view('editar_materia', ["materia" => $materia]);
    }


    public function editar(Request $request) {
        Materia::where('id', $request->id)->update([
            'name' => $request->name,
            'professor' => $request->professor,
        ]);

        return redirect('/listar_materia');
    }
}
