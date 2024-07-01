<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getList()
    {
    	$category = Category::all();
    	return view('admin.category.list', compact('category'));
    }

    public function getChangeActive($id)
    {
    	$category = Category::find($id);
    	if ($category->active == 1) {
    		$category->active = 0;
    	} else {
    		$category->active = 1;
    	}

    	$category->save();

    	return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
    }

    public function getAdd()
    {
    	return view('admin.category.add');
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request, 
    		[
    			'txtName' => 'required|unique:category,name|min:2|max:100',
                
    		], 
    		[
    			'txtName.required' => 'Bạn chưa nhập tên hãng',
    			'txtName.unique' => 'Tên hãng đã tồn tại',
    			'txtName.min' => 'Tên hãng phải có độ dài từ 2 đến 100 ký tự',
    			'txtName.max' => 'Tên hãng đề phải có độ dài từ 2 đến 100 ký tự',
    		]
    	);

    	$category = new Category;
        $category->name = $request->txtName;
        $category->slug = changeTitle($request->txtName);
        $category->active = $request->rdoActive;

        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('upload/category/'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('upload/category/', $image);
            $category->image = $image;
        } else {
            $category->image = "";
        }
    	$category->save();

    	return redirect('admin/hang-san-xuat')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit', compact('category'));
    }

    public function postEdit(Request $request, $id)
    {
    	$category = Category::find($id);

    	if ($category->name != $request->txtName) {
    		$this->validate($request, 
	    		[
	    			'txtName' => 'required|unique:category,name|min:2|max:100',
	                
	    		], 
	    		[
	    			'txtName.required' => 'Bạn chưa nhập tên hãng',
	    			'txtName.unique' => 'Tên hãng đã tồn tại',
	    			'txtName.min' => 'Tên hãng phải có độ dài từ 2 đến 100 ký tự',
	    			'txtName.max' => 'Tên hãng đề phải có độ dài từ 2 đến 100 ký tự',
	    		]
	    	);
    	}

    	$category->name = $request->txtName;
        $category->slug = changeTitle($request->txtName);
        $category->active = $request->rdoActive;

        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('upload/category/'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('upload/category/', $image);
            $category->image = $image;
        }

        $category->save();

    	return redirect('admin/hang-san-xuat')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$category = Category::find($id);
    	$category->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
