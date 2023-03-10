<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistentes;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoRegistro;


class RestControlador extends Controller
{
    protected $asistentes;

    public function __construct(Asistentes $asistentes)
    {
        $this->asistentes = $asistentes;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistentes = $this->asistentes->obtenerAsistentes();
        return view('registro.asistentes', ['asistentes' => $asistentes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asistente = new Asistentes($request->all());
        $asistente->save();
        //Mail::to($asistente['correo'])->send(new CorreoRegistro());
        return redirect()->action([RestControlador::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistente = $this->asistentes->obtenerAsistente($id);
        return view('registro.ver', ['asistente' => $asistente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $asistente = $this->asistentes->obtenerAsistente($id);
        return view('registro.editar', ['asistente' => $asistente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistente = Asistentes::find($id);
        $asistente->fill($request->all());
        $asistente->save();
        return redirect()->action([RestControlador::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asistente = Asistentes::find($id);
        $asistente->delete();
        return redirect()->action([RestControlador::class, 'index']);
    }
}
