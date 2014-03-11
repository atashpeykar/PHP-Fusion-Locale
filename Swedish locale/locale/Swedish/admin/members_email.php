<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/admin/members_email.php
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
$locale['email_create_subject'] = "Konto skapat ";
$locale['email_create_message'] = "Hej [USER_NAME],\n
ditt konto p� ".$settings['sitename']." har skapats.\n
Du kan nu logga in med f�ljande information:\n
anv�ndarnamn: [USER_NAME]\n
l�senord: [PASSWORD]\n\n
Observera att ditt l�senord lagras krypterat och kan inte �terst�llas av oss.
Om det skulle beh�vas, anv�nd funktionen f�r �terst�llning av l�senord.
H�lsningar,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Konto aktiverat ";
$locale['email_activate_message'] = "Hej [USER_NAME],\n
Ditt konto p� ".$settings['sitename']." har blivit aktiverat.\n
Du kan nu logga in med ditt valda anv�ndarnamn och l�senord.\n\n
H�lsningar,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "�teraktivering av konto erfordras p� ".$settings['sitename'];
$locale['email_deactivate_message'] = "Hej [USER_NAME],\n
Det har g�tt ".$settings['deactivation_period']." dag(-ar) sedan du sist loggade in p� ".$settings['sitename'].". Ditt konto har markerats som inaktivt, men all din information finns kvar.\n
F�r att �teraktivera ditt konto beh�ver du bara klicka p� f�ljande l�nk:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
H�lsningar,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Ditt konto p� ".$settings['sitename']." har blivit avst�ngt.";
$locale['email_ban_message'] = "Hej [USER_NAME],\n
Ditt konto p� ".$settings['sitename']." har blivit avst�ngt av ".$userdata['user_name']." p� grund av:\n
[REASON].\n
Om du �nskar mer information, v�nligen kontakta administrator p� ".$settings['sitename']." genom ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Ditt konto p� ".$settings['sitename']." har blivit avst�ngt.";
$locale['email_secban_message'] = "Hej [USER_NAME],\n
Ditt konto p� ".$settings['sitename']." har blivit avst�ngt av ".$userdata['user_name']." eftersom vissa h�ndelser p� siten relaterade till ditt anv�ndarnamn eller konto bed�mdes vara en s�kerhetsrisk.\n
Om du �nskar mer information, v�nligen kontakta en administrat�r p� ".$settings['sitename']." genom ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Ditt konto p� ".$settings['sitename']." har blivit avaktiverat";
$locale['email_suspend_message'] = "Hej [USER_NAME],\n
Ditt konto p� ".$settings['sitename']." har blivit avst�ngt av ".$userdata['user_name']." tills [DATE] (sidans tid) p� grund av:\n
[REASON].\n
Om du �nskar mer information, v�nligen kontakta en administrat�r p� ".$settings['sitename']." genom ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>