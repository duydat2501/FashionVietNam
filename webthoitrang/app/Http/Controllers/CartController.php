<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;

class CartController extends Controller
{
    // thêm sản phẩm vào giỏ hàng
    public function save_cart(Request $request)
    {
        
        // dd($request->all());
        $productId = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $productId)->first();
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;   
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;

        $data['options']['sizes'] = $request->product_size;
        $data['options']['colors'] = $request->product_color;

        if($data['options']['sizes'] == null){
            return redirect('/chi-tiet-san-pham/' . $productId)
            ->with('status', 'Vui lòng chọn kích thước trước khi thêm vào giỏ hàng!');
        }

        if($data['options']['colors']  == null){
            return redirect('/chi-tiet-san-pham/' . $productId)
            ->with('status', 'Vui lòng chọn màu sắc trước khi thêm vào giỏ hàng!');
        }

        if($data['qty']  == 0){
            return redirect('/chi-tiet-san-pham/' . $productId)
            ->with('status', 'Vui lòng chọn số lượng sản phẩm lớn hơn 0');
        }

        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);

        return Redirect::to('/show-cart');

    }

    // hiển thị giỏ hàng
    public function show_cart()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        // $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();

        return view('pages.cart')->with('category', $cate_product);
    }

    // xóa giỏ hàng
    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }

    // cập nhật giỏ hàng
    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');
    }
}
