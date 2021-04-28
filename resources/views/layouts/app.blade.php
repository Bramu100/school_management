<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    	
        				
        				
        				
        				<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Student
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @can('View Student')
            <li><a class="dropdown-item" href="/student">Students</a></li>
            @endcan
            @can('Create Student')
            <li><a class="dropdown-item" href="/student/create">Create student</a></li>
            @endcan
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>   
                               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            guardian
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @can('View Guardian')
            <li><a class="dropdown-item" href="/guardian">Guardians</a></li>
            @endcan
            @can('Create Guardian')
            <li><a class="dropdown-item" href="/guardian/create">Create guardin</a></li>
            @endcan
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
                                   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            user
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @can('View User')
            <li><a class="dropdown-item" href="/user">User</a></li>
            @endcan
            @can('Create User')
            <li><a class="dropdown-item" href="/user/create">Create User</a></li>
            @endcan
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
                                     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @can('View Course')
            <li><a class="dropdown-item" href="/course">Course</a></li>
             @endcan
             @can('Create Course')
            <li><a class="dropdown-item" href="/course/create">Create Course</a></li>@endcan
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>


                
                        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Roless
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!--  -->
            <li><a class="dropdown-item" href="/role">Roles</a></li>
           <!--  -->
            <li><a class="dropdown-item" href="/role/create">Create Role</a></li>
           <!--  -->
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>       
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sms
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <!--  -->
            <li><a class="dropdown-item" href="/sms">Smses</a></li>
           <!--  -->
            <li><a class="dropdown-item" href="/sms/create">Send sms</a></li>
           <!--  -->
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>      
       					
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>