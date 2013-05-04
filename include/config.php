<?php
//-----------------------------------------------------------------------------------
// PARAMETRI DI CONFIGURAZIONE GENERALE
//-----------------------------------------------------------------------------------
$emailAdmin = "imranshaikh818@gmail.com";  // email admin where notices are sent
$urlWebSite = "www.imranshaikh.me"; //Website URL that is added to the bottom of emails sent from contact form

$headers_mail = "From: Imranshaikh <imranshaikh818@gmail.com>\nReply-to:imranshaikh818@gmail.com";
define("OGGETTO_MAIL", "Contact from the site.");

########################################################################
/*#################		TEMPLATE MAIL		##########################*/
########################################################################
$str_contenuto_email = "
You are receiving this email because someone used the card of contacts on your website.

Here the personal information that we have contacted:

-------------------------------------------------------------
Name and Surname: {name}
E-mail: {mail}
IP Address: {ip}
-------------------------------------------------------------

This is the user's request:

-------------------------------------------------------------
Message: {corpo}
-------------------------------------------------------------

{url}";
?>