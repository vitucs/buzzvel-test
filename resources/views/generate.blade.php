@extends('layout')

@section('content')
    <div class="container container-form">
        <h1>QR Code Image Generator</h1>
        @if (!isset($qrcode))
        <form method="POST" action="{{ secure_url('generateQrCode') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" minlength="4" required title="Enter a name with more than 4 characters">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn URL:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" pattern="https?://.+" required title="Enter a valid URL starting with http:// or https://">
            </div>
            <div class="form-group">
                <label for="github">GitHub URL:</label>
                <input type="text" class="form-control" id="github" name="github" pattern="https?://.+" required title="Enter a valid URL starting with http:// or https://">
            </div>
            <div class="button-container">
                <button type="submit" class="btn btn-primary">Generate Image</button>
            </div>
        </form>
        @endif
        @if (isset($qrcode))
        <div style = "display:flex; justify-content:center;">
            <div style="background-color: #ffffff; width: 300px; height: 600px; border-radius: 30px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding-top: 1px;">
                <div style = "display:flex; justify-content:center;"><div style="background-color: #000000; width: 150px; height: 15px; border-radius: 20px; margin: 20px 0 10px 0;"></div></div>
                <div style="background-color: #000000; width: 260px; height: 440px; margin: 20px auto 0; border-radius: 20px; overflow: hidden;">
                    <div style="width: 100%; height: 100%; padding: 10px; display:flex; align-items: center; justify-content:center; flex-direction: column;">
                        <h1>{{ $name }}</h1>
                        <h4>Scan Me</h4>
                        <a href='{{ url("profile/$name") }}'>
                            <div class="mt-4 qrcode">
                                <img src="{{ $qrcode }}" alt="QR code">
                            </div>
                        </a>
                    </div>
                </div>
                <div style = "display:flex; justify-content:center;">
                    <div style="background-color: #000; width: 50px; height: 50px; border-radius: 50%; margin: 20px 0 10px 0;">
                        <div style = "display:flex; justify-content:center; margin: 5px 0 5px 0;">
                            <div style="background-color: #fff; width: 40px; height: 40px; border-radius: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
