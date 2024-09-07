<x-guest-layout>
    <div class="my-2">
        <img class="rounded mx-auto d-block" src="images/skit_logo.png" alt="skit_logo">
    </div>
    <form class="d-block mx-auto p-1 bg-white p-3 border col-12 col-sm-8 col-md-5 col-lg-4" method="POST"
        action="{{ route('password.email') }}">
        <h1 class="display-6 text-center p-2 bg-light">Password Reset</h1>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        @csrf
        <div class="mt-2">
            <label class="fs-6 text-secondary" for="email">
                Email
            </label>
            <input class="form-control p-2 mt-2" value="{{ old('email') }}" id="email" type="email" name="email"
                required autofocus="autofocus">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <button class="btn btn-dark mt-3 mx-auto d-block rounded-pill" type="submit">Reset Password</button>
    </form>
</x-guest-layout>