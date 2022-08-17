<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //ユーザー一覧

    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();
        return view('user.index', [
            'users' => $users,
        ]);
    }
   

    //ユーザー編集画面の表示
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    //ユーザー情報更新
    public function postEdit($id, Request $request)
    {
        $user = User::find($id);
            
        // DBへ更新依頼
            
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
    
        // 再度編集画面へリダイレクト
        return redirect()->route('user.edit', ['id' => $id]);
    }
   /**
 * IDから一件のデータを取得する
 */
// public function selectUserFindById($id)
// {

//     $query = $this->select([
//         'id',
//         'name',
//         'email',
//         'role'
//     ])->where([
//         'id' => $id
//     ]);
//     // first()は1件のみ取得する関数
//     return $query->first();
// }

/**
 * IDで指定したユーザを更新する
 */
    public function updateUserFindById($user)
    {
        return $this->where([
            'id' => $user['id']
        ])->update([
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role']
        ]);
    }
}

