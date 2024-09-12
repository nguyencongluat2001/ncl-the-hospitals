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
        // parent::__construct();
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
        // if (!$getUsers) {
        //     $message = "Sai tên đăng nhập!";
        //     return redirect('/');
        // }
        return view('client.home.home');

        if($password == '123'){
            $_SESSION["username"]   = $username;
            $_SESSION["password"]   = $password;
        }
    }
    public function logout (Request $request)
    {
        // session_unset();
        Auth::logout();
        if(!empty($_SESSION['role'])){
            session_destroy();
        }
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
    public function login  (Request $request)
    {
        return view('auth.signin');
    }
    // check quyền hiển thị menu
    private function checkPermision($menu,$role){
        foreach ($menu as $key => $value) {
            if ($key == $role) {
                $menu = $value;
                return  $menu;
            }
        }
   }
}
