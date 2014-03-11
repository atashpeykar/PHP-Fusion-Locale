<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/forum/post.php
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
// Post Titles
$locale['400'] = "F�rhandsgranska �mne";
$locale['401'] = "Starta nytt �mne";
$locale['402'] = "F�rhandsgranska svar";
$locale['403'] = "Svara p� inl�gg";
$locale['404'] = "Svara";
$locale['405'] = "F�rhandsgranska �ndringar";
$locale['407'] = "Radera inl�gg";
$locale['408'] = "Redigera inl�gg";
$locale['409'] = "Spara �ndringar";
// Post Preview
$locale['420'] = "Inget �mne";
$locale['421'] = "Inl�gget inneh�ller ingen text, inl�gget kommer att avvisas om du inte skriver en text";
$locale['422'] = "F�rfattare:";
$locale['423'] = "Inl�gg:";
$locale['424'] = "Hemort:";
$locale['425'] = "Registrerad:";
$locale['426'] = "Publicerat: ";
$locale['427'] = "Redigerat av ";
$locale['428'] = " datum ";
$locale['429'] = " skrev:";
$locale['430'] = "Anv�ndar avatar";
$locale['431'] = "Senaste inl�gg";
$locale['432'] = "Senaste %s inl�gg";
// Post Error/Success
$locale['440a'] = "Otill�tet filformat p� bilaga.";
$locale['440b'] = "Otill�tet filnamn eller filstorlek p� bilagan.";
$locale['441'] = "Fel: Du har inte angivit en �mnesrubrik eller skrivit en text";
$locale['442'] = "Ditt inl�gg �r publicerat";
$locale['443'] = "Ditt svar �r publicerat";
$locale['444'] = "tr�d �r raderad";
$locale['445'] = "Inl�gget �r raderat";
$locale['446'] = "Ditt inl�gg �r uppdaterat";
$locale['447'] = "�terg� till �mne";
$locale['448'] = "�terg� till �mne";
$locale['449'] = "�terg� till forumindex";
$locale['450'] = "Fel: Du har varit inaktiv f�r l�nge, var v�nlig logga in igen";
$locale['451'] = "Underr�tta mig vid svar i det h�r �mnet.";
$locale['452'] = "Du kommer att bli underr�ttad vid svar i det h�r �mnet.";
$locale['453'] = "Du blir inte l�ngre underr�ttad vid svar i det h�r �mnet.";
$locale['454'] = "Detta inl�gg �r l�st. Kontakta moderator f�r mer information.";
$locale['455'] = "Du kan bara redigera ett meddelande f�r %d minut(er) efter initial inl�mning.";
// Post Form
$locale['460'] = "�mne";
$locale['461'] = "Meddelande";
$locale['462'] = "Typsnittsf�rg: ";
$locale['463'] = "Inst�llningar";
$locale['464'] = "Bifoga";
$locale['465'] = " (Ej obligatorisk)";
$locale['466'] = "Max. filstorlek: %s / Till�tna filtyper: %s";
$locale['467'] = "L�gg till omr�stning (Valfri)";
$locale['468'] = "Redigera omr�stning";
$locale['469'] = "Titel p� omr�stning";
$locale['470'] = "Inst�llningar f�r omr�stning";
$locale['471'] = "L�gg till valm�jlighet";
$locale['472'] = "Uppdatera";
$locale['473'] = "Radera";
$locale['474'] = "Redigera anledning";
// Post Form Options
$locale['480'] = "Prioritera den h�r �mnet?";
$locale['481'] = "L�s det h�r �mnet";
$locale['482'] = "Inaktivera smileys i det h�r inl�gget";
$locale['483'] = "Visa min signatur i det h�r inl�gget";
$locale['484'] = "Radera det h�r inl�gget";
$locale['485'] = "Radera bilaga -";
$locale['486'] = "Underr�tta mig n�r svar skrivs";
$locale['487'] = "D�lj redigering";
$locale['488'] = "L�s inl�gg";
// Post Access Violation
$locale['500'] = "Du kan inte redigera det h�r inl�gget.";
// Search Forum Form
$locale['530'] = "S�k i forum";
$locale['531'] = "S�k nyckelord";
$locale['532'] = "S�k";
// Forum Notification Email
$locale['550'] = "Underr�ttelse om svar i tr�den - {THREAD_SUBJECT}";
$locale['551'] = "Hej {USERNAME},

Ett svar har skrivits i f�ljande tr�d: '{THREAD_SUBJECT}' vilken du f�ljer p� ".$settings['sitename'].". Du kan anv�nda f�ljande l�nk f�r att se svaret:

{THREAD_URL}

Om du inte l�ngre �nskar f�lja den h�r tr�den kan du klicka 'Radera underr�ttelse vid svar i det h�r �mnet' som finns h�gst upp i �mnet.

Med v�nlig h�lsning,
".$settings['siteusername'].".";
?>