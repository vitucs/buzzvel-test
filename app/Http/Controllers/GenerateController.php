<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use App\Models\Profile;

class GenerateController extends Controller
{
    public function index(Request $request){
        $msg = $request->msg;
        return view('generate', ['msg'=> $msg]);
    }

    public function generateQrCode(Request $request){
        
        if ($msg!=''){
            return view('generate', ['qrcode' => $content, 'name' => $name, 'msg'=> 'Profile already exists.']);
        }else{
            return view('generate', ['qrcode' => $content, 'name' => $name]);
        }
    }

}
