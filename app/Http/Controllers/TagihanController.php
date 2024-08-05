<?php

// app/Http/Controllers/TagihanController.php
namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        $Tagihans = Tagihan::all();
        return response()->json($Tagihans);
    }

    public function store(Request $request)
    {
        $Tagihan = Tagihan::create($request->all());
        return response()->json($Tagihan, 201);
    }

    public function show($id)
    {
        $Tagihan = Tagihan::findOrFail($id);
        return response()->json($Tagihan);
    }

    public function update(Request $request, $id)
    {
        $Tagihan = Tagihan::findOrFail($id);
        $Tagihan->update($request->all());
        return response()->json($Tagihan, 200);
    }

    public function destroy($id)
    {
        $Tagihan = Tagihan::findOrFail($id);
        $Tagihan->delete();
        return response()->json(null, 204);
    }
}
