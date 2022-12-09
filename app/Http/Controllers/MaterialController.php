<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('web.sections.material.index', [
            'materials' => Material::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('web.sections.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:Materials|max:255',
        ]);

        Material::create($data);

        return redirect()->action([MaterialController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Material $material
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Material $material)
    {
        return view('web.sections.material.details', [
            'material' => $material
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Material $material)
    {
        return view('web.sections.material.edit', [
            'material' => $material
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Material $material)
    {
        $data = $request->validate([
            'name' => 'required|unique:Materials|max:255',
        ]);

        $material->update($data);

        return redirect()->action([MaterialController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Material $material)
    {
        //$material = Material::find($id);// In het geval dat route-model binding niet werkt
        $material->delete();

        return redirect()->action([MaterialController::class, 'index'])->with('successMsg', 'Materiaal ' . $material->name . ' is verwijderd.');
    }
}
