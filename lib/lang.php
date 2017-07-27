<?php

//if(isset($POST['langue']))
//{
	if($_POST['langue']=="Francais") { $_SESSION['lang'] =""; }
	if($_POST['langue']=="English") { $_SESSION['lang'] ="en"; }
	if($_POST['langue']=="Deutsch") { $_SESSION['lang'] ="de"; }
//}

if($_SESSION['lang']=="en")
{
define('MENU_HOME','Home');
define('MENU_WEBSITES','Websites');
define('MENU_MODS_ADDONS','Mods / Addons');
define('MENU_VIDEO','My Videos');
define('MENU_CONTACT','Contact Me');	
define('CONTACT_OBJ','Object');
define('CONTACT_MAIL','Your Mail ( for answering )');
define('CONTACT_TXT','Content of message');
define('CONTACT_SEND','Send Message');
define('CONTACT_OK','Your message was send !');
define('CREDITS','Website by Elanis');
} else {
define('MENU_HOME','Accueil');
define('MENU_WEBSITES','Sites Web');
define('MENU_MODS_ADDONS','Mods / Addons');
define('MENU_VIDEO','Mes Videos');
define('MENU_CONTACT','Contact');
define('CONTACT_OBJ','Objet');
define('CONTACT_MAIL','Votre E-Mail ( pour repondre )');
define('CONTACT_TXT','Contenu du message');
define('CONTACT_SEND','Envoyer Message');
define('CONTACT_OK','Le message a bien été envoyé !');
define('CREDITS','Site par Elanis');
}


?>