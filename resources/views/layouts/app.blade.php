<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <!--<li><a href="{{ url('/home') }}">Home</a></li>-->
                    @if (!Auth::guest())
                        <!-- Droit Utilisateur -->
                        @if (Auth::user()->admin == 1)
                        <li><a href="{{ url('/user') }}">Utilisateurs</a></li>
                        @endif
                        <li><a href="{{ url('/post/') }}">Articles</a></li>
                    @endif
                    
                </ul>
                
                
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown hover-line language-switcher">
						@if(session('locale') == 'en')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-uk" src="assets/images/flags/flag-uk.png">
                                English
                            </a>
                        @elseif(session('locale') == 'fr')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-fr" src="assets/images/flags/flag-fr.png">
                                Français
                            </a>
                        @elseif(session('locale') == 'es')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-es" src="assets/images/flags/flag-es.png">
                                Español
                            </a>
                        @elseif(session('locale') == 'pt')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-br" src="assets/images/flags/flag-br.png">
                                Português
                            </a>
                        @elseif(session('locale') == 'de')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-de" src="assets/images/flags/flag-de.png">
                                Deutsch
                            </a>
                        @elseif(session('locale') == 'it')
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="flag-it" src="assets/images/flags/flag-it.png">
                                Italiano
                            </a>
                        @endif
			
						<ul class="dropdown-menu languages">
                        @if (session('langue') == 'en')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/en') }}">
									<img alt="flag-uk" src="assets/images/flags/flag-uk.png">
									English
								</a>
							</li>
						
                            @if (session('locale') == 'de')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/de') }}">
									<img alt="flag-de" src="assets/images/flags/flag-de.png">
									Deutsch
								</a>
							</li>
							
                        @if (session('locale') == 'fr')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/fr') }}">
									<img alt="flag-fr" src="assets/images/flags/flag-fr.png">
									Français
								</a>
							</li>
                            
				        @if (session('locale') == 'pt')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/pt') }}">
									<img alt="flag-br" src="assets/images/flags/flag-br.png">
									Português
								</a>
							</li>
                        
						@if (session('locale') == 'es')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/es') }}">
									<img alt="flag-es" src="assets/images/flags/flag-es.png">
									Español
								</a>
							</li>
                            
                        @if (session('locale') == 'it')
                            <li class="active">
                        @else
                            <li>
                        @endif
								<a href="{{ url('/langue/it') }}">
									<img alt="flag-it" src="assets/images/flags/flag-it.png">
									Italiano
								</a>
							</li>
						</ul>
					</li>
                    
                    
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>