"use strict";
    
// ONLY JS // Faire apparaitre backtop lors du scroll
function showBacktop() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById('backTop').style.visibility = "visible";

    } else {
        document.getElementById('backTop').style.visibility = "hidden";
    }
}

// Boutton retour en haut de page
document.getElementById('backTop').onclick = function () {
    $('body,html').animate({scrollTop: 0}, 800);
    return false;
};

// ONLY JS // Afficher le popup de contact
function showPopupContact() {
    var bg = document.getElementById('contact'),
        popup = document.getElementById('popupContact'),
        link = document.getElementsByClassName('link-contact');
    
    if(window.innerWidth >= 600){
        for ( var i = 0; i < link.length; i++) {
            link[i].onclick = function (event) {
                event.preventDefault();
                bg.className = "bg-popup-contact is-visible";
                popup.className = "popup-contact is-visible";
            };
        }

        document.getElementById('close').onclick = function () {
            popup.className = "popup-contact";
            bg.className = "bg-popup-contact";
        }

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
    
    function addText() {
        divError.innerHTML = evt;
    }
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

// ONLY JS // Changer la couleur des icones rs
function socialIconColor() {
    
    var fb = document.getElementById('fb'),
        insta = document.getElementById('insta'),
        twi = document.getElementById('twi');
    
    fb.onmouseover = function(){
        this.attributes[1].value = "../image/rs/fb-w.png";
    }
    fb.onmouseout = function(){
        this.attributes[1].value = "../image/rs/fb.png";
    }
    
    insta.onmouseover = function(){
        this.attributes[1].value = "../image/rs/insta-w.png";
    }
    insta.onmouseout = function(){
        this.attributes[1].value = "../image/rs/insta.png";
    }
    
    twi.onmouseover = function(){
        this.attributes[1].value = "../image/rs/twitter-w.png";
    }
    twi.onmouseout = function(){
        this.attributes[1].value = "../image/rs/twitter.png";
    }
};

// ONLY JS // Menu acordeon
function menuAcordeon() {
    var menus = document.getElementsByClassName('menu');

    for (var i=0; i<5; i++){

        menus[i].onclick = function () {

            var els = document.getElementsByClassName('no-visible'),
                arrow = this.getElementsByClassName('right'),
                text = document.getElementsByClassName('text');

            if (this.getElementsByTagName('ul')[0].style.display === 'block'){
                arrow[0].style.transform = 'none';
                this.getElementsByClassName('no-visible')[0].style.display = 'none';
            }

            else {
                arrow[0].style.transform = "rotate(180deg)";
                this.getElementsByClassName('no-visible')[0].style.display = 'block';   
            }
        }
    }
}

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
    }
}

function linkContact() {
    var links = document.getElementsByClassName('link-contact');
        
    for (var i = 0; i < links.length; i++){
    
        if (window.innerWidth <= 600){
            var href = document.createAttribute('href');

            href.value = 'contact.php';
            links[i].setAttributeNode(href);
        } else {
            var href = document.createAttribute('href');

            href.value = '#';
            links[i].setAttributeNode(href);
        }
    }
}

// Lorsque la page à fini de charger
window.onload = function () {
    window.onscroll = function () {showBacktop()};
    showPopupContact();
    socialIconColor();
    menuAcordeon();
    linkContact();
    menuResp();
};