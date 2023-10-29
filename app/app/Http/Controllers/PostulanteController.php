<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use Illuminate\Http\Request;

/**
 * Class PostulanteController
 * @package App\Http\Controllers
 */
class PostulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulantes = Postulante::paginate();

        return view('postulante.index', compact('postulantes'))
            ->with('i', (request()->input('page', 1) - 1) * $postulantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postulante = new Postulante();
        return view('postulante.create', compact('postulante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Postulante::$rules);

        $postulante = Postulante::create($request->all());

        return redirect()->route('postulantes.index')
            ->with('success', 'Postulante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postulante = Postulante::find($id);

        return view('postulante.show', compact('postulante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postulante = Postulante::find($id);

        return view('postulante.edit', compact('postulante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Postulante $postulante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulante $postulante)
    {
        request()->validate(Postulante::$rules);

        $postulante->update($request->all());

        return redirect()->route('postulantes.index')
            ->with('success', 'Postulante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $postulante = Postulante::find($id)->delete();

        return redirect()->route('postulantes.index')
            ->with('success', 'Postulante deleted successfully');
    }
}
