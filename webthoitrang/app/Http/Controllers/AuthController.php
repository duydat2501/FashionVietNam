<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Admin as ModelsAdmin;
use App\Models\Roles as ModelsRoles;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;

class AuthController extends Controller
{
    // hiển thị trang đăng ký quản trị
    public function register_auth()
    {
        return view('admin.custom_auth.register');
    }

    // đăng nhập quản trị
    public function login(Request $request)
    {
        $this->validate($request, [
            'admin_email' => 'required|email|max:255',
            'admin_password' => 'required|max:255',
        ]);

        $data = $request->all();
        if (Auth::attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])) {
            // echo Auth::attempt(['admin_email'=> $request->admin_email, 'admin_password'=> $request->admin_password]);
            return redirect('/dashboard');
        } else {
            return redirect('/login-auth')->with('message', 'Lỗi đăng nhập anthentication');
        }
    }

    // đăng ký quản trị
    public function register(Request $request)
    {
        $this->validation($request);
        $data = $request->all();
        $admin = new ModelsAdmin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_password = md5($data['admin_password']);

        $existingUser = DB::table('tbl_amin')
            ->where('admin_email', $data['admin_email'])
            ->first();

        if ($existingUser) {
            return redirect('/register-auth')
                ->with('message', 'Tài khoản đã đăng ký. Vui lòng kiểm tra lại!');
        } else {
            $admin->save();
            $admin->roles()->attach(ModelsRoles::where('name','user')->first());
            return redirect('/register-auth')->with('message', 'Đăng ký thành công!');
        }
    }

    // phương thức xác thực khi tạo tài khoản, được tạo tự động trong laravel
    public function validation($request)
    {
        return $this->validate($request, [
            'admin_name' => 'required|max:255',
            'admin_phone' => 'required|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_password' => 'required|max:255',
        ]);
    }

    // đăng xuất quản trị
    public function logout_auth()
    {
        Auth::logout();
        return redirect('/login-auth')->with('message', 'Đăng xuất anthentication thành công!');
    }

    // hiển thị giao diện đăng nhập quản trị
    public function login_auth()
    {
        return view('admin.custom_auth.login_auth');
    }
}
