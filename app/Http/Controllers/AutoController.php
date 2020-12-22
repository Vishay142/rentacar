<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\auto;
use App\Models\AutoCreate;

class AutoController extends Controller
{
    public function index()
    {
        $autos = auto::all();
        return view('autos/index', compact('autos'));

    }

    public function create()
    {
        return view('autos.create');
    }

    public function store(StoreAutoRequest $request)
    {
       AutoCreate::create($request->validated());

        return redirect()->route('autos.create');


    }
    public function show()
    {
        $autos = auto::all();
        return view('huren', compact('autos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(auto $auto)
    {
        return view('autos.edit', compact('auto'));
    }


    public function update(StoreAutoRequest $request, auto $auto)
    {
        $auto->update($request->validated());
        return redirect()->route('autos.index');
    }

    public function destroy(auto $auto)
    {
            $auto->delete();
            return redirect()->route('autos.index');
    }
}
