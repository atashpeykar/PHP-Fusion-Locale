<?php
/*
Danish Language Fileset
Produced by Jan Moelgaard (janmol)
Email: janmol@php-fusion.dk
Web: http://www.php-fusion.dk
Norwegian translation by Preben Keim. Email: preben.keim@paulen.no
web: http://www.paulen.no */

// Locale Settings
setlocale(LC_TIME, "nb","NORWEGIAN","no_NO.ISO8859-15"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "nb";
$locale['tinymce'] = "nb";
$locale['phpmailer'] = "no";
$locale['recaptcha'] = "no";

// Full & Short Months
$locale['months'] = "&nbsp|Januar|Februar|Mars|April|Mai|Juni|July|August|September|Oktober|November|Desember";
$locale['shortmonths'] = "&nbsp|Jan|Feb|Mar|Apr|Mai|Jun|Jul|Aug|Sept|Okt|Nov|Des";

// Standard User Levels
$locale['user0'] = "Bes�kende";
$locale['user1'] = "Medlem";
$locale['user2'] = "Administrator";
$locale['user3'] = "Superadministrator";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Annonym Bruker";
// Standard User Status
$locale['status0'] = "Aktiv";
$locale['status1'] = "Utestengt";
$locale['status2'] = "Ikke aktivert";
$locale['status3'] = "Suspendert";
$locale['status4'] = "Utestengt av sikkerhets�rsaker";
$locale['status5'] = "Annullert";
$locale['status6'] = "Annonym";
$locale['status7'] = "Deaktivert";
$locale['status8'] = "Innaktiv";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderator";
// Navigation
$locale['global_001'] = "Navigasjon";
$locale['global_002'] = "Ingen lenker spesifisert\n";
// Users Online
$locale['global_010'] = "Brukere online";
$locale['global_011'] = "Gjester online";
$locale['global_012'] = "Medlemmer online";
$locale['global_013'] = "Ingen medlemmer online";
$locale['global_014'] = "Antall medlemmer";
$locale['global_015'] = "Uaktiverte medlemmer";
$locale['global_016'] = "Siste medlem";
// Forum Side panel
$locale['global_020'] = "Forumtr�der";
$locale['global_021'] = "Siste tr�der";
$locale['global_022'] = "Mest aktive tr�der";
$locale['global_023'] = "Ingen tr�der startet";

// Comments Side panel
$locale['global_025'] = "Siste kommentarer";
$locale['global_026'] = "Det er ikke skrevet kommentarer";
// Articles Side panel
$locale['global_030'] = "Siste artikler";
$locale['global_031'] = "Ingen tilgjengelige artikler";
// Welcome panel
$locale['global_035'] = "Velkommen";
// Latest Active Forum Threads panel
$locale['global_040'] = "Siste aktive forumtr�der";
$locale['global_041'] = "Mine siste tr�der";
$locale['global_042'] = "Mine siste innlegg";
$locale['global_043'] = "Nye innlegg";
$locale['global_044'] = "Tr�d";
$locale['global_045'] = "Vist";
$locale['global_046'] = "Svar";
$locale['global_047'] = "Siste innlegg";
$locale['global_048'] = "Forum";
$locale['global_049'] = "Skrevet den";
$locale['global_050'] = "Av";
$locale['global_051'] = "Avstemming";
$locale['global_052'] = "Flyttet";
$locale['global_053'] = "Du har ikke startet noen tr�der enda.";
$locale['global_054'] = "Du har ikke skrevet noen innlegg i forumet enda.";
$locale['global_055'] = "Det er %u nye innlegg siden ditt siste bes�k.";
$locale['global_056'] = "Tr�der jeg f�lger";
$locale['global_057'] = "Valg";
$locale['global_058'] = "Stopp";
$locale['global_059'] = "Du f�lger ingen tr�der.";
$locale['global_060'] = "Stopp f�lging av tr�den?";
// News & Articles
$locale['global_070'] = "Skrevet av ";
$locale['global_071'] = "den ";
$locale['global_072'] = "Les mer";
$locale['global_073'] = " Kommentarer";
$locale['global_073b'] = " Kommentar";
$locale['global_074'] = " Visninger";
$locale['global_075'] = "Skriv ut";
$locale['global_076'] = "Rediger";
$locale['global_077'] = "Nyheter";
$locale['global_078'] = "Det er ikke skrevet noen nyheter enda";
$locale['global_079'] = "I ";
// Page Navigation
$locale['global_090'] = "Forig";
$locale['global_091'] = "Neste";
$locale['global_092'] = "Side ";
$locale['global_093'] = " av ";
// Guest User Menu
$locale['global_100'] = "Logg inn";
$locale['global_101'] = "Brukernavn";
$locale['global_102'] = "Passord";
$locale['global_103'] = "Husk Meg";
$locale['global_104'] = "Logg inn";
$locale['global_105'] = "Ikke medlem enda?<br /><a href='".BASEDIR."register.php' class='side'>Klikk her</a> for registrering.";
$locale['global_106'] = "Glemt passordet?<br />F� nytt <a href='".BASEDIR."lostpassword.php' class='side'>ved � klikke her</a>.";
$locale['global_107'] = "Registrering";
$locale['global_108'] = "Glemt passord";

// Member User Menu
$locale['global_120'] = "Rediger profil";
$locale['global_121'] = "Private meldinger";
$locale['global_122'] = "Medlemsliste";
$locale['global_123'] = "Adminpanel";
$locale['global_124'] = "Logg ut";
$locale['global_125'] = "Du har %u ";
$locale['global_126'] = "ny melding";
$locale['global_127'] = "nye meldinger";
$locale['global_128'] = "forslag";
$locale['global_129'] = "forslag";
// Poll
$locale['global_130'] = "Avstemming";
$locale['global_131'] = "Avgi stemme";
$locale['global_132'] = "Du m� v�re innlogget for � stemme.";
$locale['global_133'] = "Stemme";
$locale['global_134'] = "Stemmer";
$locale['global_135'] = "Stemmer: ";
$locale['global_136'] = "Startet: ";
$locale['global_137'] = "Avsluttet: ";
$locale['global_138'] = "Avstemminger Arkivet";
$locale['global_139'] = "Velg en avstemming fra listen:";
$locale['global_140'] = "Se";
$locale['global_141'] = "Se avstemming";
$locale['global_142'] = "Ingen avstemminger er startet.";
// Shoutbox
$locale['global_150'] = "Replikkboks";
$locale['global_151'] = "Navn:";

// Footer Counter
$locale['global_170'] = "Unikt bes�k";
$locale['global_171'] = "Unike bes�k";
$locale['global_172'] = "Generert p�: %s sekunder";
$locale['global_173'] = "Sp�rringer";
// Admin Navigation
$locale['global_180'] = "Admin Hjem";
$locale['global_181'] = "Tilbake til siden";
$locale['global_182'] = "<strong>Merk:</strong> Adminpassord ikke skrevet inn eller er feil.";
// Miscellaneous
$locale['global_190'] = "Vedlikeholdsmodus er aktivert";
$locale['global_191'] = "IP-adressen din er for tiden utestengt.";
$locale['global_192'] = "Logger ut som ";
$locale['global_193'] = "Logger inn som ";
$locale['global_194'] = "Denne brukerkontoen er for tiden stengt. ";
$locale['global_195'] = "Denne brukerkontoen er ikke aktivert enda.";
$locale['global_196'] = "Ugyldig brukernavn eller passord.";
$locale['global_197'] = "Vennligst vent mens du blir omdirigert...<br /><br />
[ <a href='index.php'>Eller klikk her om du ikke �nsker � vente</a> ]";
$locale['global_198'] = "<strong>Advarsel:</strong> Filen setup.php er fortsatt p� serveren, slett den umidelbart!";
$locale['global_199'] = "<strong>Advarsel:</strong> administratorpassord er ikke oppgitt, klikk <a href='edit_profile.php'>Rediger profil</a> for � oppgi det.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."S�k";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "G� til innhold";
// No themes found
$locale['global_300'] = "tema ikke funnet";
$locale['global_301'] = "Vi beklager, men siden kan ikke vises. Av en eller annen grunn finnes det ikke noe tema for siden. Hvis du er administrator for siden bruk din FTP klient og last opp til mappen <em>themes/</em> et tema laget for <em>PHP-Fusion v7</em>. Etter opplasting av tema sjekker du i <em>Hovedinnstillinger</em> at valgte tema er lastet opp i mappen <em>themes/</em>. Hvis s� er tilfelle - sjekk at opplastet tema har samme navn (inkludert store og sm� bokstaver; viktig p� UNIX baserte servere) som valgt p� sidens <em>Hovedinnstillinger</em>.<br /><br />Hvis du er en vanlig bruker av siden, vennligst kontakt sidens administrator via ".hide_email($settings['siteemail'])." og fortell om problemet.";

$locale['global_302'] = "Det tema, som du har valgt under hovedops�tning eksisterer ikke eller er inkompatibelt!";
// JavaScript Not Enabled
$locale['global_303'] = "Usj! Hvor er <strong>JavaScript</strong>?<br />Din nettleser har ikke JavaScript aktivert eller st�tter ikke JavaScript. Vennligst <strong>aktiver JavaScript</strong> i din nettleser for � vise nettsiden ordentlig,<br /> eller <strong>oppgrader</strong> til en nettleser som st�tter JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> nyere enn versjon 6.";
// User Management
// Member status
$locale['global_400'] = "suspendert";
$locale['global_401'] = "utestengt";
$locale['global_402'] = "deaktivert";
$locale['global_403'] = "konto avsluttet";
$locale['global_404'] = "konto anonymisert";
$locale['global_405'] = "anonym bruker";
$locale['global_406'] = "Kontoen har blitt utestengt av f�lgende grunn:";
$locale['global_407'] = "Kontoen har blitt suspendert til ";
$locale['global_408'] = " av f�lgende grunn:";
$locale['global_409'] = "Kontoen har blitt utestengt av sikkerhetsgrunner.";
$locale['global_410'] = "Grunnen til dette er: ";
$locale['global_411'] = "Kontoen har blitt kanselert.";
$locale['global_412'] = "Denne konto har blitt anonymisert, sannsynligvis p� grunn av inaktivitet.";
// Banning due to flooding
$locale['global_440'] = "Automatisk utestengelse av flood-kontroll";
$locale['global_441'] = "Din konto p� ".$settings['sitename']." har blitt utestengt";
$locale['global_442'] = "Hei [USER_NAME],\n
Din konto p� ".$settings['sitename']." ble tatt i � legge til for mange elementer i systemet i l�pet av veldig kort tid fra IP-adressen ".USER_IP.", og har derfor blitt utestengt. Dette er gjort for � forhindre bots fra � sende inn s�ppelmeldinger i rask rekkef�lge.\n
Vennligst kontakt sidens administrator p� ".$settings['siteemail']." for � f� kontoen gjenopprettet eller rapporter hvis det ikke var du som for�rsaket utestengelsen.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspendering automatisk opphevet av systemet";
$locale['global_451'] = "Suspendering opphevet p� ".$settings['sitename'];
$locale['global_452'] = "Hei USER_NAME,\n
Suspenderingen av kontoen din p� ".$settings['siteurl']." har blitt opphevet. Her er innloggingsdetaljene:\n
Brukernavn: USER_NAME
Passord: Er skjult av sikkerhetsgrunner\n
Hvis du har glemt passordet, kan du tilbakestille det via f�lgende lenke: LOST_PASSWORD\n\n
Hilsen,\n
".$settings['siteusername'];
$locale['global_453'] = "Hei USER_NAME,\n
Suspenderingen av kontoen din p� ".$settings['siteurl']." har blitt opphevet.\n\n
Hilsen,\n
".$settings['siteusername'];
$locale['global_454'] = "Konto reaktivert p� ".$settings['sitename'];
$locale['global_455'] = "Hei USER_NAME,\n
Sist du logget inn ble kontoen din reaktivert p� ".$settings['siteurl']." og kontoen er ikke lengre merket som inaktiv.\n\n
Hilsen,\n
".$settings['siteusername'];

// Function parsebytesize()

$locale['global_460'] = "Tom";

$locale['global_461'] = "Bytes";

$locale['global_462'] = "kB";

$locale['global_463'] = "MB";

$locale['global_464'] = "GB";

$locale['global_465'] = "TB";
//Safe Redirect

$locale['global_500'] = "Du blir n� omdirigert til %s, vennligst vent. Hvis du ikke blir omdirigert, klikk her.";

// Captcha Locales
// Captcha Locales
$locale['global_600'] = "Sikkerhetskode";
$locale['recaptcha'] = "no";

//Miscellaneous
$locale['global_900'] = "Ikke mulig � konvertere HEX til DEC";
?>