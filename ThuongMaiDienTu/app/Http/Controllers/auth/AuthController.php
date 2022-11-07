<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login_signin');
    }
    public function signin(Request $req)
    {
        DB::table('tbtt_member_user')->insert([
            'username'=>$req->username,
            'password' =>bcrypt($req->password),
        ]);
        return redirect('home')->with('thongbao','Đăng Ký thành công !');
    }
    public function login(Request $req)
    {
//        Đăng nhập bằng query bulder
        $user =  $req->username;
        $pass = $req->password;
//         $result = DB::table('tbtt_member_user')->where('username',$user)->get()->toArray();
//         foreach ($result as $value)
//         {
//             if ($value->password == $pass)
//             {
//                 return redirect('home')->with('thongbao','Đăng nhập thành công !');
//             }else{
//                 echo 'Đăng nhập thất bại';
//         }
//         }

//         Đăng nhập bằng laravel sử dụng Auth
        if (Auth::attempt(['username'=>$user, 'password'=>$pass]))
        {
            return redirect('home')->with('thongbao','Đăng nhập thành công !');
        }else{
            echo 'Đăng nhập thất bại';
        }
    }
public function loguot()
{
    Auth::logout();
    return redirect('/');
}
}
