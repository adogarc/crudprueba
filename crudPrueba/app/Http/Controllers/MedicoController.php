<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Establecimiento;
use Illuminate\Http\Request;

/**
 * Class MedicoController
 * @package App\Http\Controllers
 */
class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::paginate();

        return view('medico.index', compact('medicos'))
            ->with('i', (request()->input('page', 1) - 1) * $medicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medico = new Medico();

        $establecimiento=Establecimiento::pluck('nombreestablecimiento','idestablecimiento');

        return view('medico.create', compact('medico','establecimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medico::$rules);

        $medico = Medico::create($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Medico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($idMedico)
    {
        $medico = Medico::find($idMedico);

        return view('medico.show', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idMedico)
    {
        $medico = Medico::find($idMedico);
        $establecimiento=Establecimiento::pluck('nombreestablecimiento','idestablecimiento');
        return view('medico.edit', compact('medico','establecimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medico $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        request()->validate(Medico::$rules);

        $medico->update($request->all());

        return redirect()->route('medicos.index')
            ->with('success', 'Medico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($idMedico)
    {
        $medico = Medico::find($idMedico)->delete();

        return redirect()->route('medicos.index')
            ->with('success', 'Medico deleted successfully');
    }
}
