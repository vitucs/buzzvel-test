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
        $name = $request->input('name');
        $linkedin = $request->input('linkedin');
        $github = $request->input('github');
        $msg = '';
        $profileExists = Profile::where('name', $name)->first();
        if (!$profileExists) {
            $profile = new Profile;
            $profile->name = $name;
            $profile->linkedin = $linkedin;
            $profile->github = $github;
            $profile->save();
        }else{
            $msg = 'Profile already exists.';
        }
        dd();
        $options = new QROptions([
            'version' => 5,
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel' => QRCode::ECC_L,
        ]);
        $outputFile = "qrcodes/$name.png";
        $qrCode = new QRCode($options);
        $qrCode->render("$name", $outputFile);
        $content = (string)$outputFile;
        if ($msg!=''){
            return view('generate', ['qrcode' => $content, 'name' => $name, 'msg'=> 'Profile already exists.']);
        }else{
            return view('generate', ['qrcode' => $content, 'name' => $name]);
        }
    }

}
