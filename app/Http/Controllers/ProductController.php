<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    public function newProduct()
    {
        return view("newproduct");
    }
    public function dashboard()
    {
        return view("dashboard");
    }

    public function storage()
    {
        $products = Product::all();
        return view('storage', compact('products'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar os dados
        $request->validate([
            "name"=> "required|min:3",
            "price"=> "required|numeric",
            "description"=> "required|min:3",
        ]);
        Product::create($request->all());
        return redirect()->route('newProduct');
    }



    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
