<?php

namespace App\Http\Controllers;

use App\category_new;
use App\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function getList()
    {
    	$new = news::all();
    	return view('admin.new.list', compact('new'));
    }

    public function getAdd()
    {
        $categoryNews = DB::table('category_news')->pluck('name', 'id');
    	return view('admin.new.add',compact('categoryNews'));
    }

    public function postAdd(Request $request)
    {
    	$new = new news;
        $new->title = $request->title;
        $new->id_category_new = $request->id_category_new;
        $new->info = $request->info;
        $new->content = $request->content;

        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('upload/new/'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('upload/new/', $image);
            $new->image = $image;
        } else {
            $new->image = "";
        }
    	$new->save();
    	return redirect('admin/tin-tuc')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
        $categoryNews = category_new::pluck('name', 'id');
    	$new = news::find($id);
    	return view('admin.new.edit', compact('new','categoryNews'));
    }

    public function postEdit(Request $request, $id)
    {
    	$new = news::find($id);
        $new->title = $request->title;
        $new->id_category_new = $request->id_category_new;
        $new->info = $request->info;
        $new->content = $request->content;

        if ($request->hasFile('filImage')) {
            $file = $request->file('filImage');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('upload/new/'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('upload/new/', $image);
            $new->image = $image;
        }

        $new->save();

    	return redirect('admin/tin-tuc')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$new = news::find($id);
    	$new->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
