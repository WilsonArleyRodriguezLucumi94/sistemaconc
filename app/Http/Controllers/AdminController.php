<?php

namespace App\Http\Controllers;
use App\Models\Encuesta;
use App\Models\Caracterizacion;
use App\Models\CaracterizacionUno;
use App\Models\CaracterizacionDos;
use App\Models\CaracterizacionTres;
use App\Models\CaracterizacionCuatro;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Método para mostrar el panel de administración
    public function index()
    {
        return view('admin.index'); // Asegúrate de tener una vista llamada `index` en el directorio `resources/views/admin`
    }

    // Otros métodos para gestionar el panel de administración


    public function crear_encuesta()
    {
        $encuestaC = Encuesta::count();
        $encuestaCount = $encuestaC + 1;
        return view('admin.crear_encuesta', compact('encuestaCount')); // Asegúrate de tener una vista llamada `index` en el directorio `resources/views/admin`
    }

    public function storeEncuesta(Request $request)
    {
        $request->validate([
            'numero_encuesta' => 'required|integer',
            'nombres_apellidos' => 'required|string|max:255',
            'vereda' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        // Crear una nueva encuesta con los datos validados
        $encuesta = new Encuesta([
            'numero_encuesta' => $request->numero_encuesta,
            'nombres_apellidos' => $request->nombres_apellidos,
            'vereda' => $request->vereda,
            'municipio' => $request->municipio,
            'departamento' => $request->departamento,
            'responsable' => $request->responsable,
            'email' => $request->email,
        ]);

        // Guardar la encuesta en la base de datos
        $encuesta->save();

        // Redireccionar a una página de éxito o mostrar un mensaje de éxito
        return redirect()->route('encuestas.index')->with('success', 'Encuesta guardada exitosamente.');
    }

    public function listarEncuestas()
    {
        // Obtener todos los encuestados
        $encuestas = Encuesta::all();

        // Pasar los datos a la vista
        return view('admin.listar_encuestas', compact('encuestas'));
    }

    public function editarEncuesta($id)
    {
        $encuestado = Encuesta::findOrFail($id);
        return view('admin.editar_encuestado', compact('encuestado'));
    }

    public function eliminarEncuesta($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $encuesta->delete();

        return redirect()->route('encuestas.index')->with('success', 'Encuesta eliminada exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $encuestado = Encuesta::findOrFail($id);
        $encuestado->update($request->all());
        return redirect()->route('encuestas.index')->with('success', 'Encuestado actualizado correctamente');
    }

    public function crear_caracterizacion()
    {
        return view('admin.crear_caracterizacion');
    }

    public function storeCaracterizacion(Request $request)
    {
        $request->validate([
            'nombre_caracterizacion' => 'required|string|max:255',
            'observacion_caracterizacion' => 'nullable|string',
        ]);

        Caracterizacion::create($request->all());

        return redirect()->route('caracterizacion.create')->with('success', 'Caracterización creada con éxito');
    }

    public function crear_preguntas()
    {   
        $caracterizaciones = Caracterizacion::all();
        return view('admin.crear_pregunta', compact('caracterizaciones'));
    }

    public function storePregunta(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'caracterizacion_id' => 'required|exists:caracterizacions,id',
            'pregunta' => 'required|string',
        ]);

        // Crear y guardar la pregunta
        $pregunta = new Pregunta();
        $pregunta->caracterizacion_id = $request->caracterizacion_id;
        $pregunta->pregunta = $request->pregunta;
        $pregunta->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', '¡La pregunta ha sido creada exitosamente!');
    }

    /////caracterizacion 1
        public function caracterizacion_uno($id)
        {
            // Obtener todas las caracterizaciones para el select
            $caracterizaciones = Caracterizacion::all();
            $encuestado = Encuesta::findOrFail($id);
            //$caracterizacion = Caracterizacion::findOrFail($id);
            //$dd($encuestado);
            return view('admin.caracterizacion_uno', compact('encuestado', 'caracterizaciones'));
            //return view('admin.caracterizacion_uno', compact('caracterizaciones'));
        }

        public function guardarPregunta(Request $request)
        {
            // Validar los datos del formulario
            $request->validate([
                'caracterizacion_id' => 'required|exists:caracterizacions,id',
                'sexo' => 'required',
                'edad_cumplida' => 'required|integer',
                'sabe_leer_escribir' => 'required',
                'numero_dependientes' => 'required|integer',
                'organizacion' => 'required|array',
                'actividad_principal' => 'required|array',
                'actividad_secundaria' => 'nullable|string',
            ]);

            // Crear una nueva pregunta y guardar los datos
            $pregunta = new CaracterizacionUno();
            $pregunta->caracterizacion_id = $request->input('caracterizacion_id');
            $pregunta->sexo = $request->input('sexo');
            $pregunta->edad_cumplida = $request->input('edad_cumplida');
            $pregunta->sabe_leer_escribir = $request->input('sabe_leer_escribir');
            $pregunta->numero_dependientes = $request->input('numero_dependientes');
            $pregunta->organizacion = implode(', ', $request->input('organizacion'));
            $pregunta->actividad_principal = implode(', ', $request->input('actividad_principal'));
            $pregunta->actividad_secundaria = $request->input('actividad_secundaria');
            $pregunta->save();

            // Redireccionar con un mensaje de éxito
            return redirect()->route('admin.createPregunta')->with('success', '¡La pregunta ha sido creada exitosamente!');
        }

        public function guardarCaracterizacionUno(Request $request)
        {
            // Validar los datos enviados desde el formulario
            $request->validate([
                // Define aquí las reglas de validación para cada campo si es necesario
            ]);
        
            // Guardar la caracterización en la base de datos
            CaracterizacionUno::create([
                'sexo' => $request->sexo,
                'edad_cumplida' => $request->edad_cumplida,
                'sabe_leer_y_escribir' => $request->sabe_leer_y_escribir,
                'num_personas_dependen_jefe_familia' => $request->num_personas_dependen_jefe_familia,
                'organizacion_pertenece' => $request->organizacion_pertenece,
                'actividad_principal' => $request->actividad_principal,
                'ingreso_familiar_promedio_mensual' => $request->ingreso_familiar_promedio_mensual,
            ]);
        
            // Redireccionar o devolver una respuesta según sea necesario
        }    
        
        
        //caracterizacion 2

        public function verCaracterizacion2($id)
    {
        $caracterizaciones = Caracterizacion::all();
        $encuestado = Encuesta::findOrFail($id);
        return view('admin.caracterizacion_dos', compact('encuestado', 'caracterizaciones'));
    }
        public function guardarCaracterizacion2(Request $request)
{
    // Validar los datos enviados desde el formulario
    $request->validate([
        // Define aquí las reglas de validación para cada campo si es necesario
    ]);

    // Guardar la caracterización en la base de datos
    CaracterizacionDos::create([
        'unidad_productiva' => implode(',', $request->unidad_productiva),
        'epoca_siembra' => implode(',', $request->epoca_siembra),
        'que_son_cabanuelas' => $request->que_son_cabanuelas,
        'tipos_cabanuelas' => $request->tipos_cabanuelas,
        'cabanuelas_grandes' => $request->cabanuelas_grandes,
        'cabanuelas_chiquitas' => $request->cabanuelas_chiquitas,
        'festividad_lluvias' => $request->festividad_lluvias,
    ]);

    // Redireccionar o devolver una respuesta según sea necesario
}

//caracterizacion 3

// Método para mostrar el formulario de CARACTERIZACIÓN 3
public function verCaracterizacion3($id)
{
    $caracterizaciones = Caracterizacion::all();
    $encuestado = Encuesta::findOrFail($id);
    return view('admin.caracterizacion_tres', compact('encuestado', 'caracterizaciones'));
}

// Método para guardar los datos del formulario de CARACTERIZACIÓN 3
public function guardarCaracterizacion3(Request $request)
{
    // Validar los datos enviados desde el formulario
    $request->validate([
        // Define aquí las reglas de validación para cada campo si es necesario
    ]);

    // Guardar la caracterización en la base de datos
    CaracterizacionTres::create([
        'formas_trabajo' => implode(',', $request->formas_trabajo),
        'tenencia_propiedad' => implode(',', $request->tenencia_propiedad),
    ]);

    // Redireccionar o devolver una respuesta según sea necesario
    return redirect()->route('ver.caracterizacion3')->with('success', 'Datos guardados exitosamente.');
}

    //caracterizacion 4
    public function verCaracterizacion4($id)
    {
        $caracterizaciones = Caracterizacion::all();
        $encuestado = Encuesta::findOrFail($id);
        return view('admin.caracterizacion_cuatro', compact('encuestado', 'caracterizaciones'));
    }

    public function listarCaracterizacion()
    {
        // Obtener todos los encuestados
        $encuestas = Encuesta::all();

        // Pasar los datos a la vista
        return view('admin.listarCaracterizacion', compact('encuestas'));
    }
    

    // Método para guardar los datos del formulario de CARACTERIZACIÓN 4
    public function guardarCaracterizacion4(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $request->validate([
            'formas_trabajo' => 'required|array',
            'tenencia_propiedad' => 'required|array',
            'areas_para_sembrar' => 'required|string',
            'cantidad_jornales' => 'required|integer',
            'tipo_fertilizacion' => 'required|array',
            'donde_vende' => 'required|array',
            'otro_donde_vende' => 'nullable|string',
        ]);

        // Guardar la caracterización en la base de datos
        CaracterizacionCuatro::create([
            'formas_trabajo' => implode(',', $request->formas_trabajo),
            'tenencia_propiedad' => implode(',', $request->tenencia_propiedad),
            'areas_para_sembrar' => $request->areas_para_sembrar,
            'cantidad_jornales' => $request->cantidad_jornales,
            'tipo_fertilizacion' => implode(',', $request->tipo_fertilizacion),
            'donde_vende' => implode(',', $request->donde_vende),
            'otro_donde_vende' => $request->otro_donde_vende,
        ]);

        // Redireccionar o devolver una respuesta según sea necesario
        return redirect()->route('ver.caracterizacion4')->with('success', 'Datos guardados exitosamente.');
    }

}
