<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\System\Dashboard\Users\Services\UserService;
use Modules\System\Dashboard\Users\Services\UserInfoService;
use Modules\System\Dashboard\PermissionLogin\Services\PermissionLoginService;
use Modules\System\Dashboard\PermissionLogin\Models\PermissionLoginModel;
use Str;
use Modules\Base\Library;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function __construct(
        PermissionLoginService $permissionLoginService,
        UserInfoService $userInfoService,
        UserService $userService
        )
    {
        $this->permissionLoginService = $permissionLoginService;
        $this->userInfoService = $userInfoService;
        $this->userService = $userService;
    }
    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if($username == '' || $username == null){
            $data['username'] = "Tên đăng nhập không được để trống";
            return view('auth.signin',compact('data'));
        }
        if($password == '' || $password == null){
            $data['password'] = "Mật khẩu không được để trống";
            return view('auth.signin',compact('data'));
        }
        
        $param = [
            'username'=> $request->username,
            'password'=> $request->password
        ];
        $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/login');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        if($response['status'] == true){
            $getkhoaphong = $this->getkhoaphong($response['loginModel']['matram']);
            $gettrangthai = $this->gettrangthai();
            $getthietbi = $this->getthietbi($response['loginModel']['matram']);
            $getvungkhaosat = $this->getvungkhaosat($response['loginModel']['matram']);

            $_SESSION["username"] = $request->username;
            $_SESSION["matram"] = $response['loginModel']['matram'];
            $_SESSION["idnhanvien"] = $response['loginModel']['idnhanvien'];
            $_SESSION["tennhanvien"] = $response['loginModel']['tennhanvien'];
            $_SESSION["khoaphong"] = $getkhoaphong;
            $_SESSION["vungkhaosat"] = $getvungkhaosat;

            $_SESSION["thietbi"] = $getthietbi;
            $_SESSION["trangthai"] = $gettrangthai;

            return view('client.home.home');
        }else{
            $data['false'] = "Thông tin đăng nhập không chính xác!";
            return view('auth.signin',compact('data'));
        }
    }
    public function getkhoaphong ($matram)
    {
        $matram = 'matram='.$matram;
        $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getkhoaphong?'.$matram.'');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $khoaphong = [];
        if($response['status'] == true){
            $khoaphong = $response['result'];
        }
        return $khoaphong;
    }
    public function gettrangthai ()
    {
        $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/gettrangthai');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $trangthai = [];
        if($response['status'] == true){
            $trangthai = $response['result'];
        }
        return $trangthai;
    }
    public function getthietbi ($matram)
    {
        $matram = 'matram='.$matram;
        $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getthietbi?'.$matram.'');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $thietbi = [];
        if($response['status'] == true){
            $thietbi = $response['result'];
        }
        return $thietbi;
    }
    public function getvungkhaosat ($matram)
    {
        $matram = 'matram='.$matram;
        $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getvungkhaosat?'.$matram.'');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $vungkhaosat = [];
        if($response['status'] == true){
            $vungkhaosat = $response['result'];
        }
        return $vungkhaosat;
    }
    public function logout (Request $request)
    {
        Auth::logout();
        if(!empty($_SESSION['role'])){
            session_destroy();
        }
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('checkLogin');
    }
    public function login  (Request $request)
    {
        return view('auth.signin');
    }
}
