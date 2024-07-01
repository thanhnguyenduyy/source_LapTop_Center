<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    public function getList()
    {
    	$slide = Slide::all();
    	return view('admin.slide.list', compact('slide'));
    }

    public function getChangeActive($id)
    {
    	$slide = Slide::find($id);
    	if ($slide->active == 1) {
    		$slide->active = 0;
    	} else {
    		$slide->active = 1;
    	}

    	$slide->save();

    	return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
    }

    public function getAdd()
    {
    	return view('admin.slide.add');
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request, 
    		[
    			'txtLink' => 'required|unique:slide,link|min:2|max:100',
                
    		], 
    		[
    			'txtLink.required' => 'Bạn chưa nhập liên kết',
    			'txtLink.unique' => 'Liên kết đã tồn tại',
    			'txtLink.min' => 'Liên kết phải có độ dài từ 2 đến 100 ký tự',
    			'txtLink.max' => 'Liên kết đề phải có độ dài từ 2 đến 100 ký tự',
    		]
    	);

    	$slide = new Slide;
        $slide->link = $request->txtLink;
        $slide->active = $request->rdoActive;

        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('public/upload/slide'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('public/upload/slide', $image);
            $slide->image = $image;
        } else {
            $slide->image = "";
        }
    	$slide->save();

    	return redirect('admin/slide')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$slide = Slide::find($id);
    	return view('admin.slide.edit', compact('slide'));
    }

    public function postEdit(Request $request, $id)
    {
    	$slide = Slide::find($id);

    	if ($slide->name != $request->txtName) {
    		$this->validate($request, 
	    		[
	    			'txtName' => 'required|unique:slide,link|min:2|max:100',
	                
	    		], 
	    		[
	    			'txtName.required' => 'Bạn chưa nhập tên hãng',
	    			'txtName.unique' => 'Tên hãng đã tồn tại',
	    			'txtName.min' => 'Tên hãng phải có độ dài từ 2 đến 100 ký tự',
	    			'txtName.max' => 'Tên hãng đề phải có độ dài từ 2 đến 100 ký tự',
	    		]
	    	);
    	}

    	$slide->link = $request->txtLink;
        $slide->active = $request->rdoActive;
        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('upload/slide/'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('upload/slide/', $image);
            $slide->image = $image;
        }

        $slide->save();

    	return redirect('admin/slide')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$slide = Slide::find($id);
    	$slide->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
