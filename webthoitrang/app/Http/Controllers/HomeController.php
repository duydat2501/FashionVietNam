<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // hiển thị trang chủ bán hàng
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_category_product.category_status', '1')
            ->where('product_status', '1')
            ->orderby('product_id', 'asc')
            ->get();
        return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // tìm kiếm theo từ khóa
    public function search(Request $request)
    {

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        $search_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('product_name', 'like', '%' . $keywords . '%')
            ->where('tbl_category_product.category_status', '1')
            ->where('product_status', '1')
            ->get();
        return view('pages.shop')->with('category', $cate_product)->with('brand', $brand_product)->with('search_product', $search_product)->with('keywords', $keywords);
    }

    // sắp xếp theo giá tiền từ cao xuống thấp, và ngược lại
    public function avanced_search(Request $request)
    {

        $keywords = $request->keywords;
        // $category_words = $request->category_submit;
        // $brand_words = $request->brand_submit;
        $price_words = $request->price_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        if ($price_words == 1) {
            $search_product = DB::table('tbl_product')
                ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
                ->where('product_name', 'like', '%' . $keywords . '%')
                ->where('tbl_category_product.category_status', '1')
                ->where('product_status', '1')
                ->orderby('product_price', 'asc')
                ->get();
        } else {
            $search_product = DB::table('tbl_product')
                ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
                ->where('product_name', 'like', '%' . $keywords . '%')
                ->where('tbl_category_product.category_status', '1')
                ->where('product_status', '1')
                ->orderby('product_price', 'desc')
                ->get();
        }

        return view('pages.shop')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('search_product', $search_product)
            ->with('keywords', $keywords)
            //    ->with('category_words', $category_words)
            //    ->with('brand_words', $brand_words)
            ->with('price_words', $price_words);
    }

    // sắp xếp giá tiền khi tìm kiếm theo danh mục
    public function avanced_search_category(Request $request)
    {

        $category_name = $request->category_name;
        // $brand_words = $request->brand_submit;
        $price_words = $request->price_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        $category_id = DB::table('tbl_category_product')->where('tbl_category_product.category_name', $category_name)->value('category_id');

        if ($price_words == 1) {
            $category_by_id = DB::table('tbl_product')
                ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
                ->where('tbl_product.category_id', $category_id)
                ->where('tbl_category_product.category_status', '1')
                ->where('product_status', '1')
                ->orderby('product_price', 'asc')->get();
        } else {
            $category_by_id = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_product.category_id', $category_id)
            ->where('tbl_category_product.category_status', '1')
            ->where('product_status', '1')
            ->orderby('product_price', 'desc')->get();
        }

        return view('pages.product_by_category')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('category_by_id', $category_by_id)
            ->with('category_name', $category_name)
            //    ->with('brand_words', $brand_words)
            ->with('price_words', $price_words);
    }

    // hiển thị trang khi gõ vào tìm kiếm theo từ khóa
    public function shop()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
        ->where('tbl_category_product.category_status', '1')
        ->where('product_status', '1')
        ->orderby('product_id', 'asc')
        ->get();
        return view('pages.shop')->with('category', $cate_product)->with('all_product', $all_product);
    }
    
    // hiển thị giỏ hàng
    public function cart()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.cart')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // hiển thị trang thanh toán
    public function checkout_customer()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product);
        return view('pages.checkout');
    }

    // hiển thị trang liên hệ
    public function contact()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.contact')->with('category', $cate_product)->with('all_product', $all_product);
    }


    // hiển thị chi tiết sản phẩm
    public function detail()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.detail')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // hiển thị giao diện đăng nhập khách hàng
    public function login_customer()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.login')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // hiển thị giao diện đăng ký khách hàng
    public function signup_customer()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.signup')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // hiển thị trang bài viết
    public function news()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.news')->with('category', $cate_product)->with('all_product', $all_product);
    }


    // xem chi tiết của tin 1
    public function detail_news1()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.detail_news1')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // xem chi tiết của tin 2
    public function detail_news2()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.detail_news2')->with('category', $cate_product)->with('all_product', $all_product);
    }

    // xem chi tiết của tin 3
    public function detail_news3()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.detail_news3')->with('category', $cate_product)->with('all_product', $all_product);
    }
}
