<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/register.php
| Author: Nick Jones (Digitanium)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. 
+--------------------------------------------------------+
| Removal of this copyright header is strictly prohibited 
| without written permission from the original author(s).
+--------------------------------------------------------+
| This file is part of the PHP-Fusion localization 
| standard.
+--------------------------------------------------------+
| Locale: Swedish
| PHP-Fusion version: 7.02.04
+--------------------------------------------------------+
| Originally translated by KEFF in 2004.
| Regular updates by KEFF, Paulsson, Mojkan and others.
| There would hardly be any Swedish PHP-Fusion 
| without them!
+--------------------------------------------------------+
| Last changed 12 nov 2011, Homdax.
| Credits to:
| Danne for extensive help with this version.
| Lilleman72 & DrunkeN for help with recent versions. 
| homdax@gmail.com, www.php-fusion.se
+--------------------------------------------------------*/
$locale['400'] =  "Registrera";
$locale['401'] = "Aktivera anv�ndarkonto";
// Registration Errors
$locale['402'] = "Du m�ste v�lja ett anv�ndarnamn, ett l�senord, samt ange en e-post adress";
$locale['403'] = "Ditt anv�ndarnamn inneh�ller otill�tna tecken";
$locale['404'] = "L�senorden �r inte identiska.";
$locale['405'] = "Ogiltigt l�senord, endast alfanumeriska tecken f�r anv�ndas.br />
L�senordet m�ste best� av minst 6 tecken.";
$locale['406'] = "Din epostadress f�refaller ej giltlig.";
$locale['407'] = "Tyv�rr, anv�ndarnamnet ".(isset($_POST['username']) ? $_POST['username'] : "")." �r upptaget.";
$locale['408'] = "Tyv�rr, e-post adressen ".(isset($_POST['email']) ? $_POST['email'] : "")." anv�nds redan.";
$locale['409'] = "En anv�ndare med ett inaktivt konto �r redan registrerad med denna e-post adress.";
$locale['410'] = "Fel s�kerhetskod.";
$locale['411'] = "Din e-post adress eller e-post dom�n �r sp�rrat.";
// Email Message
$locale['449'] = "V�lkommen till ".$settings['sitename'];
$locale['450'] = "Hej ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
V�lkommen till ".$settings['sitename'].". H�r �r dina inloggningsuppgifter:\n
Anv�ndarnamn: ".(isset($_POST['username']) ? $_POST['username'] : "")."
L�senord: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Var v�nlig och  aktivera ditt konto genom att klicka p� f�ljande l�nk:\n";
// Registration Success/Fail
$locale['451'] =  "Registreringen fullst�ndig";
$locale['452'] = "Du kan logga in nu.";
$locale['453'] = "En administrat�r kommer att aktivera ditt konto snarast.";
$locale['454'] = "Registreringen �r n�stan klar, du kommer att f� e-post inneh�llande dina inloggningsdetaljer tillsammans med en verifieringsl�nk.";
$locale['455'] = "Ditt konto �r verifierat.";
$locale['456'] = "Registreringen misslyckades";
$locale['457'] =  "Det gick inte att skicka e-post. Kontakta <a href='mailto:".$settings['siteemail']."'>sidans administrat�r</a>.";
$locale['458'] = "Registreringen kunde ej genomf�ras p� grund av f�ljande anledning(ar):";
$locale['459'] = "V�nligen f�rs�k igen";
// Register Form
$locale['500'] = "V�nligen skriv in din information nedan. ";
$locale['501'] = "En bekr�ftelse kommer att skickas till din angivna e-post adress. ";
$locale['502'] = "F�lt som markerats med <span style='color:#ff0000;'>*</span> m�ste fyllas i.
Ditt anv�ndarnamn och l�senord �r k�nsligt f�r stora och sm� bokst�ver.";
$locale['503'] = " Du kan l�gga till mer information genom att g� till Redigera profil n�r du �r inloggad.";
$locale['504'] = "S�kerhetskod:";
$locale['505'] = "Skriv in s�kerhetskod:";
$locale['506'] = "Registrera";
$locale['507'] = "Registreringssystemet �r tillf�lligt avaktiverat.";
$locale['508'] = "Avtal";
$locale['509'] = "Jag har l�st <a href='".BASEDIR."print.php?type=T' target='_blank'>Anv�ndarvillkor</a> och jag godk�nner dem.";
// Validation Errors
$locale['550'] = "V�nligen skriv in ett anv�ndarnamn.";
$locale['551'] = "V�nligen skriv in ett l�senord.";
$locale['552'] = "V�nligen skriv in en e-post adress.";
?>