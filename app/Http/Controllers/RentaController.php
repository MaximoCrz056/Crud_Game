<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rentas = Renta::paginate();

        return view('renta.index', compact('rentas'))
            ->with('i', ($request->input('page', 1) - 1) * $rentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $renta = new Renta();

        return view('renta.create', compact('renta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentaRequest $request): RedirectResponse
    {
        Renta::create($request->validated());

        return Redirect::route('rentas.index')
            ->with('success', 'Renta creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $renta = Renta::find($id);

        return view('renta.show', compact('renta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $renta = Renta::find($id);

        return view('renta.edit', compact('renta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentaRequest $request, Renta $renta): RedirectResponse
    {
        $renta->update($request->validated());

        return Redirect::route('rentas.index')
            ->with('success', 'Renta editada exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Renta::find($id)->delete();

        return Redirect::route('rentas.index')
            ->with('success', 'Renta borrada');
    }
}
