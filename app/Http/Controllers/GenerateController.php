<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class GenerateController extends Controller
{
    public function index(Request $request){
        $msg = $request->msg;
        return view('generate', ['msg'=> $msg]);
    }

    public function generateQrCode(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'linkedin' => 'required|url',
            'github' => 'required|url',
        ]);
        if(!$validatedData){
            return redirect('/generate')->withErrors($validatedData);
        }

        $name = strtolower($request->input('name'));
        $linkedin = $request->input('linkedin');
        $github = $request->input('github');
        $msg = '';
        $profileExists = Profile::where('name', $name)->first();
        if (!$profileExists) {
            $profile = new Profile;
            $profile->name = $name;
            $profile->linkedin = $linkedin;
            $profile->github = $github;
        } else {
            $msg = "Profile already exists. The first created '".$name."' was returned";
        }
        
        if ($msg != '') {
            return view('generate', ['name' => $name, 'msg' => $msg]);
        } else {
            $profile->save();
            return view('generate', ['name' => $name]);
        }
    } 
}
