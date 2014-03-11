<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/admin/members.php
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
// Member Management Options
$locale['400'] = "Anv�ndare";
$locale['401'] = "Anv�ndare";
$locale['402'] = "L�gg till ny anv�ndare";
$locale['403'] = "Anv�ndarstatus";
$locale['404'] = "Inst�llningar";
$locale['405'] = "Granska";
$locale['406'] = "Redigera";
$locale['407'] = "Aktivera";
$locale['408'] = "Radera sp�rr";
$locale['409'] = "Sp�rra";
$locale['410'] = "Radera";
$locale['411'] = "Det finns inga %s anv�ndare";
$locale['412'] = " som b�rjar p� ";
$locale['413'] = " matchar ";
$locale['414'] = "Visa alla";
$locale['415'] = "S�k anv�ndare:";
$locale['416'] = "S�k";
$locale['417'] = "V�lj �tg�rd";
$locale['418'] = "�ngra";
$locale['419'] = "Reaktivera";
// Ban/Unban/Delete Member
$locale['420'] = "Uteslut anv�ndare";
$locale['421'] = "Upph�v uteslutning";
$locale['422'] = "Anv�ndare raderad";
$locale['423'] = "�r du s�ker p� att du vill radera den h�r anv�ndaren?";
$locale['424'] = "Anv�ndare aktiverad";
// Edit Member Details
$locale['430'] = "Redigera anv�ndare";
$locale['431'] = "Anv�ndarinformation uppdaterad";
$locale['432'] = "�terg� till att administrera anv�ndare";
$locale['433'] = "�terg� till administrationspanel";
$locale['434'] = "Det gick inte att uppdatera anv�ndaren:";
// Extra Edit Member Details form options
$locale['440'] = "Spara �ndringar";
// Update Profile Errors
$locale['450'] = "Du kan inte redigera superadministrat�rer.";
$locale['451'] = "Du m�ste ange anv�ndarnamn och e-post adress.";
$locale['452'] = "Anv�ndarnamnet inneh�ller otill�tna tecken.";
$locale['453'] = "Anv�ndarnamnet ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." anv�nds redan.";
$locale['454'] = "Felaktig e-post adress.";
$locale['455'] = "E-post adressen ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." anv�nds redan.";
$locale['456'] = "L�senorden �r inte identiska.";
$locale['457'] = "Ogiltigt l�senord, endast alfanumeriska tecken f�r anv�ndas.<br />
L�senordet m�ste best� av minst 6 tecken.";
$locale['458'] = "<strong>Varning:</strong> ov�ntad scripth�ndelse.";
// View Member Profile
$locale['470'] = "Anv�ndarprofil";
$locale['472'] = "Statistik";
$locale['473'] = "Anv�ndargrupper";
// Add Member Errors
$locale['480'] = "L�gg till anv�ndare";
$locale['481'] = "Anv�ndarkontot har skapats.";
$locale['482'] = "Anv�ndarkontot kan inte skapas.";
// Suspension Log
$locale['510s'] = "Indragningslogg f�r ";
$locale['511s'] = "D�r finns inga registrerade indragningar f�r denna anv�ndare.";
$locale['512s'] = "F�reg�ende indragningar ";
$locale['513'] = "Nej."; // as in number
$locale['514'] = "Datum";
$locale['515'] = "Orsak";
$locale['516'] = "Utf�rdande Administrat�r";
$locale['517'] = "System�tg�rd";
$locale['518'] = "Tillbaka till anv�ndarprofil";
$locale['519'] = "Indragningslogg f�r denna anv�ndare: ";
$locale['520'] = "Upph�vd: ";
$locale['521'] = "IP: ";
$locale['522'] = "Ej �nnu �teruppr�ttad";
$locale['540'] = "Fel";
$locale['541'] = "Fel: Du m�ste ange sk�l f�r Indragning!";
$locale['542'] = "Fel: Du m�ste ange sk�l f�r s�kerhetsavst�ngning!";
// User Management Admin
$locale['550'] = "Dra in anv�ndarr�ttigheter: ";
$locale['551'] = "Antal dagar:";
$locale['552'] = "Orsak:";
$locale['553'] = "Dra in anv�ndarr�ttigheter.";
$locale['554'] = "D�r finns inga registrerade indragningar f�r denna anv�ndare.";
$locale['555'] = "Skall denna anv�ndare st�ngas av?";
$locale['556'] = "�terge anv�ndarr�ttigheter till anv�ndare: ";
$locale['557'] = "�terge anv�ndarr�ttigheter";
$locale['558'] = "Reaktivera anv�ndare: ";
$locale['559'] = "Reaktivera ";
$locale['560'] = "�terta S�kerhetsavst�ngning av anv�ndare: ";
$locale['561'] = "�terta S�kerhetsavst�ngning";
$locale['562'] = "Avaktivera anv�ndare: ";
$locale['563'] = "S�kerhetsavst�ng anv�ndare: ";
$locale['566'] = "Avst�ngning upph�vd";
$locale['568'] = "Avst�ngd av s�kerhetssk�l";
$locale['569'] = "S�kerhetsavst�ngning upph�vd";
$locale['572'] = "Anv�ndares �tkomstr�ttigheter indragna.";
$locale['573'] = "�tkomstr�ttigheter �teruppr�ttade";
$locale['574'] = "Anv�ndare avaktiverad";
$locale['575'] = "Anv�ndare �teraktiverad";
$locale['576'] = "Konto annullerades";
$locale['577'] = "�tertagning av konto ej genomf�rd";
$locale['578'] = "Kontot annullerades och anonymiserades";
$locale['579'] = "Anonymisering av konto ej genomf�rt";
$locale['580'] = "Avaktivera inaktiva anv�ndare";
$locale['581'] = "Det finns fler �n 50 inaktiva anv�ndare och m�ste d�rmed k�ra avaktiveringsprocessen<strong>%d g�nger</strong>.";
$locale['582'] = "�teraktivera";
$locale['583'] = "�teruppr�tta";
$locale['584'] = "V�lj ny status";
$locale['585'] = "Denna anv�ndare blev avaktiverad av s�kerhetssk�l! �r du s�ker p� att vilja �teruppr�tta anv�ndaren?";
$locale['585a'] = "Specificera sk�l till varf�r du st�nger av eller h�ver avst�ngning ";
$locale['590'] = "Uteslut";
$locale['591'] = "�terta supendering";
$locale['592'] = "utesluter";
$locale['593'] = "�tertar suspendering";
$locale['594'] = "Ange ett sk�l till att du ";
$locale['595'] = " anv�ndaren ";
$locale['596'] = "Tid:";
$locale['600'] = "S�kerhetsavst�ngning";
$locale['601'] = "inaktiverar av s�kerhetssk�l";
$locale['602'] = "Avst�ngning";
$locale['603'] = "�tertar avst�ngning";
$locale['604'] = "Orsak:";
// Deactivation System
$locale['610'] = "<strong>%d anv�ndaren(-na)</strong> har inte loggat in p� <strong>%d dag(-ar)</strong> och har inaktiverats. 
Genom avaktivering av anv�ndare har de<strong>%d dag(-ar)</strong> innan de �r %s.";
$locale['611'] = "Observera att vissa anv�ndare kan ha medverkat till att ha skapat inneh�ll p� din site, s�som foruminl�gg, kommentarer, bilder, etc.
Dessa blir ocks� raderade d� icke aktiva anv�ndare raderas.";
$locale['612'] = "anv�ndare";
$locale['613'] = "anv�ndare";
$locale['614'] = "Deaktivera";
$locale['615'] = "permanent raderad";
$locale['616'] = "anonym";
$locale['617'] = "Varning:";
$locale['618'] = "det rekommenderas att �ndra avaktiveringsmetod fr�n radering till anonymisera f�r att f�rhindra dataf�rlust!";
$locale['619'] = "Det kan g�ras <a href='".ADMIN."settings_users.php".$aidlink."'>h�r</a>.";
$locale['620'] = "anonym";
$locale['621'] = "Automatisk deaktivering av inaktiva anv�ndare.";
?>