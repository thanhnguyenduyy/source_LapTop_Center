<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\TypeProduct;
use App\Product;
use App\ImageProduct;
use App\ReviewProduct;

class ProductController extends Controller
{
    public function getList()
    {
    	$product = Product::all();
    	return view('admin.product.list', compact('product'));
    }

    public function getChangeHot($id)
    {
        $product = Product::find($id);
        if ($product->hot == 1) {
            $product->hot = 0;
        } else {
            $product->hot = 1;
        }

        $product->save();

        return redirect()->back()->with('success', 'Thay đổi độ hot thành công');
    }

    public function getAdd()
    {
        $category = Category::all();
    	return view('admin.product.add', compact('category'));
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request, 
    		[
    			'txtName' => 'required|unique:product,name|min:2|max:100',
                'txtUnitPrice' => 'required|min:3|max:10',
                
    		], 
    		[
    			'txtName.required' => 'Bạn chưa nhập tên sản phẩm',
    			'txtName.unique' => 'Tên sản phẩm đã tồn tại',
    			'txtName.min' => 'Tên sản phẩm phải có độ dài từ 2 đến 100 ký tự',
    			'txtName.max' => 'Tên sản phẩm phải có độ dài từ 2 đến 100 ký tự',
                'txtUnitPrice.required' => 'Bạn chưa nhập giá',
                'txtUnitPrice.min' => 'Giá phải lớn hơn 1.000 và nhỏ hơn 1.000.000.000',
                'txtUnitPrice.max' => 'Giá phải lớn hơn 1.000 và nhỏ hơn 1.000.000.000'
    		]
    	);

    	$product = new Product;
        $product->name = $request->txtName;
        $product->slug = changeTitle($request->txtName);
        $product->id_type = $request->lstIDType;
        $product->unit_price = $request->txtUnitPrice;
        $product->promotion_price = $request->txtPromotionPrice;
        $product->quantity = $request->txtQuantity;
        $product->description = $request->txtDescription;
        $product->detail = $request->txtDetail;
        $product->hot = $request->rdoHot;
        $product->save();
        foreach ($request->filImage as $item) {
            if (isset($item)) {
                $extension = $item->getClientOriginalExtension();
                if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                    return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
                }
                $name = $item->getClientOriginalName();
                $image = str_random(4).'_'.$name;
                while (file_exists('upload/product/'.$image)) {
                    $image = str_random(4).'_'.$name;
                }
                $item->move('upload/product/', $image);

                $imageProduct = new ImageProduct;
                $imageProduct->name = $image;
                $imageProduct->id_product = $product->id;

                $imageProduct->save();
            }
        }

    	return redirect('admin/san-pham')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$category = Category::all();
        $product = Product::find($id);
        $typeProduct = TypeProduct::where('id_category', $product->typeProduct->id_category)->get();
    	return view('admin.product.edit', compact('category', 'product', 'typeProduct'));
    }

    public function postEdit(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product->name != $request->txtName) {
        	$this->validate($request, 
                [
                    'txtName' => 'required|unique:product,name|min:2|max:100',
                    'txtUnitPrice' => 'required|min:3|max:10',
                    
                ], 
                [
                    'txtName.required' => 'Bạn chưa nhập tên sản phẩm',
                    'txtName.unique' => 'Tên sản phẩm đã tồn tại',
                    'txtName.min' => 'Tên sản phẩm phải có độ dài từ 2 đến 100 ký tự',
                    'txtName.max' => 'Tên sản phẩm đề phải có độ dài từ 2 đến 100 ký tự',
                    'txtUnitPrice.required' => 'Bạn chưa nhập giá',
                    'txtUnitPrice.min' => 'Giá phải lớn hơn 1.000 và nhỏ hơn 1.000.000.000',
                    'txtUnitPrice.max' => 'Giá phải lớn hơn 1.000 và nhỏ hơn 1.000.000.000'
                ]
            );
        }

        $product->name = $request->txtName;
        $product->slug = changeTitle($request->txtName);
        $product->id_type = $request->lstIDType;
        $product->unit_price = $request->txtUnitPrice;
        $product->promotion_price = $request->txtPromotionPrice;
        $product->quantity = $request->txtQuantity;
        $product->description = $request->txtDescription;
        $product->detail = $request->txtDetail;
        $product->hot = $request->rdoHot;
        $product->save();
        if (isset($request->filImage)) {
            foreach ($request->filImage as $item) {
                if (isset($item)) {
                    $extension = $item->getClientOriginalExtension();
                    if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                        return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
                    }
                    $name = $item->getClientOriginalName();
                    $image = str_random(4).'_'.$name;
                    while (file_exists('upload/product/'.$image)) {
                        $image = str_random(4).'_'.$name;
                    }
                    $item->move('upload/product/', $image);

                    $imageProduct = new ImageProduct;
                    $imageProduct->name = $image;
                    $imageProduct->id_product = $product->id;

                    $imageProduct->save();
                }
            }
        }

        if (isset($request->chkDeleteImage)) {
            foreach ($request->chkDeleteImage as $item) {
                $imageProduct = ImageProduct::find($item);
                $imageProduct->delete();
            }
        }

    	return redirect('admin/san-pham')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
