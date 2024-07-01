<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\TypeProduct;

class AjaxController extends Controller
{
    //
    public function getTypeProduct($id)
    {
    	$typeProduct = TypeProduct::where('id_category', $id)->get();
        foreach ($typeProduct as $type) {
            echo '<option value="'.$type->id.'">'.$type->name.'</option>';
        }
    }
}
