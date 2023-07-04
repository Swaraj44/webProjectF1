<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Info;
use App\Models\User;
use Auth;


class UserInfoController extends Controller
{

    public function edit($id)
    {
        $userInfo = User_Info::find($id);

        return view('edit info', compact('userInfo'));
    }

    public function update(Request $request, $id)
    {
        $userInfo = User_Info::find($id);
        $userInfo->fill($request->all());
        $userInfo->save();

        return redirect()->route('user_info.show', $userInfo->id);
    }

    public function show($id)
    {
       // $userInfos = User_Info::find($id);
           $userInfos = User_Info::all();

        return view('profile', compact('userInfos'));
    }
}


