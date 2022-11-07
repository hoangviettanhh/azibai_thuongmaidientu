<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateProductController extends Controller
{
    public function index()
    {
        return view('cart.create');
    }
    public function getproduct(Request $req)
    {
//        Sử dụng query bulder
//        DB::table('product_electronic')->insert([
//             'pro_name'=>$req->pro_name,
//             'pro_sku'=>$req->pro_sku,
//             'pro_keyword'=>$req->pro_keyword,
//             'pro_descr'=>$req->pro_descr,
//             'pro_cost'=>$req->pro_cost,
//        ]);

//        Sử dụng eloquent ORM laravel
        $data = new Product;
        $data->pro_name = $req->pro_name;
        $data->pro_sku = $req->pro_sku;
        $data->pro_keyword = $req->pro_keyword;
        $data->pro_descr = $req->pro_descr;
        $data->pro_cost = $req->pro_cost;
        $data->save();
        return redirect()->route('home')->with('thongbao','Thêm sản phẩm thành công !');
    }

    public function edit(Request $req)
    {
        //        Sử dụng query bulder
        $result['product'] =  DB::table('product_electronic')->where('id',$req->id)->get()->toArray();
        
        return view('cart.edit',$result);
    }
    public function updateproduct(Request $req)
    {
        DB::table('product_electronic')->where('id',$req->id)
            ->update([
                'pro_name'=>$req->pro_name,
                'pro_sku'=>$req->pro_sku,
                'pro_keyword'=>$req->pro_keyword,
                'pro_descr'=>$req->pro_descr,
                'pro_cost'=>$req->pro_cost
            ]);

       return redirect()->route('home')->with('thongbao','Cập nhật sản phẩm thành công !');
    }
    public function delete(Request $req)
    {
        //        Sử dụng query bulder
//        DB::table('product_electronic')->where('id',$req->id)->delete();

        //        Sử dụng eloquent ORM laravel
        Product::find($req->id)->delete();
        return redirect()->route('home')->with('thongbao','Xóa sản phẩm thành công !');
    }
}
