<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\TypeProduct;

class TypeProductController extends Controller
{
    public function getList()
    {
    	$typeProduct = TypeProduct::all();
    	return view('admin.typeProduct.list', compact('typeProduct'));
    }


    public function getAdd()
    {
        $category = Category::all();
    	return view('admin.typeProduct.add', compact('category'));
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request, 
    		[
                'lstIDCategory' => 'required',
    			'txtName' => 'required|unique:type_product,name|min:2|max:100',
                
    		], 
    		[
                'lstIDCategory.required' => 'Bạn chưa chọn hãng sản xuất', 
    			'txtName.required' => 'Bạn chưa nhập tên dòng sản phẩm',
    			'txtName.unique' => 'Tên dòng sản phẩm đã tồn tại',
    			'txtName.min' => 'Tên dòng sản phẩm phải có độ dài từ 2 đến 100 ký tự',
    			'txtName.max' => 'Tên dòng sản phẩm đề phải có độ dài từ 2 đến 100 ký tự',
    		]
    	);

    	$typeProduct = new TypeProduct;
        $typeProduct->name = $request->txtName;
        $typeProduct->slug = changeTitle($request->txtName);
        $typeProduct->id_category = $request->lstIDCategory;

    	$typeProduct->save();

    	return redirect('admin/dong-san-pham')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$category = Category::all();
        $typeProduct = TypeProduct::find($id);
    	return view('admin.typeProduct.edit', compact('category', 'typeProduct'));
    }

    public function postEdit(Request $request, $id)
    {
    	$typeProduct = TypeProduct::find($id);

    	if ($typeProduct->name != $request->txtName) {
    		$this->validate($request, 
	    		[
	    			'txtName' => 'required|unique:type_product,name|min:2|max:100',
	                
	    		], 
	    		[
	    			'txtName.required' => 'Bạn chưa nhập tên dòng sản phẩm',
	    			'txtName.unique' => 'Tên dòng sản phẩm đã tồn tại',
	    			'txtName.min' => 'Tên dòng sản phẩm phải có độ dài từ 2 đến 100 ký tự',
	    			'txtName.max' => 'Tên dòng sản phẩm đề phải có độ dài từ 2 đến 100 ký tự',
	    		]
	    	);
    	}

    	$typeProduct->name = $request->txtName;
        $typeProduct->slug = changeTitle($request->txtName);
        $typeProduct->id_category = $request->lstIDCategory;

        $typeProduct->save();

    	return redirect('admin/dong-san-pham')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$typeProduct = TypeProduct::find($id);
    	$typeProduct->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
