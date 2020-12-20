<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\auto;

class AutoController extends Controller
{
    public function index()
    {
        $autos = auto::all();
        return view('autos/index', compact('autos'));

    }

    public function create()
    {
        return view('auto.index');
    }

    public function store(Request $request)
    {
        auto::create($request->validated());

        return redirect()->route('/huren');

    }

    public function show(auto $autos)
    {
        return view('autos.show', compact('autos'));
    }

    public function edit(auto $autos)
    {
        return view('autos.edit', compact('autos'));
    }


    public function update(UpdateautoRequest $request, $id)
    {
        //
    }

    public function destroy(auto $autos)
    {
            $autos->delete();
            return redirect()->route('autos.index');
    }
}
