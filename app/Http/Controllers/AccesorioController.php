<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AccesorioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $accesorios = Accesorio::paginate();

        return view('accesorio.index', compact('accesorios'))
            ->with('i', ($request->input('page', 1) - 1) * $accesorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $accesorio = new Accesorio();

        return view('accesorio.create', compact('accesorio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccesorioRequest $request): RedirectResponse
    {
        Accesorio::create($request->validated());

        return Redirect::route('accesorios.index')
            ->with('success', 'Accesorio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $accesorio = Accesorio::find($id);

        return view('accesorio.show', compact('accesorio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $accesorio = Accesorio::find($id);

        return view('accesorio.edit', compact('accesorio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccesorioRequest $request, Accesorio $accesorio): RedirectResponse
    {
        $accesorio->update($request->validated());

        return Redirect::route('accesorios.index')
            ->with('success', 'Accesorio editado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Accesorio::find($id)->delete();

        return Redirect::route('accesorios.index')
            ->with('success', 'Accesorio borrado');
    }
}
