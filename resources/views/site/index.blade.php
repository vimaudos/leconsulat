<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8" />
		<title>LE CONSULAT - Hotel lisboa</title>
    
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    
    
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
            
            <div class="language-switcher">
               <div class="dropdown hover-line">
                    @if(session('locale') == 'en')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-uk" src="/assets/images/flags/flag-uk.png">
                            English
                        </a>
                    @elseif(session('locale') == 'fr')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-fr" src="/assets/images/flags/flag-fr.png">
                            Français
                        </a>
                    @elseif(session('locale') == 'es')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-es" src="/assets/images/flags/flag-es.png">
                            Español
                        </a>
                    @elseif(session('locale') == 'pt')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-br" src="/assets/images/flags/flag-br.png">
                            Português
                        </a>
                    @elseif(session('locale') == 'de')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-de" src="/assets/images/flags/flag-de.png">
                            Deutsch
                        </a>
                    @elseif(session('locale') == 'it')
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="flag-it" src="/assets/images/flags/flag-it.png">
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
                                <img alt="flag-uk" src="/assets/images/flags/flag-uk.png">
                                English
                            </a>
                        </li>

                        @if (session('locale') == 'de')
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="{{ url('/langue/de') }}">
                                <img alt="flag-de" src="/assets/images/flags/flag-de.png">
                                Deutsch
                            </a>
                        </li>

                    @if (session('locale') == 'fr')
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="{{ url('/langue/fr') }}">
                                <img alt="flag-fr" src="/assets/images/flags/flag-fr.png">
                                Français
                            </a>
                        </li>

                    @if (session('locale') == 'pt')
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="{{ url('/langue/pt') }}">
                                <img alt="flag-br" src="/assets/images/flags/flag-br.png">
                                Português
                            </a>
                        </li>

                    @if (session('locale') == 'es')
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="{{ url('/langue/es') }}">
                                <img alt="flag-es" src="/assets/images/flags/flag-es.png">
                                Español
                            </a>
                        </li>

                    @if (session('locale') == 'it')
                        <li class="active">
                    @else
                        <li>
                    @endif
                            <a href="{{ url('/langue/it') }}">
                                <img alt="flag-it" src="/assets/images/flags/flag-it.png">
                                Italiano
                            </a>
                        </li>
                    </ul>
				</div>
             
            </div>
            
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
                        <li><a href="#carousel">Accueil</a></li>
                        <li><a href="{{ route('site.galerie') }}">Galerie</a></li>
                        <li id="reservation"><a href="#reser">Réservations</a></li>
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
                        <li><a href="#concept">Concept</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#evenements">&Eacute;v&egrave;nements</a></li>
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
            
            <section id="carousel">
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                    </div>
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                        
                        
                        <?php 
                            $i = 0;
                        ?>
                        
                        @foreach($slides as $slide)
                            
                            <div data-p="225.00" 
                              
                              <?php 
                                if ($i != 0){
                                  echo 'style="display: none;"';  
                                }
                              ?>
                              
                            >
                               
                                <img data-u="image" src="/{{ $slide->image }}" />
                                
                                <div style="background-color:rgba(0,0,0,0.5); width: 100%; height:500px; left: 0;
    position: absolute; top: 0;"> </div>
                                                              
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 500px; font-size: 50px; color: #ffffff; display: table;">
                                   <div style=" text-align: center; display: table-cell; vertical-align: middle; line-height: 60px;">
                                       <div style="text-align: center; display: inline-block;">
                                            {{ $slide->titre }}
                                    </div>
                                   </div>
                                    
                                </div>
                                
                            </div>
                        
                            <?php 
                                $i++;
                            ?>
                        
                        @endforeach
                        
                    </div>
                    
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:0px;width:40px;height:58px;background-color: #e73f34" data-autocenter="2"></span>
                    <span data-u="arrowright" class="jssora22r" style="top:0px;right:0px;width:40px;height:58px;background-color: #e73f34" data-autocenter="2"></span>
                </div>
            
            </section>
            
            
            
            <section id="reser" class="flex-col-center padding-70">
                <h2 class="red">R&eacute;servations</h2>
                
                <div class="container">
                    <div id="chambre" class="col-1-3">
                        <a href="#"><img src="/site/image/reservation/album-img-1.png" alt="" title=""></a>
                        <a href="#"><h3>Chambres</h3></a>
                    </div>
                    <div id="suite" class="col-1-3">
                        <a href="#"><img src="/site/image/reservation/album-img-2.png" alt="" title=""></a>
                        <a href="#"><h3>Suites</h3></a>
                    </div>
                    <div id="luxe" class="col-1-3">
                        <a href="#"><img src="/site/image/reservation/album-img-3.png" alt="" title=""></a>
                        <a href="#"><h3>Suites de luxe</h3></a>
                    </div>
                </div>
                
                <a href="{{ route('site.reservation') }}" class="btn btn-more-bgw">En savoir plus</a>
            </section>
            
            <section id="concept" class="flex-col-center">
                <div class="col-2-3">
                    
                </div>
                
                <div class="col-1-3">
                    
                </div>
                
                <div class="col_page padding-70">
                
                    <div class="container">
                        <h2 class="white">Concept</h2>


                        <div class="col-2-3_2">
                            <h3>Le Consulat</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                        </div>

                        <div class="clear"></div>

                        <a href="{{ route('site.concept') }}" class="btn btn-more-bgy">En savoir plus</a>
                    </div>
                    
                </div>
                
                
                
                
            </section>
            
            <section id="services" class="flex-col-center padding-70">
                <h2 class="red">Services</h2>
                
                <div class="container">
                    <div class="col-1-3">
                        <div class="shadow">
                            <img src="/site/image/picto/relax.png" alt="" title="">
                            <h3>Spa, massages</h3>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="shadow">
                            <img src="/site/image/picto/scissors-2.png" alt="" title="">
                            <h3>Coiffeur, Esthéticienne</h3>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="shadow">
                            <img src="/site/image/picto/map-of-roads.png" alt="" title="">
                            <h3>Visites guidées</h3>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('site.services') }}" class="btn btn-more-bgw">En savoir plus</a>
            </section>
            
            <section id="evenements"  class="flex-col-center">
                <div class="col-2-3">
                    
                </div>
                
                <div class="col-1-3" style="background-image: url('/{{ $post->image }}')">
                    
                </div>
                
                <div class="col_page padding-70">
                
                    <div class="container">
                        <h2 class="white">&Eacute;v&egrave;nements</h2>


                        <div class="col-2-3_2">
                            <h3>{{ $post->titre }}</h3>
                            <p>{{ $post->contenu }}</p>
                        </div>

                        <div class="clear"></div>

                        <a href="{{ route('site.evenements') }}" class="btn btn-more-bgy">En savoir plus</a>
                    </div>
                    
                </div>
            </section>
            
            <section id="contactUs">
                
                <div class="col-2-3">
                    
                </div>
                
                <div class="col-1-3">
                    
                </div>
                
                <div class="col_page padding-70">
                
                    <div class="container">
                        


                        <div class="col-2-3_2">
                            <a href="#">
                            </a>
                        </div>
                        
                        <div class="col-1-3_2">
                            
                            <ul>
                                <li><img src="/site/image/logo.png"></li>
                                <li id="tel">TEL (351) 00 000 00 00<br/>
                                    FAX (351) 00 000 00 00</li>
                                <li id="email">reservations@leconsulat.com</li>
                                <li id="adresse">LE CONSULAT, <br/>
                                    PRA&Ccedil;A LUIS DE CAM&Otilde;ES, <br/>
                                    27 LISBOA PORTUGAL</li>
                            </ul>
                            
                        </div>
                        
                        <div id="plan">
                            <a href="#"><img src="/site/image/contactUs/plan.png" alt="" title="" /></a> 
                        </div>
                             

                        <div class="clear"></div>

                        
                    </div>
                    
                </div>             

            </section>

        </main>
        
        <footer class="flex-col-btw">
            <div class="container">
                    <div class="col-1-3">
                        <div class="links-footer text-left">
                            <ul>
                                <li>A propos</li>
                                <li><a href="page/agence_creation_web_42bees.html">Concept</a></li>
                                <li><a href="page/valeurs_agence_creation_web_42bees.html">FAQ</a></li>
                                <li><a href="page/equipe_agence_creation_web_42bees.html">Mentions légales</a></li>
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
        
        <script type="text/javascript" src="/site/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="/site/script/script-home.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        
        
	</body>


</html>