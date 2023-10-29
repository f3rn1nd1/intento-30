<?php

namespace App\Http\Controllers;

use App\Models\Educacione;
use Illuminate\Http\Request;

/**
 * Class EducacioneController
 * @package App\Http\Controllers
 */
class EducacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educaciones = Educacione::paginate();

        return view('educacione.index', compact('educaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $educaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $educacione = new Educacione();
        return view('educacione.create', compact('educacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Educacione::$rules);

        $educacione = Educacione::create($request->all());

        return redirect()->route('educaciones.index')
            ->with('success', 'Educacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $educacione = Educacione::find($id);

        return view('educacione.show', compact('educacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $educacione = Educacione::find($id);

        return view('educacione.edit', compact('educacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Educacione $educacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educacione $educacione)
    {
        request()->validate(Educacione::$rules);

        $educacione->update($request->all());

        return redirect()->route('educaciones.index')
            ->with('success', 'Educacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $educacione = Educacione::find($id)->delete();

        return redirect()->route('educaciones.index')
            ->with('success', 'Educacione deleted successfully');
    }
}
