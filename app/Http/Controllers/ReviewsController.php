<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Review;
use Auth;

class ReviewsController extends RankingController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth', array('only' => 'create'));
    }

    public function create($id)
    {
        $product = Product::find($id);
        $review = new Review();
        return view('reviews.create')->with(array('product' => $product, 'review' => $review));
    }

    public function store(Request $request)
    {
        // Review::create()
        // return redirect('/products');
        Review::create([
          'user_id'     => Auth::user()->id,
          'rate'        => $request->rate,
          'review'      => $request->review,
          'product_id'  => $request->products,
        ]);

        return redirect('/');
    }
}
