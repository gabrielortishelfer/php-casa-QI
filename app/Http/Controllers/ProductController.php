<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            "name" => "required|min:3",
            "price" => "required|numeric",
            "description" => "required|min:3",
        ]);
        Product::create($request->all());
        return redirect()->route('newProduct');
    }



    public function edit(int $id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Validação dos campos, se necessário
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string|min:3'
        ]);
        if ($validator->fails()) {
            return redirect(route('edit', $request->id))
                ->withErrors($validator)
                ->withInput();
        }
        // Atualizar os dados do produto
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();


        return redirect()->route('edit', ['id' => $product->id])
            ->with('success', 'Produto atualizado com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        // Redirecionar para a página de visualização do produto, por exemplo
        return redirect()->route('storage')->with('success', 'Produto removido com sucesso!');
    }
}
