{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
		<link href="{{ asset("asset/vendors/base/vendors.bundle.css") }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset("asset/demo/default/base/style.bundle.css") }}" rel="stylesheet" type="text/css" />
</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(../../../asset/app/media/img//bg/bg-3.jpg);">
            <div class="m-login__wrapper-1 m-portlet-full-height" style="background-image: url(../../../asset/app/media/img//bg/bg-4.jpg)">
                <div class="m-login__wrapper-1-1">
                    <div class="m-login__contanier">
                        <div class="m-login__content">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="{{ asset("asset/app/media/img/logos/logoifri.png") }}" class="col-4 w-100">
                                </a>
                            </div>
                            <div class="m-login__title">
                                <h3 class="text-white">AluminiNet</h3>
                            </div>
                            <div class="m-login__desc text-light">
                                Connectez vous et communiquez aisement avec la communauté IFRI
                            </div>
                            <div class="m-login__form-action">
                                <button type="button" id="m_login_signup" class="btn btn-outline-focus m-btn--pill text-light">Compte entreprise</button>
                            </div>
                        </div>
                    </div>
                    <div class="m-login__border">
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="m-login__wrapper-2 m-portlet-full-height">
                <div class="m-login__contanier">
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Communiquez avez votre promotion et l'administration IFRI</h3>
                        </div>
                        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Matricule') }}</label>
                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Code inscription') }}</label>
                                <input id="password"   type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autofocus required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                             <div class="m-login__form-action">
                                <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Se connecter</button>
                            </div> 
                        </form>
                    </div>
                   <div class="m-login__signup">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Espace entreprise</h3>
                            <div class="m-login__desc">Veuillez entrer vos informations:</div>
                        </div>
                        <form class="m-login__form m-form" action="">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Nom de l'entreprise" name="fullname">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email de l'entreprise" name="email" autocomplete="off">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="password" placeholder="Mot de passe" name="password">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirmer le mot de passe" name="rpassword">
                            </div>
                            <div class="m-login__form-sub">
                                <label class="m-checkbox m-checkbox--focus">
                                    <input type="checkbox" name="agree"> J'accepte <a href="#" class="m-link m-link--focus">les condition établies par IFRI</a>.
                                    <span></span>
                                </label>
                                <span class="m-form__help"></span>
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Se connecter</button>
                                <button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Retour</button>
                            </div>
                        </form>
                    </div>
                    <div class="m-login__forget-password">
                        <div class="m-login__head">
                            <h3 class="m-login__title">Forgotten Password ?</h3>
                            <div class="m-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="m-login__form m-form" action="">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                            </div>
                            <div class="m-login__form-action">
                                <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
                                <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!--begin::Global Theme Bundle -->
    <script src="{{ asset("asset/vendors/base/vendors.bundle.js") }}" type="text/javascript"></script>
    <script src="{{ asset("asset/demo/default/base/scripts.bundle.js") }}" type="text/javascript"></script>
    <script src="{{ asset("asset/snippets/custom/pages/user/login.js") }}" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>
</html>




