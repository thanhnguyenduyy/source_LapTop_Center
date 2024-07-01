<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class BillController extends Controller
{
    public function getList()
    {
    	$bill = Bill::all();
    	return view('admin.bill.list', compact('bill'));
    }

    public function getChangeStatus($id)
    {
        $bill = Bill::find($id);
        if ($bill->status == 0) {
            $bill->status = 1;
        }

        $bill->save();

        return redirect()->back()->with('success', 'Thay đổi trạng thái thành công');
    }

    public function getDelete($id)
    {
    	$bill = Bill::find($id);

        if ($bill->status == 0) {
            foreach ($bill->billDetail as $item) {
                $item->delete();
            }
        	$bill->delete();
        }

    	return redirect()->back()->with('success', 'Xóa thành công');
    }
}
