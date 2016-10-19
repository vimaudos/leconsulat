<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8" />
		<title>@yield('title')</title>
    
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        @yield('meta')
    
        <!-- CSS -->
 		<link rel="stylesheet" href="/site/css/style.css" />
        <link rel="stylesheet" href="/site/css/hdr-ftr.css" />
        <link rel="stylesheet" href="/site/css/responsive.css" />
        <link rel="stylesheet" href="/site/css/animate.css" />
        <link rel="stylesheet" href="/site/css/carousel.css" />
    
        <!-- Slide -->
        <script src="/site/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="/site/js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
    
        <!-- Favicon -->
        
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:100,400,700' rel='stylesheet' type='text/css' />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    
        <script src="https://use.typekit.net/jjg8oal.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    
    
	</head>

	<body>
        
		<header id="header-home" class="flex-col-ard">
			
            
            <div id="filtreBg"></div>
            <div id="slgContainer" class="flex-row-ard" style="width:100%;">
                
            
                <div id="align">
                    <div id="logo2">
                        <img id="hotel" src="/site/image/hotel.png" alt="hexagone noir"/>
                    </div>
                </div>

                
            </div>

			<nav id="navHome">
                <div id="menu1">
                    <ul>
                        <li><a href="{{ route('site.index') }}">Accueil</a></li>
                        <li><a href="{{ route('site.galerie') }}">Galerie</a></li>
                        <li id="reservation"><a href="{{ route('site.reservation') }}">Réservations</a></li>
                    </ul>
                </div>
                <div id="nomAgence">
                    <a href="{{ route('site.index') }}">
                        <div id="nomAgenceh1" class="flex-row-btw" style="text-align:center;">
                            <img src="/site/image/logo2_small.png" style="align-items: center; width : auto;" alt="" title="" />
                        </div>
                    </a>
                </div>
                <div id="menu2">
                    <ul>
                        <li><a href="{{ route('site.concept') }}">Concept</a></li>
                        <li><a href="{{ route('site.services') }}">Services</a></li>
                        <li><a href="{{ route('site.evenements') }}">&Eacute;v&egrave;nements</a></li>
                    </ul>
                </div>
            </nav>            
            <nav id="navResponsive" class="nav-fixed">
                <ul id="navBar">
                    <li>
                        <a href="{{ route('site.index') }}">
                            <img src="/site/image/logo.png" width="100" alt="" title="" />
                        </a>
                    </li>
                    <li id="menuBurger">
                        <div id="nav-icon">
                            <div></div>
                            <div id="disap"></div>
                            <div></div>
                        </div>
                    </li>
                </ul>
                <ul id="menuResp">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="{{ route('site.galerie') }}">Galerie</a></li>
                    <li><a href="{{ route('site.reservation') }}">Reservations</a></li>
                    <li><a href="{{ route('site.concept') }}">Concept</a></li>
                    <li><a href="{{ route('site.services') }}">Services</a></li>
                    <li><a href="{{ route('site.evenements') }}">&Eacute;v&egrave;nements</a></li>
                </ul>
            </nav>            
            <div id="arrowD"><a href="#reser"><i id="arrowDown" class="material-icons md-36" ></i></a></div>
            
		</header>
        
        <main>
            
            <a id="backTop">
                <i id="backTopLink" class="material-icons md-36">keyboard_arrow_up</i>
            </a>            
            
            @yield('page')

        </main>
        
        <footer class="flex-col-btw">
            <div class="container">
                    <div class="col-1-3">
                        <div class="links-footer text-left">
                            <ul>
                                <li>A propos</li>
                                <li><a href="{{ route('site.concept') }}">Concept</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Mentions légales</a></li>
                                <li><a href="#">Plan du site</a></li>
                            </ul>
                        </div>
                </div>
                <div class="col-1-3">
                    <div class="links-footer text-center">
                         <div id="newsletter" class="padding-70">
                            <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="http://etudiant-eemi.us13.list-manage.com/subscribe/post?u=c95713bbcf01217a796e8fcf7&amp;id=a8c668c097" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                    <h2>Inscrivez-vous à la Newsletter</h2>
                                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                    <div class="mc-field-group">
                                        <!-- <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>-->
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Entrez votre mail">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c95713bbcf01217a796e8fcf7_a8c668c097" tabindex="-1" value=""></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="links-footer text-right">
                        <ul>
                            <li><a href="#" id="nousParler" class="link-contact-home">CONTACT</a></li>
                            <li>
                                <a href="#" target="_blank"><img id="fb" src="/site/image/rs/fb-w.png" alt="facebook"/></a>
                                <a href="#" target="_blank"><img id="insta" src="/site/image/rs/insta-w.png" alt="instagram"/></a>
                                <a href="#" target="_blank"><img id="twi" src="/site/image/rs/twitter-w.png" alt="twitter"/></a>
                            </li>

                        </ul>

                        <div id="contact" class="bg-popup-contact">
                            <div id="popupContact" class="popup-contact">
                                <div>
                                    <div>
                                        <h2>Contactez-nous</h2>
                                        <a href="#noWhere" id="close" class="close" title="Fermer le formulaire">
                                            <i class="material-icons close">close</i>
                                        </a>
                                    </div>
                                    <div>
                                        <p>Pour nous contacter remplissez ce formulaire.</p>
                                  </div>
                                </div>
                                <form id="formulaire" action="#" method="post">
                                    <input id="name" name="nom" type="text" placeholder="Nom *">
                                    <input id="firstName" name="prenom" type="text" placeholder="Prénom *">
                                    <input id="companie" name="companie" type="text" placeholder="Entreprise">
                                    <input id="mail" name="mail" type="email" placeholder="Email *">
                                    <div class="select">
                                        <select name="who" id="who">
                                            <option value="0" disabled selected>Vous êtes ? *</option>
                                            <option value="Actionnaire">Actionnaire</option>
                                            <option value="Investisseur">Investisseur</option>
                                            <option value="Partenaire">Partenaire</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                    <textarea id="message" name="message" placeholder="Tapez votre message *"></textarea>
                                    <div id="info">
                                        <p id="erreurForm"></p>
                                        <p>* champs obligatoires</p>
                                    </div>
                                    <input type="submit" value="Envoyer">
                                </form>
                            </div>    
                        </div> 
                    </div>
                </div>
            </div>
           
           
        </footer>
        
        
        <script type="text/javascript" src="/site/script/script-home.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        
        
	</body>


</html>