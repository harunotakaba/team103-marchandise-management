<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\loginRequest;

use App\Models\User;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        return view('account.register');
    }
    /**
     * @param  App\Http\Requests\UserRequest
     * $request
     */
    public function userRegister(UserRequest $request)
    {
    // ユーザー情報を追加する
    $user = new User();
    $user->name = $request->user_name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
 
    $user->save();

    return redirect('home')->with('register_success','登録成功しました！！');
}
    public function userLogin(Request $request)
    {
    return view('account.login');
    }
    /**
     * 認証の試行を処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(loginRequest $request)
    {
        $credentials = $request->only('email','password');
       // dump(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]));
       // dump(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]));


        // ログイン判定
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('home');
        }
     
        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    }
}
