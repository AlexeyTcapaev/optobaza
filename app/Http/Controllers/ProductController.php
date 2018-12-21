<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = Product::add($request);
            $product->uploadImage($request->file('image'));
            if (isset($request->tags) && count($request->tags) > 0) {
                foreach ($request->tags as $tag) {
                    $product->tags()->attach($tag);
                }
            }
            if (empty($product))
                throw new Exception('Ошибка при создании продукта');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return redirect()->route('admin.products');
    }
    public function search(Request $request)
    {
        if($request->search == null)
        {
            return view('search', [
                'message' => 'Не задана строка для поиска'
            ]);
        }
        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('article', 'LIKE', '%' . $request->search . '%')->get();
        if (count($products) > 0)
            return view('search', [
            'products' => $products
        ]);
        else return view('search', [
            'message' => 'По вашему запросу ничего не найдено'
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            if (empty($product))
                return response()->json(['error' => 'Компания не найдена'], 404);
            else {
                $product->remove();
                return redirect()->route('admin.products');
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
