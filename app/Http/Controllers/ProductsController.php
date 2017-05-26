<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductsController extends RankingController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth', array('only' => 'search'));
    }

    public function index()
    {
        // productsテーブルから最新順に作品を20件取得する
        $products = Product::orderBy('id', 'ASC')->take(20)->get();

        return view('products.index')->with('products', $products);
    }

    public function show($id)
    {
        // productsテーブルから該当するidの作品情報を取得し$productの変数へ代入する処理を書いて下さい
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    public function search(Request $request)
    {
        // 検索フォームのキーワードをあいまい検索して、productsテーブルから20件の作品情報を取得する
        $products = \DB::select("select * from products where title like ? limit 20", ["%{$request->keyword}%"]);
        // $products = Product::where('title', 'LIKE', "%{$request->keyword}%")->take(20)->get();
        return view('products.search')->with('products', $products);
    }
}
