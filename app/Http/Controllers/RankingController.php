<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\Review;

use View;

use DB;

class RankingController extends Controller
{
    public $layout = "layouts.review_site";

    public function __construct()
    {
        // $productRanks = Product::take(5)->get();

        // $reviews = Review::groupBy('product_id')->get();

        // eval(\Psy\sh());

        $reviewSort = Review::select(DB::raw('count(*) as num, product_id'))->groupBy('product_id')->orderBy('num', 'DESC')->take(5)->get();
        $productRanks = $reviewSort->map(function($review)
        {
            return Product::find($review->product_id);
        });

        View::share('ranking', $productRanks);
    }
}
