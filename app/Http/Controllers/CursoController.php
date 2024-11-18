<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\Curso;
use Faker\Guesser\Name;
use Illuminate\Contracts\Support\ValidatedData;
use illuminate\Support\str;

class CursoController extends Controller
{
    //index para listar
    public function index()
    {
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')-> paginate();
        return view('cursos.index',compact('cursos'));

    }
    //create para mostrar un formulario
    public function create()
    {
        return view('cursos.create');
    }
    //show para mostrar un registro
    public function show(Curso $curso)
    {
        return view('cursos.show',compact('curso'));            
    }
    //store para ingresar un curso
    /*public function store(Request $request)
    {
        //validamos que los datos cumplan los requisitos
        $validatedData = $request->validate([
            'name'=>'required|string|max:255',//validacion para nombre
            'descripcion'=>'nullable|string|max:1000',//validacion para descripcion
            'categoria'=>'required|string|max:255',//validacion para categoria
        ]);
        dump($validatedData );
        //instanciando e ingresando los datos  a la tabla cursos
        //$curso = Curso::create($request->only(['name','descripcion','categoria']));
        //creando un curso
        $curso = new Curso();
        $curso -> name = strip_tags($validatedData['name']);
        $curso -> descripcion = $validatedData['descripcion'];
        $curso -> categoria = $validatedData['categoria'];
        $curso -> save();
        //enviando mensaje de exito
        return redirect()->route('cursos.show', $curso);    
    }*/
    public function store(StoreUserRequest $request)
    {
        //utilizando el metodo validated() para la validacion 
        $validatedData = $request->validated();
        // creando un nuevo curso luego de validar la informacion
        $curso = Curso::create($validatedData);
        //pasando a la vista todos los atributos
        return redirect()->route('cursos.show', $curso);
    }
    
    public function edit(Curso $curso)
    {   
        return view('cursos.edit',compact('curso'));
    }

    public function update (Request $request,Curso $curso)
    {
        //validar los datos correctos
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'categoria' => 'required|string|max:255',
        ]);
        //actualizar
        $curso -> name = strip_tags($validateData['name']);
        $curso -> descripcion = strip_tags($validateData['descripcion']);
        $curso -> categoria = strip_tags($validateData['categoria']);
        $curso -> save();
        //retornar 
        return redirect()->route('cursos.show', $curso)->with('success', 'datos actualizados');
    }  
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
