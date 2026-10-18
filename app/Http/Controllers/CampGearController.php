<?php

namespace App\Http\Controllers;

use App\Models\CampGear;

class CampGearController extends Controller
{
    public function index()
    {
        // Beranda hanya menampilkan 4 produk.
        $campGears = CampGear::orderBy('id')->take(4)->get();

        return view('camp-gears.index', compact('campGears'));
    }

    public function catalog()
    {
        // Katalog menampilkan semua produk.
        $campGears = CampGear::orderBy('id')->get();

        return view('camp-gears.catalog', compact('campGears'));
    }

    public function show(string $id)
    {
        $campGear = CampGear::findOrFail($id);

        return view('camp-gears.show', compact('campGear'));
    }
}
