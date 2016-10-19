"use strict";
    
// ONLY JS // Faire apparaitre backtop lors du scroll
function showBacktop() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById('backTop').style.visibility = "visible";

    } else {
        document.getElementById('backTop').style.visibility = "hidden";
    }
}

//Boutton retour en haut de page
document.getElementById('backTop').onclick = function () {
    $('body,html').animate({scrollTop: 0}, 800);
    return false;
};

// ONLY JS // Afficher le popup de contact
function showPopupContact() {
    var bg = document.getElementById('contact'),
        popup = document.getElementById('popupContact'),
        links =  document.getElementsByClassName('link-contact-home');
    
    //Afficher le popupcontact et bgpopupcontact au clic sur un element ayant une class link-contact
   if(window.innerWidth >= 600){

        for ( var i = 0; i < links.length; i++) {
            links[i].onclick = function (event) {
                event.preventDefault();
                bg.className = "bg-popup-contact is-visible";
                popup.className = "popup-contact is-visible";
            };
        }

        //Fermer le formulaire au clic sur le lien ayant un id close
        document.getElementById('close').onclick = function () {
            popup.className = "popup-contact";
            bg.className = "bg-popup-contact";
        }

        //Fermer le formulaire au clic sur le background contact et/ou garder le popup ouvert pour saisir le formulaire
        document.getElementById('contact').onclick = function (event) {
            var form = document.getElementById('contact');

            if (event.target == form) {
                event.preventDefault();
                popup.className = "popup-contact";
                bg.className = "bg-popup-contact";
            }
        }
    }
}

// ONLY JS // Afficher un message d'erreur dans le formulaire
function showError(evt) {
    var divError = document.getElementById('erreurForm');
    
    //Ajouter du texte dans divError
    function addText() {
        divError.innerHTML = evt;
    }
    
    //Ajouter un style a divError
    function addStyle() {
        divError.style.width = "100%";
        divError.style.backgroundColor = "#c0392b";
    }

    divError.innerHTML = "";
    divError.removeAttribute('style');
    setTimeout(addStyle, 200);
    setTimeout(addText, 500);    
}

// ONLY JS // Vérification de la saisi du formulaire avant envoi
document.getElementById('formulaire').onsubmit = function () {

    var name = document.getElementById('name').value,
        firstName = document.getElementById('firstName').value,
        mail = document.getElementById('mail').value,
        who = document.getElementById('who'),
        message = document.getElementById('message').value;
    
    if (name === "") {
        showError("Tapez votre nom");
        return false;
    } else if (firstName === "") {
        showError("Tapez votre prénom");
        return false;
    } else if (mail === "") {
        showError("Tapez votre mail");
        return false;
    } else if (who.selectedIndex == 0) {
        showError("Qui êtes vous?");
        return false;
    } else if (message === "") {
        showError("Tapez un message");
        return false;
    } else {
        return true;
    }
};

// ONLY JS // Vérification de la saisi du formulaire newsletter avant envoi
//document.getElementById('formNewsletter').onsubmit = function () {
//
//    var mail = document.getElementById('nlMail').value,
//        msg = document.getElementById('erreurFormNl'),
//        reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
//    
//    if (reg.test(mail)) {
//        return true;
//    } else {
//        msg.style.opacity = "1";
//        setTimeout(function(){msg.style.opacity = "0";}, 3000);
//        return false;
//    }
//};

// ONLY JS // Affiche le nom de l'agence
function showNomagence() {
    var nomAgence = document.getElementById('nomAgence');
    nomAgence.style.opacity = "1";
    nomAgence.style.transition = "all 1s";
}

// ONLY JS // Affiche le logo de l'agence
function showLogo() {
    var logo = document.getElementById('logo2');
    
    logo.style.opacity = "1";
    logo.style.transition = "all 1s";
}

// ONLY JS // Fixer la barre de navigation
var navTop = document.getElementById('navHome').offsetTop;
function fixedNav() {
    //Si le scoll est > à la position top du nav alors on lui applique une class sinon on lui supprime cette class
    var nav = document.getElementById("navHome");
        
    if (document.body.scrollTop >= navTop || document.documentElement.scrollTop >= navTop) {
        nav.className = "nav-fixed";
        document.getElementById("nomAgenceh1").className = "flex-row-btw nomAgence-color";
    } else {
        nav.className = "";
        document.getElementById("nomAgenceh1").className = "flex-row-btw";
    }
}


//Ascenseur automatique
function ascensseur() {
    
    if(window.innerWidth >= 600){
        
        var navHeight = document.getElementById('navHome').clientHeight;
        
    } else {
        
        var navHeight = document.getElementById('navResponsive').clientHeight;
        
    }

    
    var headerHeight = document.getElementById('header-home').clientHeight,
        carouselHeight = document.getElementById('carousel').clientHeight,
        aboutusHeight = document.getElementById('reser').clientHeight,
        keyfiguresHeight = document.getElementById('concept').clientHeight,
        servicesHeight = document.getElementById('services').clientHeight,
        evenementsHeight = document.getElementById('evenements').clientHeight,
        
        accueilTop = headerHeight - navHeight,
        aboutusTop = accueilTop + carouselHeight,
        keyfiguresTop = aboutusTop + aboutusHeight,
        servicesTop = keyfiguresTop + keyfiguresHeight,
        evenementsTop = servicesTop + servicesHeight,
        contactTop = evenementsTop + evenementsHeight;
    
    /*document.getElementsByTagName('A')[0].onclick = function(){
        alert("test");
    }*/

    $('a[href="#carousel"]').click(function () {
        $('html, body').animate({
            scrollTop: accueilTop
        }, 800);
        return false;
    });
    
    
    $('a[href="#reser"]').click(function () {
        $('html, body').animate({
            scrollTop: aboutusTop
        }, 800);
        return false;
    });


    $('a[href="#concept"]').click(function () {
        $('html, body').animate({
            scrollTop: keyfiguresTop
        }, 800);
        return false;
    });
    
    $('a[href="#services"]').click(function () {
        $('html, body').animate({
            scrollTop: servicesTop
        }, 800);
        return false;
    });
    
    $('a[href="#evenements"]').click(function () {
        $('html, body').animate({
            scrollTop: evenementsTop
        }, 800);
        return false;
    });
    
    $('a[href="#contactUs"]').click(function () {
        $('html, body').animate({
            scrollTop: contactTop
        }, 800);
        return false;
    });
}

// ONLY JS // ARROW Bounce
function arrowBounce() {
    var arrow = document.getElementById('arrowDown'),
        top = document.getElementById('backTop');
    
    arrow.onmouseover = function () {
        this.className = "material-icons md-36 animated bounce";
    };
    arrow.onmouseout = function () {
        this.className = "material-icons md-36";
    };
    
    top.onmouseover = function () {
        document.getElementById('backTopLink').className = "material-icons md-36 animated bounce";
    };
    top.onmouseout = function () {
        document.getElementById('backTopLink').className = "material-icons md-36";
    };
}

// ONLY JS // Changer la couleur des icones rs
function socialIconColor() {
    
    var fb = document.getElementById('fb'),
        insta = document.getElementById('insta'),
        twi = document.getElementById('twi');
    
    fb.onmouseover = function(){
        this.attributes[1].value = "/site/image/rs/fb-r.png";
    }
    fb.onmouseout = function(){
        this.attributes[1].value = "/site/image/rs/fb-w.png";
    }
    
    insta.onmouseover = function(){
        this.attributes[1].value = "/site/image/rs/insta-r.png";
    }
    insta.onmouseout = function(){
        this.attributes[1].value = "/site/image/rs/insta-w.png";
    }
    
    twi.onmouseover = function(){
        this.attributes[1].value = "/site/image/rs/twitter-r.png";
    }
    twi.onmouseout = function(){
        this.attributes[1].value = "/site/image/rs/twitter-w.png";
    }
};

// ONLY JS // Menu responsive
function menuResp() {
    
    var burg = document.getElementById('menuBurger');

    burg.onclick = function () {

        var menu = document.getElementById('menuResp'),
            navHeight = document.getElementById('navBar').clientHeight,
            menuHeight = window.innerHeight - navHeight,
            icon = document.getElementById('nav-icon');
        

        if (menu.style.display === "flex") {
            menu.style.display = "none";
            icon.className = "";
        } else {
            menu.style.display = "flex";
            menu.style.height = menuHeight + "px";
            icon.className = "open";
        }
    };
};

// ONLY JS // Ajout attribut href pour mobile
function linkContact() {
    var links = document.getElementsByClassName('link-contact-home');
        
    for (var i = 0; i < links.length; i++){
    
        if (window.innerWidth <= 600){
            var href = document.createAttribute('href');

            href.value = 'page/contact.php';
            links[i].setAttributeNode(href);
        } else {
            var href = document.createAttribute('href');

            href.value = '#';
            links[i].setAttributeNode(href);
        }
    }
};

// Photo profile
//function changePhoto(){
//    
//    var parent = document.getElementById('ourTeam'),
//        div = parent.getElementsByClassName('cols-4');
//    
//    for (var i = 0; i < div.length; i++){
//        
//        var img = div[i].getElementsByTagName('img')[0],
//            lk = document.createAttribute('src');
//        
//        lk.value = "image/photo-perso/pp.jpg";
//        img.setAttributeNode(lk);        
//    }
//    
//};

window.onscroll = function () {fixedNav(); showBacktop();};

//Lorsque la page à fini de charger
window.onload = function () {
    
    showNomagence();
    showLogo();
    ascensseur();
    showPopupContact();
    arrowBounce();
    socialIconColor();
    menuResp();
    linkContact();
};




// Slide 
jQuery(document).ready(function ($) {
            
    var jssor_1_SlideoTransitions = [
      [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
      [{b:1900,d:2000,x:-379,e:{x:7}}],
      [{b:1900,d:2000,x:-379,e:{x:7}}],
      [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
    ];

    var jssor_1_options = {
      $AutoPlay: true,
      $SlideDuration: 800,
      $SlideEasing: $Jease$.$OutQuint,
      $CaptionSliderOptions: {
        $Class: $JssorCaptionSlideo$,
        $Transitions: jssor_1_SlideoTransitions
      },
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*you can remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1920);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*responsive code end*/
});