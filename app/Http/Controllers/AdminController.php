<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getList()
    {
    	$admin = User::where('level', '!=', 0)->get();
    	return view('admin.admin.list', compact('admin'));
    }

    public function getChangeLevel($id)
    {
    	$admin = User::find($id);
    	if ($admin->level == 1) {
    		$admin->level = 2;
    	} else {
    		$admin->level = 1;
    	}

    	$admin->save();

    	return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
    }

    public function getAdd()
    {
    	return view('admin.admin.add');
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request, 
    		[
                'txtName' => 'required|min:2|max:100',
    			'txtEmail' => 'required|unique:users,email|email',
                'txtPassword' => 'required|min:6|max:32',
                'txtConfirmPassword' => 'required|same:txtPassword',
                'txtAddress' => 'required|min:2|max:100',
                'txtPhone' => 'required|min:10|max:11',
    		], 
    		[
                'txtName.required' => 'Bạn chưa nhập tên quản trị viên',
                'txtName.min' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
                'txtName.max' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
    			'txtEmail.required' => 'Bạn chưa nhập email',
    			'txtEmail.unique' => 'Email đã tồn tại',
                'txtEmail.email' => 'Bạn phải nhập đúng đinh dạng email',
    			'txtPassword.required' => 'Bạn chưa nhập mật khẩu',
                'txtPassword.min' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                'txtPassword.max' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                'txtConfirmPassword.required' => 'Bạn chưa xác nhận mật khẩu',
                'txtConfirmPassword.same' => 'Mật khẩu không khớp',
                'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
                'txtAddress.min' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtAddress.max' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
                'txtPhone.min' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
                'txtPhone.max' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
    		]
    	);

    	$admin = new User;
        $admin->name = $request->txtName;
        $admin->email = $request->txtEmail;
        $admin->password = bcrypt($request->txtPassword);
        $admin->address = $request->txtAddress;
        $admin->phone = $request->txtPhone;
        $admin->level = $request->rdoLevel;

        if ($request->hasFile('filAvatar')) {
            $file = $request->file('filAvatar');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('public/upload/users'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('public/upload/users', $image);
            $admin->avatar = $image;
        } else {
            $admin->avatar = "";
        }
    	$admin->save();

    	return redirect('admin/quan-tri-vien')->with('success', 'Thêm thành công');
    	
    }

    public function getEdit($id)
    {
    	$admin = User::find($id);
    	return view('admin.admin.edit', compact('admin'));
    }

    public function postEdit(Request $request, $id)
    {
    	$admin = User::find($id);

    	$this->validate($request, 
            [
                'txtName' => 'required|min:2|max:100',
                'txtAddress' => 'required|min:2|max:100',
                'txtPhone' => 'required|min:10|max:11',
            ], 
            [
                'txtName.required' => 'Bạn chưa nhập tên quản trị viên',
                'txtName.min' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
                'txtName.max' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
                'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
                'txtAddress.min' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtAddress.max' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
                'txtPhone.min' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
                'txtPhone.max' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
            ]
        );

    	$admin->name = $request->txtName;
        $admin->address = $request->txtAddress;
        $admin->phone = $request->txtPhone;
        $admin->level = $request->rdoLevel;

        if ($request->chkChangePassword == 'on') {
            $this->validate($request, 
                [
                    'txtPassword' => 'required|min:6|max:32',
                    'txtConfirmPassword' => 'required|same:txtPassword',
                ], 
                [
                    'txtPassword.required' => 'Bạn chưa nhập mật khẩu',
                    'txtPassword.min' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                    'txtPassword.max' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                    'txtConfirmPassword.required' => 'Bạn chưa xác nhận mật khẩu',
                    'txtConfirmPassword.same' => 'Mật khẩu không khớp',
                ]
            );
            $admin->password = bcrypt($request->txtPassword);
        }

        if ($request->hasFile('filAvatar')) {
            $file = $request->file('filAvatar');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('public/upload/slide'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('public/upload/users', $image);
            unlink('public/upload/users/'.$admin->avatar);
            $admin->avatar = $image;
        }

        $admin->save();

    	return redirect('admin/quan-tri-vien')->with('success', 'Sửa thành công');
    }

    public function getDelete($id)
    {
    	$admin = User::find($id);
    	$admin->delete();

    	return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getLoginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request, 
            [
                'txtEmail' => 'required',
                'txtPassword' => 'required',
            ], 
            [
                'txtEmail.required' => 'Bạn chưa nhập email', 
                'txtPassword.required' => 'Bạn chưa nhập mật khẩu',
            ]
        );

        if (Auth::attempt(['email' => $request->txtEmail, 'password' => $request->txtPassword])) {
            return redirect('admin');
        } else {
            return redirect()->back()->with('error', 'Sai email hoặc mật khẩu');
        }
    }

    public function getLogoutAdmin()
    {
        Auth::logout();
        return redirect('admin/dang-nhap');
    }

    public function getInformation()
    {
        $admin = User::find(Auth::user()->id);
        return view('admin.information', compact('admin'));
    }

    public function postInformation(Request $request)
    {
        $admin = User::find(Auth::user()->id);

        $this->validate($request, 
            [
                'txtName' => 'required|min:2|max:100',
                'txtAddress' => 'required|min:2|max:100',
                'txtPhone' => 'required|min:10|max:11',
            ], 
            [
                'txtName.required' => 'Bạn chưa nhập tên quản trị viên',
                'txtName.min' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
                'txtName.max' => 'Tên quản trị viên phải có độ dài từ 2 đến 100 ký tự',
                'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
                'txtAddress.min' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtAddress.max' => 'Địa chỉ phải có độ dài từ 2 đến 100 ký tự',
                'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
                'txtPhone.min' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
                'txtPhone.max' => 'Số điện thoại phải có độ dài từ 10 đến 11 ký tự',
            ]
        );

        $admin->name = $request->txtName;
        $admin->address = $request->txtAddress;
        $admin->phone = $request->txtPhone;

        if ($request->chkChangePassword == 'on') {
            $this->validate($request, 
                [
                    'txtPassword' => 'required|min:6|max:32',
                    'txtConfirmPassword' => 'required|same:txtPassword',
                ], 
                [
                    'txtPassword.required' => 'Bạn chưa nhập mật khẩu',
                    'txtPassword.min' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                    'txtPassword.max' => 'Mật khẩu phải có độ dài từ 6 đến 32 ký tự',
                    'txtConfirmPassword.required' => 'Bạn chưa xác nhận mật khẩu',
                    'txtConfirmPassword.same' => 'Mật khẩu không khớp',
                ]
            );
            $admin->password = bcrypt($request->txtPassword);
        }

        if ($request->hasFile('filAvatar')) {
            $file = $request->file('filAvatar');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->back()->with('error', 'Vui lòng chọn file hình ảnh');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4).'_'.$name;
            while (file_exists('public/upload/slide'.$image)) {
                $image = str_random(4).'_'.$name;
            }

            $file->move('public/upload/users', $image);
            $admin->avatar = $image;
        }

        $admin->save();

        return redirect('admin/thong-tin')->with('success', 'Sửa thành công');
    }
}
