<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makul;
use Illuminate\Support\Facades\Mail;

class MakulController extends Controller
{
    public function index()
    {
        return Makul::all();
    }

    public function show($idm)
    {
        return Makul::find($idm);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idm' => 'required',
            'nama' => 'required',
            'sks' => 'required',
        ]);

        return Makul::create($validatedData);
    }

    public function update(Request $request, $idm)
    {
        $makul = Makul::findOrFail($idm);
        $makul->update($request->all());

        return $makul;
    }

    public function destroy($idm)
    {
        $dosen = Makul::findOrFail($idm);
        $dosen->delete();

        return response()->noContent();
    }
}
