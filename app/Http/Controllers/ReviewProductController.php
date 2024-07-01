<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReviewProduct;
use App\Product;
use Illuminate\Support\Facades\DB;

class ReviewProductController extends Controller
{
    public function getDelete($id)
    {
    	$reviewProduct = ReviewProduct::find($id);
    	$product = Product::find($reviewProduct->id_product);

    	$reviewProduct->delete();

    	$reviews = $product->reviewProduct;
        $totalReview = count($reviews);
        $totalRating = 0;
        foreach ($reviews as $item) {
            $totalRating += $item['rating'];
        }

        $product->rating = $totalRating / $totalReview;
        $product->save();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
