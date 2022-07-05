<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    
    public function index()
    {
        $prices = Price::all();
        return view('admin.prices.index', compact('prices'));
    }

    
    public function create()
    {
        return view('admin.prices.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required   | unique:prices',
            'value' => 'required | numeric'
        ]);

        $price = Price::create($request->all());

        return redirect()->route('admin.prices.edit', compact('price'))->with('info', 'el precio se creo con exito');
    }

    
    public function show(Price $price)
    {
        
    }

    
    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'name' => 'required   | unique:prices,name,' . $price->id,
            'value' => 'required | numeric'
        ]);

        $price->update($request->all());

        return redirect()->route('admin.prices.edit', compact('price'))->with('info', 'el precio se actualizo con exito');

    }

    
    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('admin.prices.index')->with('info', 'el precio se Elimino con exito');
    }
}
