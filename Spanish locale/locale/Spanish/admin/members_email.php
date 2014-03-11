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
$locale['email_create_subject'] = "Cuenta Creada en ";
$locale['email_create_message'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido creada.\n
Ahora ya puedes iniciar sesi�n con los siguientes datos:\n
Nombre de Usuario: [USER_NAME]\n
Contrase�a: [PASSWORD]\n\n
Saludos,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Cuenta Activada en ";
$locale['email_activate_message'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido activada.\n
Ahora ya puedes iniciar sesi�n usando el nombre de usuario y la contrase�a que elegiste.\n\n
Saludos,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reactivaci�n de Cuenta en ".$settings['sitename'];
$locale['email_deactivate_message'] = "Hola [USER_NAME],\n
Han pasado ".$settings['deactivation_period']." d�as desde la �ltima vez que accediste a ".$settings['sitename'].". Tu usuario ha sido marcado como inactivo, pero todos los datos de tu cuenta y tus contenidos permanecen intactos.\n
Si deseas reactivar tu cuenta, pulsa el siguiente enlace:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Saludos,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Expulsi�n de Cuenta en ".$settings['sitename'];
$locale['email_ban_message'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido expulsada por ".$userdata['user_name'].". El motivo es el siguiente:\n
[REASON].\n
Si deseas m�s informaci�n sobre esta expulsi�n, contacta con el administrador del sitio en ".$settings['siteemail'].".\n
Saludos,\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Expulsi�n de Cuenta en ".$settings['sitename'];
$locale['email_secban_message'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido expulsada por ".$userdata['user_name']." debido a que algunas acciones atribuidas a t� o relacionadas con tu cuenta han sido consideradas como una amenaza de seguridad para el sitio.\n
Si deseas m�s informaci�n sobre esta expulsi�n de seguridad, contacta con el administrador del sitio en ".$settings['siteemail'].".\n
Saludos,\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Suspensi�n de Cuenta en ".$settings['sitename'];
$locale['email_suspend_message'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido suspendida por ".$userdata['user_name']." hasta [DATE] (fecha/hora del sitio) por lo siguiente:\n
[REASON].\n
Si deseas m�s informaci�n sobre esta suspensi�n, contacta con el administrador del sitio en ".$settings['siteemail'].".\n
Saludos,\n
".$settings['siteusername'];
?>