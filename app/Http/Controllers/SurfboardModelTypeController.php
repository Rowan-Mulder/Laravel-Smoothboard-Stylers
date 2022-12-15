<?php

namespace App\Http\Controllers;

use App\Models\SurfboardModelType;
use Illuminate\Http\Request;

class SurfboardModelTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('web.sections.surfboard_model_type.index', [
            'surfboardModelTypes' => SurfboardModelType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('web.sections.surfboard_model_type.create');
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
            'name' => 'required|unique:surfboard_model_types|max:255',
        ]);

        SurfboardModelType::create($data);

        return redirect()->action([SurfboardModelTypeController::class, 'index']);
    }

    /**
     * @param SurfboardModelType $surfboardModelType
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(SurfboardModelType $surfboardModelType)
    {
        return view('web.sections.surfboard_model_type.details', [
            'surfboardModelType' => $surfboardModelType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(SurfboardModelType $surfboardModelType)
    {
        return view('web.sections.surfboard_model_type.edit', [
            'surfboardModelType' => $surfboardModelType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SurfboardModelType  $surfboardModelType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SurfboardModelType $surfboardModelType)
    {
        $data = $request->validate([
            'name' => 'required|unique:surfboard_model_types|max:255',
        ]);

        $surfboardModelType->update($data);

        return redirect()->action([SurfboardModelTypeController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurfboardModelType  $surfboardModelType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SurfboardModelType $surfboardModelType)
    {
        $surfboardModelType->delete();

        return redirect()->action([SurfboardModelTypeController::class, 'index'])->with('successMsg', 'Surfboard model type ' . $surfboardModelType->name . ' has been removed.');
    }
}
