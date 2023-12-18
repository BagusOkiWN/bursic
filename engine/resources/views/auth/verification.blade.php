<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <title>Verification</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container">
            <form action="{{ route('verify') }}" method="post">
                @csrf
                <h1>Verify Code</h1>
                <span>Enter the verification code sent to your email</span>
                <input type="text" name="verification_code" placeholder="Verification Code" />
                <button type="submit">Verify</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us, please enter the verification code.</p>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter the verification code sent to your email to complete the registration.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/auth.js') }}"></script>
</body>

</html>
