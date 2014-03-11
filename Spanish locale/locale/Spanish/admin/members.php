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
// Member Management Options
$locale['400'] = "Gesti�n de Usuarios";
$locale['401'] = "Usuario";
$locale['402'] = "A�adir Miembro";
$locale['403'] = "Tipo de Usuario";
$locale['404'] = "Opciones";
$locale['405'] = "Ver Estado";
$locale['406'] = "Editar";
$locale['407'] = "Activar";
$locale['408'] = "Readmitir";
$locale['409'] = "Expulsar";
$locale['410'] = "Borrar";
$locale['411'] = "No hay miembros en estado %s";
$locale['412'] = " que empiecen por ";
$locale['413'] = " que coincidan con ";
$locale['414'] = "Mostrar Todos";
$locale['415'] = "Buscar:";
$locale['416'] = "Buscar";
$locale['417'] = "Seleccionar Acci�n";
$locale['418'] = "Cancelar";
$locale['419'] = "Rehabilitar";
// Ban/Unban/Delete Member
$locale['420'] = "Expulsi�n impuesta";
$locale['421'] = "Expulsi�n eliminada";
$locale['422'] = "Miembro borrado";
$locale['423'] = "�Borrar este miembro?";
$locale['424'] = "Miembro activado";
// Edit Member Details
$locale['430'] = "Editar Miembro";
$locale['431'] = "Datos del miembro actualizados";
$locale['432'] = "Volver a la Administraci�n de Miembros";
$locale['433'] = "Volver a Administraci�n";
$locale['434'] = "No se han podido actualizar los datos del miembro:";
// Extra Edit Member Details form options
$locale['440'] = "Guardar";
// Update Profile Errors
$locale['450'] = "No se ha podido editar el administrador principal.";
$locale['451'] = "Debes indicar un nombre de usuario y una direcci�n de email.";
$locale['452'] = "El nombre de usuario contiene caracteres no v�lidos.";
$locale['453'] = "El nombre de usuario ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." ya est� en uso.";
$locale['454'] = "La direcci�n de email no es v�lida.";
$locale['455'] = "La direcci�n de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." ya est� en uso.";
$locale['456'] = "Las nuevas contrase�as no coinciden.";
$locale['457'] = "Contrase�a no v�lida. Usa s�lo caracteres alfanum�ricos.<br />
La contrase�a debe tener, como m�nimo, 8 caracteres de longitud.";
$locale['458'] = "<b>Aviso:</b> Ejecuci�n inesperada del programa.";
// View Member Profile
$locale['470'] = "Perfil del Miembro";
$locale['472'] = "Estad�sticas";
$locale['473'] = "Grupos de Usuarios";
// Add Member Errors
$locale['480'] = "A�adir Miembro";
$locale['481'] = "La cuenta del miembro ha sido creada.";
$locale['482'] = "No se ha podido crear la cuenta del miembro.";
// Suspension Log 
$locale['510s'] = "Registro de Suspensi�n para ";
$locale['511s'] = "En el registro de suspensiones no hay datos de este miembro.";
$locale['512s'] = "Suspensiones anteriores de ";
$locale['513'] = "N�."; // as in number
$locale['514'] = "Fecha";
$locale['515'] = "Motivo";
$locale['516'] = "Suspensi�n del Administrador";
$locale['517'] = "Acci�n del Sistema";
$locale['518'] = "Volver al Perfil del Usuario";
$locale['519'] = "Registro de Suspensi�n para este Usuario ";
$locale['520'] = "Cancelada: ";
$locale['521'] = "IP: ";
$locale['522'] = "Todav�a no rehabilitado";
$locale['540'] = "Error";
$locale['541'] = "Error: Debes indicar un motivo para la Suspensi�n.";
$locale['542'] = "Error: Debes indicar un motivo para la Expulsi�n de Seguridad.";
// User Management Admin
$locale['550'] = "Suspender Usuario: ";
$locale['551'] = "Duraci�n en d�as:";
$locale['552'] = "Motivo:";
$locale['553'] = "Suspender";
$locale['554'] = "En el registro de suspensiones no hay datos de este miembro.";
$locale['555'] = "Si decides que este usuario deber�a ser expulsado, pulsa Expulsar";
$locale['556'] = "Cancelar Suspensi�n del Usuario: ";
$locale['557'] = "Cancelar Suspensi�n";
$locale['558'] = "Cancelar Expulsi�n del Usuario: ";
$locale['559'] = "Cancelar Expulsi�n";
$locale['560'] = "Cancelar Expulsi�n de Seguridad del Usuario: ";
$locale['561'] = "Cancelar Expulsi�n de Seguridad";
$locale['562'] = "Expulsar al Usuario: ";
$locale['563'] = "Expulsar por seguridad al Usuario: ";
$locale['585a'] = "Explica el motivo por el que est�s expulsando o readmitiendo ";

$locale['566'] = "Expulsi�n cancelada";
$locale['568'] = "Expulsi�n de seguridad impuesta";
$locale['569'] = "Expulsi�n de seguridad cancelada";
$locale['572'] = "Miembro suspendido";
$locale['573'] = "Suspensi�n cancelada";
$locale['574'] = "Miembro desactivado";
$locale['575'] = "Miembro reactivado";
$locale['576'] = "Cuenta cancelada";
$locale['577'] = "Cancelaci�n de cuenta anulada";
$locale['578'] = "Cuenta cancelada y anonimizada";
$locale['579'] = "Anonimizaci�n de cuenta anulada";
$locale['580'] = "Desactivar Miembros Inactivos";
$locale['581'] = "Tienes m�s de 50 usuarios inactivos y el proceso de desactivaci�n tendr� que ejecutarse <b>%d veces</b>.";
$locale['582'] = "Reactivar";
$locale['583'] = "Rehabilitar";
$locale['584'] = "Seleccionar nuevo estado";
$locale['585'] = "Este miembro fue inicialmente expulsado por razones de seguridad. �Seguro que deseas readmitir ahora a este miembro?";

$locale['590'] = "Suspender";
$locale['591'] = "Rehabilitar";
$locale['592'] = "suspendiendo";
$locale['593'] = "rehabilitando";
$locale['594'] = "Indica el motivo por el que est�s ";
$locale['595'] = " al usuario ";
$locale['596'] = "Duraci�n:";

$locale['600'] = "Expulsar por seguridad";
$locale['601'] = "expulsando por seguridad";
$locale['602'] = "Readmitir";
$locale['603'] = "readmitiendo";
$locale['604'] = "Motivo:";
// Deactivation System
$locale['610'] = "Hay <b>%d usuarios</b> que no han iniciado sesi�n durante <b>%d d�as</b> y han sido marcados como inactivos. Si se desactivan, dispondr�n de <b>%d d�as</b> antes de que sean %s.";
$locale['611'] = "Ten en cuenta que algunos usuarios han podido enviar contenidos al sitio, tales como mensajes del foro, comentarios, fotos, etc., y �stos ser�n eliminados cuando los usuarios desactivados sean borrados.";
$locale['612'] = "usuario";
$locale['613'] = "usuarios";
$locale['614'] = "Desactivar";
$locale['615'] = "borrado permanentemente";
$locale['616'] = "anonimizar";
$locale['617'] = "<b>Aviso:</b>";
$locale['618'] = "Es muy recomendable cambiar la acci�n de desactivaci�n por la de anonimizaci�n para evitar el borrado y la perdida de datos.";
$locale['619'] = "Puedes hacerlo aqu�.";
$locale['620'] = "anonimizar";
$locale['621'] = "Desactivaci�n autom�tica de los usuarios inactivos.";
?>