<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\deficreatesale;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\valiaccount;

use App\User;
use App\Dxlaunch;
use App\Dxlaunch_information;
use App\Dxlaunch_Transaction;

class AdminController extends Controller
{
    public function addproject()
    {
        if (Auth::check() && Auth::user()->address_admin != null) {
            return view('admin.addproject');
        } elseif (Auth::check() && Auth::user()->address_admin == null) {
            return redirect()->route('setting');
        }
        return redirect()->route('home');
    }

    public function paddproject(deficreatesale $request)
    {
        try {
            DB::beginTransaction();

            $insertDataDX = $request->only(['token', 'price', 'soft', 'hard', 'min', 'max', 'liquidity', 'rate', 'start', 'end', 'lock', 'description', 'token_name', 'token_symbol', 'token_decimal']);
            $id = DB::table('dxlaunches')->max('id') + 1;
            $dxlaunch = new Dxlaunch($insertDataDX);
            $dxlaunch->id = $id;
            $dxlaunch->save();

            $insertDatainfor = $request->only(['logo_link', 'website_link', 'github_link', 'twitter_link', 'reddit_link', 'telegram_link']);
            $dxinfor = new Dxlaunch_information($insertDatainfor);
            $dxinfor->dxlaunch_id = $id;
            $dxinfor->save();

            DB::commit();
            return redirect()->route('defidashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput();
        }
    }

    public function order()
    {
        if (Auth::check()) {
            $transactions = Dxlaunch_Transaction::orderby('id', 'DESC')->get();
            return view('admin.order', compact('transactions'));
        }

        return redirect()->route('home');
    }

    public function changestatus(Request $request)
    {
        $id = $_POST['id'];
        $dx = Dxlaunch_Transaction::find($id);
        if ($dx->status == 1) {
            Dxlaunch_Transaction::where('id', $id)->update(['status' => 2]);
            return 2;
        } else {
            Dxlaunch_Transaction::where('id', $id)->update(['status' => 1]);
            return 1;
        }
    }

    public function setting()
    {
        if (Auth::check()) {
            $setting = User::find(1);
            if (Auth::user()->address_admin == null) {
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Vui lòng cập nhật địa chỉ ví nhận tiền để tạo dự án!!!!")';  
                echo '</script>';
            }
            return view('admin.setting', compact('setting'));
        }

        return redirect()->route('home');
    }

    public function psetting(valiaccount $request)
    {
        try {
            DB::beginTransaction();

            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'address_admin' => $request->address_admin,
            ]);
            DB::commit();
            return redirect()->route('setting')->with('success', 'Cập nhật thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Lỗi không xác định!');;
        }
    }

    public function changepass(Request $request)
    {
        try {
            DB::beginTransaction();
            $check = Hash::check($request->oldpass, Auth::user()->password);
            if ($check === true) {
                if ($request->password === $request->repassword) {
                    $passwordmd = Hash::make($request->password);
                    User::where('id', Auth::user()->id)->update([
                        'password' => $passwordmd,
                    ]); 
                    DB::commit();
                    return redirect()->route('setting')->with('success', 'Đổi mật khẩu thành công!');
                }else {
                    return redirect()->route('setting')->with('error', 'Mật khẩu mới không khớp!');
                }
            }else {
                return redirect()->route('setting')->with('error', 'Mật khẩu cũ không đúng vui lòng thử lại!');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Lỗi không xác định!');
        }
    }

    public function project()
    {
        if (Auth::check()) {
            $projects = Dxlaunch::orderby('id', 'DESC')->get();
            return view('admin.project', compact('projects'));
        }

        return redirect()->route('home');
    }

    public function deleteproject($id)
    {
        $delete = Dxlaunch::find($id);
        if ($delete) {
            $delete->delete();
        }

        return redirect()->route('project');
    }
    
}
