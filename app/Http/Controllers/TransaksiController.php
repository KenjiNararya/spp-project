<?php

// app/Http/Controllers/TransaksiController.php
namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $Transaksis = Transaksi::all();
        return response()->json($Transaksis);
    }

    public function store(Request $request)
    {
        $Transaksi = Transaksi::create($request->all());
        return response()->json($Transaksi, 201);
    }

    public function show($id)
    {
        $Transaksi = Transaksi::findOrFail($id);
        return response()->json($Transaksi);
    }

    public function update(Request $request, $id)
    {
        $Transaksi = Transaksi::findOrFail($id);
        $Transaksi->update($request->all());
        return response()->json($Transaksi, 200);
    }

    public function destroy($id)
    {
        $Transaksi = Transaksi::findOrFail($id);
        $Transaksi->delete();
        return response()->json(null, 204);
    }
}
