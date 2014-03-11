<?php
/*---------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002-2011 Nick Jones
| http://www.php-fusion.co.uk/
+----------------------------------------------------+
| Spanish Language Pack - 2011/07/06 - v7.02.03
| Copyright (C) 2007-2011 Javier Esteban y �lvaro Herrero
| http://php-fusion.uni.cc/
+----------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at http://www.gnu.org/licenses/agpl.html. Removal of
| this copyright header is strictly prohibited without
| written permission from the original author(s).
+---------------------------------------------------*/

// Error messages

$locale['500'] = "Se ha producido un error";

$locale['501'] = "El enlace de reactivaci�n que has usado ya no es v�lido.<br /><br />
Contacta con el administrador del sitio en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si deseas solicitar la reactivaci�n manual.";

$locale['502'] = "El enlace de reactivaci�n que has usado no es v�lido.<br /><br />
Contacta con el administrador del sitio en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si deseas solicitar la reactivaci�n manual.";

$locale['503'] = "El enlace de reactivaci�n que has usado no ha podido reactivar tu cuenta.<br />
Quiz� tu cuenta ya haya sido reactivada y, en ese caso, deber�as poder <a href='".$settings['siteurl']."login.php'>iniciar sesi�n aqu�</a>.<br /><br />
Si ahora no puedes iniciar sesi�n, contacta con el administrador del sitio en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si deseas solicitar la reactivaci�n manual.";
// Send confirmation mail

$locale['504'] = "Cuenta Reactivada en ".$settings['sitename'];

$locale['505'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido reactivada. Esperamos poder verte m�s a menudo en el sitio.\n\n
Saludos,\n\n
".$settings['siteusername'];

$locale['506'] = "Reactivada por el usuario.";
?>
