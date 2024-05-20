<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IFRI') }}</title>
    <link href="../../asset/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../asset/boot/css/bootstrap.mini.css" rel="stylesheet" type="text/css" />
    <link href="../../asset/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.css"> <!--bootstrap -->
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css"> <!--bootstrap -->
    <link rel="stylesheet" href="../../asset/css/homePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

</head>
<body>
    <div id="app">
       
        <nav>
            <div class="right offset-md-11">
                <span class="text-white px-1 bg-danger" style="border-radius: 50%;margin-top:-10%"> 
                    @if (isset($count_unread))
                    {{$count_unread }}
                    @endif 
                </span>
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                         @if (Route::has('login'))
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-end mr-5" aria-labelledby="navbarDropdown">
                                <a href="" class="dropdown-item">
                                    {{Auth::user()->name}}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('deconnexion') }}                                    </a>
                                    <a href="{{ route('profile_compte',Auth::user()->id) }}" class="dropdown-item">
                                        {{ __('Profile') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
    
        </nav>
         <br><br>
       
        <main class="py-4">

            @yield('content')
        </main>
    </div>
    <script src="../../../asset/snippets/custom/pages/user/login.js" type="text/javascript"></script>
    <script src="../../../asset/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="../../asset/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<script src="asset/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('script_jquey')
    @yield('alert')
</body>
</html>
