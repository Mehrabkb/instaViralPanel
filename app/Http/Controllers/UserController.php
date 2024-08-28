<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(Request $request){
        switch ($request->method()){
            case 'GET':
                if(Auth::check()){
                    return redirect()->route('panel.home');
                }
                return view('user.login');
            case 'POST':
                $username = htmlspecialchars($request->get('username'));
                $password = htmlspecialchars($request->get('password'));
                if($this->userRepository->checkUserExist($username)){
                    if($this->userRepository->checkUserPassword($username , $password)){
                        $user = $this->userRepository->getUserByUsername($username);
                        Auth::login($user);
                        return redirect()->route('panel.home');
                    }else{
                        return redirect()->back()->withErrors('رمز عبور را صحیح وارد کنید');
                    }
                }else{
                    return redirect()->back()->withErrors('کاربری با این مشخصات یافت نشد');
                }
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
