<x-guest-layout>
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

        body {
            min-height: 100vh;
            background: linear-gradient(to bottom, #fff 10%, rgba(0, 0, 0, 0.2) 90%);
        }

        .h4 {
            font-family: 'Kaushan Script', cursive;
        }

        #loginform {
            box-shadow: 9px 11px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
    <div class="my-2">
        <img class="rounded mx-auto d-block" src="images/skit_logo.png" alt="skit_logo">
    </div>
    <form id="loginform" class="d-block mx-auto p-1 bg-white p-3 border col-12 col-sm-9 col-md-6 col-lg-5" method="POST"
        action="{{ route('login') }}">
        <div class="w-100 text-center h4 pt-2">Enter Your Credentials</div>
        @csrf
        <div class="mt-2">
            <label class="fs-6" for="email">
                Email
            </label>
            <input placeholder="Enter your Email" class="form-control p-2 mt-2" type="email" name="email" id="email"
                value="{{ old('email') }}" required autofocus autocomplete="username">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mt-2">
            <label class="fs-6" for="password">
                Password
            </label>

            <input value="{{ old('password') }}" placeholder="Enter your Password" class="mt-2 form-control p-2"
                type="password" name="password" id="password" required autocomplete="current-password">
        </div>

        <div class="mt-2">
            <label class="fs-6" for="captcha">
                Captcha
            </label>
            <div class="row mt-2">
                <div class="col-5">
                    <input placeholder="Enter CAPTCHA" class="form-control" id="captcha" type="text" name="captcha"
                        autocomplete="off">
                </div>
                <img src="{{route('captcha')}}" alt="CAPTCHA" class="col-5 captch-image">
                <div class="col-2" onclick="refreshCaptch();">
                    <svg class="w-75" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M463.5 224l8.5 0c13.3 0 24-10.7 24-24l0-128c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8l119.5 0z">
                        </path>
                    </svg>
                </div>
                @if ($errors->has('captcha'))
                <span class="text-danger">{{ $errors->first('captcha') }}</span>
                @endif

                <script>
                    function refreshCaptch() {
                            document.querySelector('.captch-image').src = "{{route('captcha')}}" + '?t=' + Date.now();
                        }
                </script>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <label>
                <input id="remember_me" type="checkbox" class="rounded-circle" name="remember">
                Remember Me
            </label>
            <a class="text-decoration-none text-dark" href="{{ route('password.request') }}">Forgot password?</a>
        </div>
        <button class="btn btn-dark mt-3 w-100 rounded-pill" type="submit">Sign In</button>
    </form>
</x-guest-layout>