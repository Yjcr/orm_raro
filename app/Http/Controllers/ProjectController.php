<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        // $projects = Project::findOrFail(1);
        // este metodo nos retuna una excepcion si no encuentra el record en cuestion
        // $projects = Project::where('is_active', '=', 1)->update(['name'=>'panqueca']);
        // este metodo establece que si el dato (tercer parametro) de la columna (primer parametro)
        // en cuestion no coincide con ningun record de la entidad, retorna una excepcion
        return view('home', ['datos'=>$projects]);
    }
    public function create(Project $project){
        return view('inserccion', ['post'=> $project]);
    }

    public function store(Request $request) { 
        $project = New Project([
            'city_id'   => $request -> city_id,
            'company_id'=> $request -> company_id,
            'name'      => $request -> name,
            'execution_date' => $request -> execution_date,
            'is_active' => $request -> is_active
        ]);
        $request->user()->project()->save($project);
        return redirect()->route('post.create');
    }
    // public function insert(){
    //     return view('inserccion');
    // }
}
