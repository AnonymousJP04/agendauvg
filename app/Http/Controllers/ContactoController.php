<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all(); // Obtener todos los contactos de la base de datos. Query builder de Eloquent para obtener todos los registros de la tabla contactos
        return view('contactos.index', compact('contactos')); // Pasar los contactos a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validar datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:8',
            'email' => 'required|email|max:100',
        ]);

        Contacto::create($request->all());
        return redirect()->route('contactos.index')->with('success', 'Contacto creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
        $contacto = Contacto::find($contacto->id); // Obtener el contacto por su ID
        if (!$contacto) {
            return redirect()->route('contactos.index')->with('error', 'Contacto no encontrado.');
        }
        return view('contactos.edit', compact('contacto')); // Pasar el contacto a la vista de edición
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
        // Validar datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:8',
            'email' => 'required|email|max:100',
        ]);
        // Actualizar el contacto
        $contacto->update($request->all()); // Actualizar el contacto con los datos validados
        return redirect()->route('contactos.index')->with('success', 'Contacto actualizado con éxito.'); // Redirigir a la lista de contactos con un mensaje de éxito
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
        $contacto = Contacto::find($contacto->id); // Obtener el contacto por su ID
        if (!$contacto) {
            return redirect()->route('contactos.index')->with('error', 'Contacto no encontrado.');
        }
        $contacto->destroy($contacto->id); // Eliminar el contacto de la base de datos mediante id
        return redirect()->route('contactos.index')->with('success', 'Contacto eliminado con éxito.'); // Redirigir a la lista de contactos con un mensaje de éxito
    }
}
