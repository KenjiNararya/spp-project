<?php

// app/Http/Controllers/NotifikasiController.php
namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        $Notifikasis = Notifikasi::all();
        return response()->json($Notifikasis);
    }

    public function store(Request $request)
    {
        $Notifikasi = Notifikasi::create($request->all());
        return response()->json($Notifikasi, 201);
    }

    public function show($id)
    {
        $Notifikasi = Notifikasi::findOrFail($id);
        return response()->json($Notifikasi);
    }

    public function update(Request $request, $id)
    {
        $Notifikasi = Notifikasi::findOrFail($id);
        $Notifikasi->update($request->all());
        return response()->json($Notifikasi, 200);
    }

    public function destroy($id)
    {
        $Notifikasi = Notifikasi::findOrFail($id);
        $Notifikasi->delete();
        return response()->json(null, 204);
    }
}
