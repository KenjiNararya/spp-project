<?php

// app/Http/Controllers/PembayaranController.php
namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $Pembayaran = Pembayaran::all();
        return response()->json($Pembayaran);
    }

    public function store(Request $request)
    {
        $Pembayaran = Pembayaran::create($request->all());
        return response()->json($Pembayaran, 201);
    }

    public function show($id)
    {
        $Pembayaran = Pembayaran::findOrFail($id);
        return response()->json($Pembayaran);
    }

    public function update(Request $request, $id)
    {
        $Pembayaran = Pembayaran::findOrFail($id);
        $Pembayaran->update($request->all());
        return response()->json($Pembayaran, 200);
    }

    public function destroy($id)
    {
        $Pembayaran = Pembayaran::findOrFail($id);
        $Pembayaran->delete();
        return response()->json(null, 204);
    }
}
