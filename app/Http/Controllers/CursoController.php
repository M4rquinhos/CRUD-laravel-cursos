<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lista los cursos de manera descendente y hace la paginación
        $cursos = Curso::OrderBy('id', 'DESC')->paginate();
        // Rtorna la vista para listar los cursos. Recibe como parámetro la lista de cursos
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Devuelve la vista para crear un nuevo curso
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurso $request)
    {
        // $request es la petición que se recibe desde el formulario(create)

        // Validando los campos que vienen del formulario (function create)
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'description' => 'required|min:10',
        //     'category' => 'required'
        // ]); /**/ esto está dentro del form request validation (App\Http\Request\StoreCurso)*/

        // Creando el objeto curso con la informacion del formulario con lo que
        // recibe de $request
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // Se guarda el objeto curso en la base de datos
        // $curso->save();
        // Se redirecciona a la ruta del curso

        // Asignacion masiva
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        // Muestra el curso que se le pasa por parametro en la ruta
        // Laravel sabe que tiene que acceder al id del curso
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        // Muestra el formulario para editar el curso que se le pasa por parametro en la ruta
        // LArravel sabe que tiene que acceder al id del curso
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        // $request es la petición que se recibe desde el formulario(edit)

        // $curso es el curso que se va a editar

        // Se valida la inormacion que llega del formulario(edit)
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        // Asignacion masiva
        $curso->update($request->all());

        // Se redirecciona a la ruta del curso
        return redirect()->route('cursos.show', $curso);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
