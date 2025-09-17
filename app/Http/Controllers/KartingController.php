<?php

namespace App\Http\Controllers;

use App\Http\Requests\KartingRequest;
use App\Models\Karting;
use Illuminate\Http\Request;

class KartingController extends Controller
{
    public function index()
    {
        $kartings = Karting::orderBy('name')->paginate(12);
        return view('kartings.index', compact('kartings'));
    }

    public function create()
    {
        return view('kartings.create');
    }

    public function store(KartingRequest $request)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active'); // Checkbox siempre tiene booleano
        Karting::create($data);

        return redirect()->route('kartings.index')
                         ->with('success', 'Karting creado.');
    }

    public function show(Karting $karting)
    {
        return view('kartings.show', compact('karting'));
    }

    public function edit(Karting $karting)
    {
        return view('kartings.edit', compact('karting'));
    }

    public function update(KartingRequest $request, Karting $karting)
    {
        $data = $request->validated();
        $data['is_active'] = $request->has('is_active');
        $karting->update($data);

        return redirect()->route('kartings.show', $karting)
                         ->with('success', 'Karting actualizado.');
    }

    public function destroy(Karting $karting)
    {
        $karting->delete();
        return redirect()->route('kartings.index')
                         ->with('success', 'Karting eliminado.');
    }
}
