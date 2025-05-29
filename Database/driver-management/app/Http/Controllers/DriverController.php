<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    public function create()
    {
        return view('drivers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'sim' => 'required',
            'idsupir' => 'required|unique:drivers',
            'ktp' => 'required|unique:drivers',
        ]);

        Driver::create($request->all());
        return redirect()->route('drivers.index');
    }

    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }

    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'nama' => 'required',
            'sim' => 'required',
            'idsupir' => 'required',
            'ktp' => 'required',
        ]);

        $driver->update($request->all());
        return redirect()->route('drivers.index');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('drivers.index');
    }
}
