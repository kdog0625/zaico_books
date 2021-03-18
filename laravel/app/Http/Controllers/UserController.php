<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('users.show', ['user' => $user]);
    }

    public function edit(){
        $user = Auth::user();
        return view('users.edit', ['user' => $user]);
    }

    public function update(UserRequest $request, User $user) {
        $params=$request->all();
        Storage::delete( $user->prof_image);

        if ($file = $request->prof_image) {
            //getClientOriginalNameでアップロードしたファイルの元の名前を知る事ができる。
            $fileName = time() . $file->getClientOriginalName();
            $params['prof_image'] = $fileName;
            $target_path = public_path('images/User/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        $this->user_corm($user, $request, $fileName);
        $user->save();
        return redirect()->route('users.show',['user' => $user]);
    }

    public function user_corm($user, $request, $fileName){
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->prof_image = $fileName;
        $user->prof_content = $request->prof_content;
        $user->sex = $request->sex;
        $user->birthday = $request->birthday;
    }
}
