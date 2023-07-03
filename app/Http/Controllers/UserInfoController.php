<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;


class UserInfoController extends Controller
{

    public function edit($id)
    {
        $userInfo = UserInfo::find($id);

        return view('user_info.edit', compact('userInfo'));
    }

    public function update(Request $request, $id)
    {
        $userInfo = UserInfo::find($id);
        $userInfo->fill($request->all());
        $userInfo->save();

        return redirect()->route('user_info.show', $userInfo->id);
    }

    public function show($id)
    {
        $userInfo = UserInfo::find($id);

        return view('user_info.show', compact('userInfo'));
    }
}


