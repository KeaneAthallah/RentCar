<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("backend.pages.cars.index", [
            'cars' => Car::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.pages.cars.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string",
            "capacity" => "required",
            "image" => "required|image|mimes:jpg,png",
            "harga_sendiri" => "required",
            "harga_supir" => "required",
        ]);
        $validatedData['image'] =  $request->file('image')->store('Produk');
        Car::create($validatedData);
        $notification = [
            'message' => 'Mobil Berhasil Ditambahkan',
            'alert-type' => 'success'
        ];

        return Redirect::route('cars.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view("backend.pages.cars.show", [
            "car" => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view("backend.pages.cars.edit", [
            "car" => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            "name" => "required|string",
            "capacity" => "required",
            "image" => "image|mimes:jpg,png",
            "harga_sendiri" => "required",
            "harga_supir" => "required",
        ]);
        if ($request->file('image')) {
            if ($oldImage = $request->car->image) {
                Storage::delete($oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('Produk');
        }
        $car->update($validatedData);
        $notification = [
            'message' => 'Mobil Berhasil Diubah',
            'alert-type' => 'info'
        ];

        return Redirect::route('cars.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
    }
}
