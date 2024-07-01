<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getList()
    {
    	$user = User::where('level', 0)->get();
    	return view('admin.user.list', compact('user'));
    }


    public function getDelete($id)
    {
    	$user = User::find($id);
    	$user->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
