<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function updateGioithieu($id)
    {
        $gioiThieu = Setting::find($id);
    	return view('admin.setting.gioithieu',compact('gioiThieu'));
    }

    public function postupdateGioithieu(Request $request, $id)
    {
    	$data = Setting::find($id);

    	$data->title_gioithieu = $request->title_gioithieu;
        $data->gioithieu = $request->gioithieu;
        $data->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }

    public function updateLienhe($id)
    {
        $lienHe = Setting::find($id);
    	return view('admin.setting.lienhe',compact('lienHe'));
    }

    public function postupdateLienhe(Request $request, $id)
    {
    	$data = Setting::find($id);

    	$data->title_lienhe = $request->title_lienhe;
        $data->diachi = $request->diachi;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();
        return redirect()->back()->with('success', 'Sửa thành công');
    }

}
