<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/reactivate.php
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
// Error messages
$locale['500'] = "Ett fel uppstod";
$locale['501'] = "Aktiveringsl�nken du klickade p� �r ej l�ngre giltig.<br /><br />
Kontakta Administrat�r genom <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> om du beh�ver en manuell aktivering av ditt konto.";
$locale['502'] = "Aktiveringsl�nken du anv�nt �r felaktig!<br /><br />
Kontakta Administrat�r genom  <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> if you want to request a manual re-activation.";
$locale['503'] = "Aktiveringsl�nken du anv�nde kunde inte aktivera ditt konto.<br />
M�jligen �r ditt konto redan aktiverat, varf�r du borde kunna <a href='".$settings['siteurl']."login.php'>logga in h�r</a>.<br /><br />
Om du inte kan logga in nu, ombedes du kontakta Administrat�r via e-post <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> om du �nskar en manuell �teraktivering.";
// Send confirmation mail
$locale['504'] = "Konto �teraktiverat hos ".$settings['sitename'];
$locale['505'] = "Hej [USER_NAME],\n
Ditt konto hos ".$settings['sitename']." �r aktivt igen.  Vi hoppas vi f�r se dig oftare hos oss!\n\n
H�lsningar,\n\n
".$settings['siteusername'];
$locale['506'] = "�teraktiverad av anv�ndare.";
?>
