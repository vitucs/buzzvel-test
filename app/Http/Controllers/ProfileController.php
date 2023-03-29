<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    public function index(Request $request){
        $name = $request->name;
        $msg = $request->msg;

        $profile = Profile::where('name', $name)->first();
        if(!$profile){
            return redirect()->route('/', ['msg'=> 'Profile not found.']);
        }
        return view('profile', ['profile' => $profile, 'msg'=> $msg]);
    }

    public function profiles()
    {
        $profiles = Profile::all();
        return response()->json($profiles);
    }

}
