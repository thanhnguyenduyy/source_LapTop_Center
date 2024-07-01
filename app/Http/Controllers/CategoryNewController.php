<?php

namespace App\Http\Controllers;

use App\category_new;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryNewController extends Controller
{
    public function getList()
    {
        DB::enableQueryLog();
    	$categoryNews = DB::table('category_news')
        ->select('id','name','sort_order','status')
        ->orderBy('sort_order','asc')
        ->get();
        // dd(DB::getQueryLog());
    	return view('admin.categorynew.list', compact('categoryNews'));
    }

    public function getChangeActive($id)
    {
    	$categoryNews = category_new::find($id);
    	if ($categoryNews->status == 1) {
    		$categoryNews->status = 0;
    	} else {
    		$categoryNews->status = 1;
    	}
    	$categoryNews->save();

    	return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
    }

    public function getAdd()
    {
    	return view('admin.categorynew.add');
    }

    public function postAdd(Request $request)
    {
    	$categoryNews = new category_new();
        $categoryNews->name = $request->name;
        $categoryNews->sort_order = $request->sort_order;
        $categoryNews->status = $request->rdoActive;
    	$categoryNews->save();

    	return redirect('admin/danh-muc-tin-tuc')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$categoryNews = category_new::find($id);
    	return view('admin.categorynew.edit', compact('categoryNews'));
    }

    public function postEdit(Request $request, $id)
    {
    	$categoryNews = category_new::find($id);
        $categoryNews->name = $request->name;
        $categoryNews->sort_order = $request->sort_order;
        $categoryNews->status = $request->rdoActive;
    	$categoryNews->save();
    	return redirect('admin/danh-muc-tin-tuc')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$categoryNews = category_new::find($id);
    	$categoryNews->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }

}
