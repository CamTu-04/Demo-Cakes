<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $cakes = Cake::all();
        return view('cakes.index', compact('cakes'));
    }

    public function create()
    {
        return view('cakes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Cake::create($request->all());
        return redirect()->route('cakes.index')->with('success', 'Bánh đã được thêm!');
    }

    public function edit(Cake $cake)
    {
        return view('cakes.edit', compact('cake'));
    }

    public function update(Request $request, Cake $cake)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $cake->update($request->all());
        return redirect()->route('cakes.index')->with('success', 'Bánh đã được cập nhật!');
    }

    public function destroy(Cake $cake)
    {
        $cake->delete();
        return redirect()->route('cakes.index')->with('success', 'Bánh đã được xóa!');
    }
}