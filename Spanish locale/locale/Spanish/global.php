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
// Locale Settings
setlocale(LC_TIME, "es","es_ES"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "es";
$locale['tinymce'] = "es";
$locale['phpmailer'] = "es";

// Full & Short Months
$locale['months'] = "&nbsp|Enero|Febrero|Marzo|Abril|Mayo|Junio|Julio|Agosto|Septiembre|Octubre|Noviembre|Diciembre";
$locale['shortmonths'] = "&nbsp|Ene|Feb|Mar|Abr|May|Jun|Jul|Ago|Sep|Oct|Nov|Dic";

// Standard User Levels
$locale['user0'] = "P�blico";
$locale['user1'] = "Miembro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
$locale['user_na'] = "N/D";
$locale['user_anonymous'] = "Usuario An�nimo";
// Standard User Status
$locale['status0'] = "Activo";
$locale['status1'] = "Expulsado";
$locale['status2'] = "No Activado";
$locale['status3'] = "Suspendido";
$locale['status4'] = "Expulsi�n de Seguridad";
$locale['status5'] = "Cancelado";
$locale['status6'] = "An�nimo";
$locale['status7'] = "Desactivado";
$locale['status8'] = "Inactivo";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegaci�n";
$locale['global_002'] = "No se han creado enlaces\n";
// Users Online
$locale['global_010'] = "Usuarios Conectados";
$locale['global_011'] = "Invitados";
$locale['global_012'] = "Miembros";
$locale['global_013'] = "Ninguno";
$locale['global_014'] = "Total Miembros";
$locale['global_015'] = "Miembros Sin Activar";
$locale['global_016'] = "�ltimo Miembro";
// Forum Side panel
$locale['global_020'] = "Temas del Foro";
$locale['global_021'] = "�ltimos Temas";
$locale['global_022'] = "Temas Populares";
$locale['global_023'] = "No se han creado temas";
// Comments Side panel
$locale['global_025'] = "�ltimos Comentarios";
$locale['global_026'] = "No hay comentarios";
// Articles Side panel
$locale['global_030'] = "�ltimos Art�culos";
$locale['global_031'] = "No hay art�culos";
// Downloads Side panel
$locale['global_032'] = "�ltimas Descargas";
$locale['global_033'] = "No hay descargas";
// Welcome panel
$locale['global_035'] = "Bienvenida";
// Latest Active Forum Threads panel
$locale['global_040'] = "�ltimos Temas Activos del Foro";
$locale['global_041'] = "Mis Temas Recientes";
$locale['global_042'] = "Mis Mensajes Recientes";
$locale['global_043'] = "Nuevos Mensajes";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Visitas";
$locale['global_046'] = "Respuestas";
$locale['global_047'] = "�ltimo Mensaje";
$locale['global_048'] = "Foro";
$locale['global_049'] = "Publicado el";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Encuesta";
$locale['global_052'] = "Movido";
$locale['global_053'] = "No has iniciado temas en el foro.";
$locale['global_054'] = "No has publicado mensajes en el foro.";
$locale['global_055'] = "Desde tu �ltima visita hay %u nuevo(s) mensaje(s) en %u diferente(s) tema(s).";
$locale['global_056'] = "Mis Suscripciones";
$locale['global_057'] = "Opciones";
$locale['global_058'] = "Detener";
$locale['global_059'] = "No est�s suscrito a ning�n tema.";
$locale['global_060'] = "�Cancelar la suscripci�n a este tema?";
// News & Articles
$locale['global_070'] = "Publicado por ";
$locale['global_071'] = "el ";
$locale['global_072'] = "Leer m�s";
$locale['global_073'] = " Comentarios";
$locale['global_073b'] = " Comentario";
$locale['global_074'] = " Lecturas";
$locale['global_075'] = "Imprimir";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Noticias";
$locale['global_078'] = "No hay noticias";
$locale['global_079'] = "En ";
$locale['global_080'] = "Otras Noticias";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Siguiente";
$locale['global_092'] = "P�gina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Iniciar Sesi�n";
$locale['global_101'] = "Nombre de Usuario";
$locale['global_102'] = "Contrase�a";
$locale['global_103'] = "Recordar";
$locale['global_104'] = "Iniciar Sesi�n";
$locale['global_105'] = "�No eres miembro?<br /><a href='".BASEDIR."register.php' class='side'><strong>Reg�strate aqu�</strong></a>.";
$locale['global_106'] = "�Contrase�a olvidada?<br /><a href='".BASEDIR."lostpassword.php' class='side'><strong>Recupera tu contrase�a</strong></a>.";
$locale['global_107'] = "Registro";
$locale['global_108'] = "Contrase�a Olvidada";
// Member User Menu
$locale['global_120'] = "Editar Perfil";
$locale['global_121'] = "Mensajes Privados";
$locale['global_122'] = "Lista de Miembros";
$locale['global_123'] = "Administraci�n";
$locale['global_124'] = "Cerrar Sesi�n";
$locale['global_125'] = "Tienes %u ";
$locale['global_126'] = "nuevo mensaje";
$locale['global_127'] = "nuevos mensajes";
$locale['global_128'] = "env�o";
$locale['global_129'] = "env�os";
// Poll
$locale['global_130'] = "Encuesta Miembros";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Debes iniciar sesi�n para votar.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Votos";
$locale['global_135'] = "Votos: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalizada: ";
$locale['global_138'] = "Archivo de Encuestas";
$locale['global_139'] = "Selecciona una encuesta de la lista para verla:";
$locale['global_140'] = "Ver";
$locale['global_141'] = "Ver Encuesta";
$locale['global_142'] = "No se han creado encuestas.";

// Captcha
$locale['global_150'] = "C�digo de Validaci�n:";
$locale['global_151'] = "Introduce el C�digo de Validaci�n:";

// Footer Counter
$locale['global_170'] = "Visita �nica";
$locale['global_171'] = "Visitas �nicas";
$locale['global_172'] = "Generado en %s segundos";
$locale['global_173'] = "Consultas";
// Admin Navigation
$locale['global_180'] = "Inicio Administraci�n";
$locale['global_181'] = "Volver al Sitio";
$locale['global_182'] = "<b>Aviso:</b> Contrase�a de Administraci�n no introducida o incorrecta.";
// Miscellaneous
$locale['global_190'] = "Modo de mantenimiento activado";
$locale['global_191'] = "Tu direcci�n IP est� expulsada.";
$locale['global_192'] = "Tu cookie de usuario ha caducado. Vuelve a iniciar sesi�n para continuar.";
$locale['global_193'] = "No se ha podido establecer la cookie de usuario. Para poder iniciar sesi�n correctamente, aseg�rate de que tu navegador acepta cookies.";
$locale['global_194'] = "Esta cuenta est� suspendida.";
$locale['global_195'] = "Esta cuenta no est� activada.";
$locale['global_196'] = "El nombre de usuario o la contrase�a no son v�lidos.";
$locale['global_197'] = "Espera mientras eres transferido...<br /><br />
[ <a href='index.php'>o pulsa aqu� si no quieres esperar</a> ]";
$locale['global_198'] = "<b>ATENCI�N:</b> Se ha detectado el archivo 'setup.php'. Debes borrarlo inmediatamente.";
$locale['global_199'] = "<b>ATENCI�N:</b> No est� configurada la contrase�a de administrador. Pulsa <a href='".BASEDIR."edit_profile.php'>Editar Perfil</a> para configurarla.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Buscar";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Foro";
//Themes
$locale['global_210'] = "Ir al Contenido";
// No themes found
$locale['global_300'] = "No se han encontrado temas";
$locale['global_301'] = "No se ha podido mostrar esta p�gina. Por alguna circunstancia no se ha encontrado el Tema (Theme) del sitio web. Si eres el Administrador del sitio, usa tu cliente de FTP y transfiere al directorio <em>themes/</em> cualquier Tema dise�ado para <em>PHP-Fusion v7</em>. Despu�s de transferir el Tema, comprueba en la <em>Configuraci�n Principal</em> que el Tema seleccionado se encuentra en el directorio <em>themes/</em>. Si es as�, comprueba que el Tema transferido tiene el mismo nombre (incluyendo may�sculas y min�sculas - importante en servidores basados en UNIX) que el elegido en la p�gina de la <em>Configuraci�n Principal</em>.<br /><br />Si eres un miembro normal de este sitio web, contacta por email con el Administrador (".hide_email($settings['siteemail']).") e inf�rmale de este problema.";
$locale['global_302'] = "El Tema (Theme) elegido en la Configuraci�n Principal no existe o est� incompleto.";
// JavaScript Not Enabled
$locale['global_303'] = "<b>Error de JavaScript</b>:<br />Tu navegador no tiene JavaScript activado o no admite JavaScript. Debes <b>activar JavaScript</b> en tu navegador para ver correctametne este sitio web,<br />o <b>actualizar</b> tu navegador a uno que admita JavaScript: <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Navegador Web Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> o una versi�n de <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> m�s reciente que la versi�n 6.";
// User Management
// Member status
$locale['global_400'] = "suspendido";
$locale['global_401'] = "expulsado";
$locale['global_402'] = "desactivado";
$locale['global_403'] = "cuenta finalizada";
$locale['global_404'] = "cuenta anonimizada";
$locale['global_405'] = "usuario anonimizado";
$locale['global_406'] = "Esta cuenta ha sido expulsada por lo siguiente:";
$locale['global_407'] = "Esta cuenta ha sido suspendida hasta ";
$locale['global_408'] = " por lo siguiente:";
$locale['global_409'] = "Esta cuenta ha sido expulsada por motivos de seguridad.";
$locale['global_410'] = "El motivo es: ";
$locale['global_411'] = "Esta cuenta ha sido cancelada.";
$locale['global_412'] = "Esta cuenta ha sido anonimizada debido, probablemente, a su inactividad.";
// Banning due to flooding
$locale['global_440'] = "Expulsi�n Autom�tica por el Control de Desbordamiento";
$locale['global_441'] = "Expulsi�n en ".$settings['sitename'].".";
$locale['global_442'] = "Hola [USER_NAME],\n
Tu cuenta en ".$settings['sitename']." ha sido detectada publicando demasiados elementos en el sistema en un muy corto espacio de tiempo desde la direcci�n IP ".USER_IP." y, por consiguiente, ha sido expulsada. Esto se lleva a cabo para evitar que los robots env�en mensajes de SPAM en una r�pida sucesi�n.\n
Contacta con el administrador del sitio en ".$settings['siteemail']." para cancelar la expulsi�n de tu cuenta o para informar de que no has sido t� el causante de esta expulsi�n de seguridad.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspensi�n cancelada autom�ticamente por el sistema";
$locale['global_451'] = "Suspensi�n Cancelada en ".$settings['sitename'];
$locale['global_452'] = "Hola USER_NAME,\n
La suspensi�n de tu cuenta en ".$settings['siteurl']." ha sido cancelada. Aqu� tienes tus datos de inicio de sesi�n:\n
Nombre de Usuario: USER_NAME
Contrase�a: Oculta por motivos de seguridad\n
Si has olvidado tu contrase�a, puedes obtener una nueva contrase�a pulsando el siguiente enlace: LOST_PASSWORD\n\n
Saludos,\n
".$settings['siteusername'];
$locale['global_453'] = "Hola USER_NAME,\n
La suspensi�n de tu cuenta en ".$settings['siteurl']." ha sido cancelada.\n\n
Saludos,\n
".$settings['siteusername'];
$locale['global_454'] = "Cuenta Reactivada en ".$settings['sitename'];
$locale['global_455'] = "Hola USER_NAME,\n
Tu cuenta ha sido reactivada la �ltima vez que iniciaste sesi�n en ".$settings['siteurl']." y tu cuenta ya no est� marcada como inactiva.\n\n
Saludos,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = " Vac�o";
$locale['global_461'] = " Bytes";
$locale['global_462'] = " KB";
$locale['global_463'] = " MB";
$locale['global_464'] = " GB";
$locale['global_465'] = " TB";
//Safe Redirect
$locale['global_500'] = "Espera... Est�s siendo redirigido a %s. Si no eres redirigido, pulsa aqu�.";

// Captcha Locales
$locale['global_600'] = "C�digo de Validaci�n";
$locale['recaptcha'] = "es";

//Miscellaneous
$locale['global_900'] = "No se puede convertir HEX a DEC";
?>
