<x-guest-layout>

  <div class="main-wrapper login-body">
    <div class="login-wrapper">
      <div class="container">
        <div class="loginbox">
          <div class="login-left">
            <img class="img-fluid" src="assets/img/login.png" alt="Logo">
          </div>
          <div class="login-right">
            <div class="login-right-wrap">
              <h1>{{ __('Sign Up') }}</h1>
              <p class="account-subtitle">{{ __('Enter details to create your account') }}</p>

              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label>{{ __('Name ') }}<span class="login-danger">*</span></label>
                  <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
                  <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                </div>
                <div class="form-group">
                  <label>{{ __('Email') }} <span class="login-danger">*</span></label>
                  <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                    autocomplete="username" />
                  <span class="profile-views"><i class="fas fa-envelope"></i></span>
                </div>
                <div class="form-group">
                  <label>{{ __('Password') }} <span class="login-danger">*</span></label>
                  <x-text-input id="password" class="form-control pass-input" type="password" name="password" required
                    autocomplete="new-password" />

                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  <span class="profile-views feather-eye toggle-password"></span>
                </div>
                <div class="form-group">
                  <label>{{ __('Confirm password') }} <span class="login-danger">*</span></label>

                  <x-text-input id="password_confirmation" class="form-control pass-confirm" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  <span class="profile-views feather-eye reg-toggle-password"></span>
                </div>
                <div class=" dont-have">{{ __('Already Registered?') }} <a href="{{ route('login') }}">{{ __('Login')
                    }}</a></div>
                <div class="form-group mb-0">
                  <x-primary-button class="btn btn-primary btn-block">
                    {{ __('Register') }}
                  </x-primary-button>
                </div>
              </form>

              <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">{{ __('or') }}</span>
              </div>

              <div class="social-login">
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>