<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2010 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Swedish/global.php
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
// Locale Settings
setlocale(LC_TIME, "swedish"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "sv";
$locale['tinymce'] = "sv";
$locale['phpmailer'] = "en";
// Full & Short Months
$locale['months'] = "&nbsp|Januari|Februari|Mars|April|Maj|Juni|Juli|Augusti|September|Oktober|November|December";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Maj|Jun|Jul|Aug|Sep|Okt|Nov|Dec";
// Standard User Levels
$locale['user0'] = "Bes�kare";
$locale['user1'] = "Anv�ndare";
$locale['user2'] = "Administrat�r";
$locale['user3'] = "Superadministrat�r";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Anonym anv�ndare";
// Standard User Status
$locale['status0'] = "Aktiva";
$locale['status1'] = "Avst�ngda";
$locale['status2'] = "Inaktiverad";
$locale['status3'] = "Uteslutna";
$locale['status4'] = "S�kerhetsavst�ngda";
$locale['status5'] = "Avbrutna";
$locale['status6'] = "Anonyma";
$locale['status7'] = "Avaktiverade";
$locale['status8'] = "Inaktiva";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigation";
$locale['global_002'] = "Det finns inga l�nkar definierade\n";
// Users Online
$locale['global_010'] = "Inloggade anv�ndare";
$locale['global_011'] = "Bes�kare";
$locale['global_012'] = "Inloggade anv�ndare";
$locale['global_013'] = "Inga anv�ndare inloggade";
$locale['global_014'] = "Registrerade anv�ndare";
$locale['global_015'] = "Ej aktiverade";
$locale['global_016'] = "Senast registrerade anv�ndare";
// Forum Side panel
$locale['global_020'] = "Forum �mnen";
$locale['global_021'] = "Senaste �mne";
$locale['global_022'] = "Mest aktiva �mne";
$locale['global_023'] = "Det finns inga �mnen";
// Comments Side panel
$locale['global_025'] = "Senaste kommentarer";
$locale['global_026'] = "Inga kommentarer tillg�ngliga";
// Articles Side panel
$locale['global_030'] = "Senaste artiklarna";
$locale['global_031'] = "Inga tillg�ngliga artiklar";
// Downloads Side panel
$locale['global_032'] = "Senaste nedladdningar";
$locale['global_033'] = "Inga tillg�ngliga nedladdningar";
// Welcome panel
$locale['global_035'] = "V�lkommen";
// Latest Active Forum Threads panel
$locale['global_040'] = "Senaste aktiva �mne";
$locale['global_041'] = "Mina senaste �mnen";
$locale['global_042'] = "Mina senaste inl�gg";
$locale['global_043'] = "Nya inl�gg";
$locale['global_044'] = "�mne";
$locale['global_045'] = "Antal visningar";
$locale['global_046'] = "Svar";
$locale['global_047'] = "Senaste inl�gg";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Publicerat";
$locale['global_050'] = "F�rfattare";
$locale['global_051'] = "Omr�stning";
$locale['global_052'] = "Flyttat";
$locale['global_053'] = "Du har inte skapat n�gra �mnen �n.";
$locale['global_054'] = "Du har inte skrivit n�gra inl�gg �n.";
$locale['global_055'] = "Det finns %u nya inl�gg sedan ditt senaste bes�k.";
$locale['global_056'] = "Prenumerationer";
$locale['global_057'] = "Alternativ";
$locale['global_058'] = "Radera";
$locale['global_059'] = "Du har inte prenumererat p� n�got �mne.";
$locale['global_060'] = "Radera prenumeration?";
// News & Articles
$locale['global_070'] = "Inl�gg skrivet av ";
$locale['global_071'] = "den ";
$locale['global_072'] = "L�s mer";
$locale['global_073'] = " Kommentarer";
$locale['global_073b'] = " Kommentera";
$locale['global_074'] = " Visningar";
$locale['global_075'] = "Skriv ut";
$locale['global_076'] = "Redigera";
$locale['global_077'] = "Nyheter";
$locale['global_078'] = "Det finns inga nyheter �n";
$locale['global_079'] = "I ";
$locale['global_080'] = "Okategoriserat";
// Page Navigation
$locale['global_090'] = "F�reg�ende";
$locale['global_091'] = "N�sta";
$locale['global_092'] = "Sida ";
$locale['global_093'] = " av ";
// Guest User Menu
$locale['global_100'] = "Logga in";
$locale['global_101'] = "Anv�ndarnamn";
$locale['global_102'] = "L�senord";
$locale['global_103'] = "Kom ih�g mig";
$locale['global_104'] = "Logga in";
$locale['global_105'] = "Inte registrerad anv�ndare?<br /><a href='".BASEDIR."register.php' class='side'>Klicka h�r</a> f�r att registrera dig.";
$locale['global_106'] = "F�rlorat l�senordet?<br />Beg�r ett nytt <a href='".BASEDIR."lostpassword.php' class='side'>h�r</a>.";
$locale['global_107'] = "Registrera";
$locale['global_108'] = "F�rlorat l�senord";
// Member User Menu
$locale['global_120'] = "Redigera din profil";
$locale['global_121'] = "Privata meddelanden";
$locale['global_122'] = "Anv�ndarlista";
$locale['global_123'] = "Administrationspanel";
$locale['global_124'] = "Logga ut";
$locale['global_125'] = "Du har %u nytt/nya ";
$locale['global_126'] = "meddelande";
$locale['global_127'] = "meddelanden";
$locale['global_128'] = "bidrag";
$locale['global_129'] = "bidragen";
// Poll
$locale['global_130'] = "Omr�stning";
$locale['global_131'] = "R�sta";
$locale['global_132'] = "Du m�ste vara inloggad f�r att r�sta.";
$locale['global_133'] = "R�sta";
$locale['global_134'] = "R�ster";
$locale['global_135'] = "R�ster: ";
$locale['global_136'] = "P�b�rjad: ";
$locale['global_137'] = "Avslutad: ";
$locale['global_138'] = "Omr�stningsarkiv";
$locale['global_139'] = "V�lj en omr�stning du vill visa fr�n listan:";
$locale['global_140'] = "Visa";
$locale['global_141'] = "Visa omr�stning";
$locale['global_142'] = "Det finns inga omr�stningar.";
// Captcha
$locale['global_150'] = "S�kerhetskod";
$locale['global_151'] = "Skriv s�kerhetskod:";

// Footer Counter
$locale['global_170'] = "unikt bes�k";
$locale['global_171'] = "unika bes�k";
$locale['global_172'] = "Sidan uppdaterad p� %s sekunder";
$locale['global_173'] = "F�rfr�gningar";
// Admin Navigation
$locale['global_180'] = "Administation";
$locale['global_181'] = "Tillbaka";
$locale['global_182'] = "<strong>Varning</strong>: administrat�rl�senordet ej angivet eller ej giltigt.";
// Miscellaneous
$locale['global_190'] = "Underh�llsl�ge aktiverat";
$locale['global_191'] = "Ditt IP - nummer �r f�r n�rvarande blockerat.";
$locale['global_192'] = "Loggar ut som ";
$locale['global_193'] = "Loggar in som ";
$locale['global_194'] = "Det h�r kontot �r sp�rrat.";
$locale['global_195'] = "Det h�r kontot har �nnu inte aktiverats.";
$locale['global_196'] = "Ogiltigt anv�ndarnamn eller l�senord.";
$locale['global_197'] = "V�nta medan du f�rflyttas...<br /><br />[ <a href='index.php'>Eller klicka h�r om du inte vill v�nta</a> ]";
$locale['global_198'] = "<strong>Varning:</strong> filen setup.php har uppt�ckts, v�nligen radera den omedelbart.";
$locale['global_199'] = "<strong>Varning:</strong> administrat�rsl�senord �r inte angivet, klicka <a href='".BASEDIR."edit_profile.php'>Redigera profil</a> f�r att ange det.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."S�k";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "G� vidare till inneh�ll";
// No themes found
$locale['global_300'] = "Inget tema angivet i inst�llningarna";
$locale['global_301'] = "Den h�r sidan kan inte visas korrekt. P� grund av ok�nd omst�ndighet kan inget tema hittas. Om du �r superadministrat�r, v�nligen anv�nd din FTP - klient f�r att ladda upp ett tema gjort f�r <em>PHP-Fusion v7</em> till <em>tema/</em> mappen. S�k d�refter i <em>Huvudinst�llningar</em> f�r att se om valt tema �terfinns i <em>tema/</em> mappen. Notera att valt tema m�ste ha exakt samma namn som �r valt i <em>Huvudinst�llningar</em> sidan.<br /><br />Om du �r normalanv�ndare p� sidan, v�nligen kontakta sidans superadministrat�r via ".hide_email($settings['siteemail'])." epost och rapportera felet.";
$locale['global_302'] = "Valt tema i huvudinst�llningar finns inte eller �r inte f�rdigt!";
// JavaScript Not Enabled
$locale['global_303'] = "�h nej! Var �r <strong>JavaScript</strong>?<br />Din webbl�sare har inte JavaScript aktiverat eller s� st�der den inte JavaScript. V�nligen <strong>aktivera JavaScript</strong> i din webbl�sare f�r att kunna visa denna webbplats,<br /> eller <strong>uppdatera</strong> till en webbl�sare som st�djer JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> eller en version av <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> som �r nyare �n version 6.";
// Member status
$locale['global_400'] = "utesluten";
$locale['global_401'] = "avst�ngd";
$locale['global_402'] = "deaktiverad";
$locale['global_403'] = "konto avst�ngt";
$locale['global_404'] = "konto anonymiserat";
$locale['global_405'] = "anonym anv�ndare";
$locale['global_406'] = "Detta konto har blivit avst�ngt p� grund av f�ljande sk�l:";
$locale['global_407'] = "Detta konto har blivit upph�vts till ";
$locale['global_408'] = " p� grund av f�ljande sk�l:";
$locale['global_409'] = "Detta konto �r avst�ngt av s�kerhetssk�l.";
$locale['global_410'] = "Anledning till det �r: ";
$locale['global_411'] = "Detta konto �r upph�vt.";
$locale['global_412'] = "Detta konto har blivit anonymiserat, vanligen p� grund av inaktivitet.";
// Banning due to flooding
$locale['global_440'] = "Automatic Ban by Flood Control";
$locale['global_441'] = "Ditt konto hos ".$settings['sitename']."har blivit avst�ngt.";
$locale['global_442'] = "Hej [USER_NAME],\n
Ditt konto hos ".$settings['sitename']." har ertappats med att skriva allt f�r m�nga inl�gg/klotter p� kort tid fr�n IP ".USER_IP.", och har d�rf�r blivit avst�ngt. Detta g�res per automatik f�r att skydda siten fr�n s� kallade SpamBots.\n
V�nligen kontakta Administrat�ren hos ".$settings['siteemail']." i syfte att h�va denna sp�rr eller f�rklara varf�r det skett.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Avst�ngning upph�vs automatiskt av systemet.";
$locale['global_451'] = "Avst�ngning har upph�rt hos ".$settings['sitename'];
$locale['global_452'] = "Hej USER_NAME,\n
Avst�ngning av ditt konto hos ".$settings['siteurl']." har deaktiverats. H�r �r dina inloggningsuppgifter:\n
Username: USER_NAME
Password: Skyddat av s�kerhetssk�l\n
Om du har gl�mt ditt l�senord och f� ett nytt utskickat till din e-post adress: LOST_PASSWORD\n\n
H�lsningar,\n
".$settings['siteusername'];
$locale['global_453'] = "Hej USER_NAME,\n
Avst�ngning av ditt konto hos ".$settings['siteurl']." har deaktiverats.\n\n
H�lsningar,\n
".$settings['siteusername'];
$locale['global_454'] = "Konto �teraktiverat hos ".$settings['sitename'];
$locale['global_455'] = "Hej USER_NAME,\n
Senast du loggade in blev ditt konto �teraktiverat ".$settings['siteurl']."och ditt konto �r inte l�ngre markerat som inaktivt.\n\n
H�lsningar,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Tom";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Du omdirigeras nu till %s, ett �gonblick. Om du inte f�rs vidare, klicka h�r.";

// Captcha Locales
$locale['global_600'] = "S�kerhetskod";
$locale['recaptcha'] = "se";

//Miscellaneous
$locale['global_900'] = "Det g�r inte att konvertera HEX till DEC";
?>