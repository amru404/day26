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
        $product = Product::all();

        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    

    public function store(Request $request)
    {       
        $this->validate($request, [
            'nama'     => 'required|string',
            'deskripsi'     => 'required|string',
            'harga'    => 'required|numeric',
            'stock'    => 'required|integer',
            'kategori' => 'required|string',
        ]);

        Product::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'harga'    => $request->harga,
            'stock'    => $request->stock,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('product')->with(['success' => 'Data Berhasil Disimpan!']);
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    public function edit(string $id)
    {
          $Product = Product::findOrFail($id);

          return view('product.edit', compact('Product'));
    }

    

    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'nama'     => 'required|string',
            'deskripsi'     => 'required|string',
            'harga'    => 'required|numeric',
            'stock'    => 'required|integer',
            'kategori' => 'required|string',
        ]);

        $product = Product::findOrFail($id);

        
            $product->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'harga'    => $request->harga,
                'stock'    => $request->stock,
                'kategori' => $request->kategori,
            ]);

        return redirect()->route('product')->with(['success' => 'Data Berhasil Diubah!']);
    }

    
    

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }

    function home() : Returntype {
        return view('welcome');
    }
}
