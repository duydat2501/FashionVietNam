<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Models\Order as ModelsOrder;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;

session_start();

use PDF;
use Auth;

class CheckoutController extends Controller
{
    // xác thực đăng nhập
    public function AuthLogin()
    {
        $admin_id = Auth::id();
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    // hiển thị giao diện đăng nhập khách hàng
    public function login_checkout()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        // $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();
        return view('pages.login')->with('category', $cate_product);
    }

    // hiển thị giao diện đăng ký khách hàng
    public function signup_checkout()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        return view('pages.checkout.signup_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }

    // thêm khách hàng
    public function add_customer(Request $request)
    {

        // $data = array();
        // $data['customer_name'] = $request->customer_name;
        // $data['customer_phone'] = $request->customer_phone;
        // $data['customer_email'] = $request->customer_email;
        // $data['customer_password'] = md5($request->customer_password);

        // $customer_id = DB::table('tbl_customers')->insertGetId($data);

        // Session::put('customer_id', $customer_id);
        // Session::put('customer_name', $request->customer_name);

        // return Redirect('/checkout');

        $customer_email = $request->customer_email;
        $customer_name =  $request->customer_name;
        $password = $request->customer_password;
        $input_repassword = $request->repass;
        $customer_phone = $request->customer_phone;

        if ($customer_email == null || $customer_name == null) {
            return redirect('/signup-customer')
                ->with('status', 'Vui lòng nhập đầy đủ tên đăng nhập và email!');
        }

        if ($customer_name == null) {
            return redirect('/signup-customer')
                ->with('status', 'Vui lòng nhập tên đăng nhập!');
        }

        if ($password == null) {
            return redirect('/signup-customer')
                ->with('status', 'Vui lòng nhập mật khẩu!');
        }

        // Kiểm tra xem email đã tồn tại trong bảng tbl_customers chưa
        $existingCustomer = DB::table('tbl_customers')
            ->where('customer_email', $customer_email)
            ->first();

        if ($input_repassword != $password) {
            return redirect('/signup-customer')
                ->with('status', 'Vui lòng kiểm tra lại mật khẩu đăng ký!');
        }

        if ($existingCustomer) {
            return redirect('/signup-customer')
                ->with('status', 'Tài khoản đã đăng ký. Vui lòng kiểm tra lại!');
        } else {
            // Nếu email không trùng, thực hiện thêm khách hàng mới vào bảng
            $data = array();

            $data['customer_phone'] = $customer_phone;
            $data['customer_name'] = $customer_name;
            // $data['customer_phone'] = $request->customer_phone;
            $data['customer_email'] = $customer_email;
            $data['customer_password'] = md5($request->customer_password);

            $customer_id = DB::table('tbl_customers')->insertGetId($data);

            if ($customer_id) {
                Session::put('customer_id', $customer_id);
                Session::put('customer_name', $request->customer_name);
                return redirect('/login-customer')->with('status', 'Đăng ký tài khoản thành công! Vui lòng đăng nhập!');
            }
        }
    }

    // hiển thị trang thanh toán
    public function checkout()
    {
        $content = Cart::content();
        if (!$content->isNotEmpty()) {
            return Redirect('/');
        }
        
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        return view('pages.checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }

    // lưu thông tin ở trang nhập thông tin thanh toán
    public function save_checkout_customer(Request $request)
    {
        $shippingNote = trim($request->input('shipping_note')) !== "" ? $request->input('shipping_note') : "";

        $data = array();
        $data['shipping_name'] = $request->shipping_name;

        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_note'] = $shippingNote;
        $data['shipping_address'] = $request->shipping_address;

        $data['shipping_country'] = $request->shipping_country;
        $data['shipping_state'] = $request->shipping_state;
        $data['shipping_city'] = $request->shipping_city;
        $data['shipping_zipcode'] = $request->shipping_zipcode;

        if (
            $data['shipping_name'] == null ||
            $data['shipping_phone'] == null ||
            $data['shipping_email'] == null ||
            $data['shipping_name'] == null ||
            $data['shipping_address'] == null ||
            $data['shipping_country'] == null ||
            $data['shipping_state'] == null ||
            $data['shipping_city'] == null ||
            $data['shipping_zipcode'] == null
        ) {
            return redirect('/checkout')
                ->with('status', 'Vui lòng nhập đầy đủ thông tin để tiến thành thanh toán!');
        }

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id', $shipping_id);

        // 

        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 1;
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        // insert order 

        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');

        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = floatval(str_replace(',', '', Cart::subtotal()));

        $order_data['order_status'] = 1;
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $order_data['created_at'] = date('Y-m-d H:i:s');

        // reset timezone to default
        date_default_timezone_set(date_default_timezone_get());

        // generate unique order code
        do {
            $order_code = substr(uniqid(), 0, 8);
            $order_exists = DB::table('tbl_order')->where('order_code', $order_code)->exists();
        } while ($order_exists);

        $order_data['order_code'] = $order_code;

        $order_id = DB::table('tbl_order')->insertGetId($order_data);


        // insert order details

        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_size'] = $v_content->options->sizes;
            $order_d_data['product_color'] = $v_content->options->colors;

            $order_d_data['product_sales_quantity'] = $v_content->qty;
            $order_d_data['order_code'] = $order_code;
            DB::table('tbl_order_details')->insert($order_d_data);
        }


        if ($data['payment_method'] == 2) {
            Cart::destroy();
            $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();
            return Redirect('/')->with('status', 'Đặt hàng thành công!');
            
            // return view('pages.handcash')->with('category', $cate_product)->with('brand', $brand_product);
        }

        return Redirect('/checkout');
    }

    // hiển thị giao diện thanh toán thành công
    public function payment()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();
        return view('pages.handcash')->with('category', $cate_product)->with('brand', $brand_product);
    }

    // đăng xuất khách hàng
    public function logout_checkout()
    {
        Session::flush();
        return Redirect('/');
    }

    // đăng nhập khách hàng
    public function login_customer_login(Request $request)
    {
        $email = $request->email_account;

        $password = md5($request->password_account);

        if ($email == null) {
            return redirect('/login-customer')
                ->with('status', 'Vui lòng nhập email để đăng nhập!');
        }

        if ($password == null) {
            return redirect('/login-customer')
                ->with('status', 'Vui lòng nhập mật khẩu để đăng nhập!');
        }

        $result = DB::table('tbl_customers')->where('customer_email', $email)->where('customer_password', $password)->first();
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);

            return Redirect::to('/')
                ->with('status', 'Đăng nhập thành công!');
        } else {

            return Redirect::to('/login-customer')
                ->with('status', 'Tài khoản hoặc mật khẩu không đúng!');;
        }
    }

    // lưu thông tin chi tiết đơn hàng
    public function order_place(Request $request)
    {
        // $content = Cart::content();
        // echo $content;

        // insert payment method

        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 1;
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        // insert order 

        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');

        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = floatval(str_replace(',', '', Cart::subtotal()));

        $order_data['order_status'] = 1;
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $order_data['created_at'] = date('Y-m-d H:i:s');

        // reset timezone to default
        date_default_timezone_set(date_default_timezone_get());

        // generate unique order code
        do {
            $order_code = substr(uniqid(), 0, 8);
            $order_exists = DB::table('tbl_order')->where('order_code', $order_code)->exists();
        } while ($order_exists);

        $order_data['order_code'] = $order_code;

        $order_id = DB::table('tbl_order')->insertGetId($order_data);


        // insert order details

        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            $order_d_data['order_code'] = $order_code;
            DB::table('tbl_order_details')->insert($order_d_data);
        }



        if ($data['payment_method'] == 1) {
            echo 'Thanh Toán Bằng ATM';
        } elseif ($data['payment_method'] == 2) {
            Cart::destroy();
            $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();
            return view('pages.checkout.handcash')->with('category', $cate_product)->with('brand', $brand_product);
        } else {
            echo 'Thẻ ghi nợ';
        }

        return Redirect('/payment');
    }
}
