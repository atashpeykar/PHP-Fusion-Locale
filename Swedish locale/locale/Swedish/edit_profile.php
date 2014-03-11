<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/edit_profile.php
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
$locale['400'] = "Redigera profil";
// Edit Profile Messages
$locale['410'] = "F�r att �ndra l�senord eller e-postadress<br />m�ste du ange ditt nuvarande l�senord.";
$locale['411'] = "Profil uppdaterad";
$locale['412'] = "G�r inte att uppdatera profil:";
// Edit Profile Form
$locale['420'] = "Nuvarande l�senord";
$locale['421'] = "Nuvarande adminl�senord";
$locale['422'] = "Nytt adminl�senord";
$locale['423'] = "Bekr�fta nytt adminl�senord";
$locale['424'] = "Uppdatera profil";
// Update Profile Errors
$locale['430'] = "Du m�ste ange ett anv�ndarnamn och e-postadress.";
$locale['431'] = "Anv�ndarnamn inneh�ller ogiltiga tecken.";
$locale['432'] = "Anv�ndarnamnet ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." finns redan.";
$locale['433'] = "Felaktig e-postadress.";
$locale['434'] = "E-postadressen ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." finns redan.";
$locale['435'] = "Nytt l�senord st�mmer inte.";
$locale['436'] = "Felaktigt l�senord, anv�nd endast alfa numeriska tecken.<br />L�senord m�ste vara minst 6 tecken l�ngt.";
$locale['437'] = "Du m�ste ange ditt nuvarande l�senord f�r att �ndra l�senord eller e-postadress.";
$locale['438'] = "Nytt adminl�senord st�mmer inte.";
$locale['439'] = "Ditt l�senord och adminl�senordet m�ste vara olika.";
$locale['440'] = "Felaktigt adminl�senord anv�nd endast alfa numeriska tecken.<br />Adminl�senord m�ste vara minst 6 tecken l�ngt.";
$locale['441'] = "Du m�ste ange ditt nuvarande adminl�senord f�r att �ndra ditt adminl�senord.";
$locale['442'] = "Avatar filnamnet �r felaktig.";
$locale['443'] = "Avatar filens storlek �r f�r stor.";
$locale['444'] = "Avatar filtypen �r felaktig.";
?>