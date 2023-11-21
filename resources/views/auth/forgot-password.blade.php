<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Reset Password</h1>
                            <p class="account-subtitle">Let Us Help You</p>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Enter your registered email address') }} <span
                                            class="login-danger">*</span></label>
                                    <x-text-input id="email" class="form-control" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <x-primary-button class="btn btn-primary btn-block">
                                        {{ __('Email Password Reset Link') }}
                                    </x-primary-button>
                                </div>
                                <div class="form-group mb-0">
                                    <a href="{{ route('login') }}"><button
                                            class="btn btn-primary primary-reset btn-block"
                                            type="button">Login</button></a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>