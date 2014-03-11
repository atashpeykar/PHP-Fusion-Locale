<?php
// Member Management Options
$locale['400'] = "Brukerbehandling";
$locale['401'] = "Bruker";
$locale['402'] = "Legg til nytt medlem";
$locale['403'] = "Brukertype";
$locale['404'] = "Valg";
$locale['405'] = "Vis";
$locale['406'] = "Endre";
$locale['407'] = "Aktiver";
$locale['408'] = "Opphev utestengelse";
$locale['409'] = "Utesteng";
$locale['410'] = "Slett";
$locale['411'] = "Det er ingen %s medlemmer";
$locale['412'] = " som begynnner med ";
$locale['413'] = " som passer ";
$locale['414'] = "Vis alle";
$locale['415'] = "S�k etter medlem:";
$locale['416'] = "S�k";
$locale['417'] = "Velg handling";
$locale['418'] = "Avbryt";
$locale['419'] = "Gjeninnsett";
// Ban/Unban/Delete Member
$locale['420'] = "Utestenging gjennomf�rt";
$locale['421'] = "Utestenging opphevet";
$locale['422'] = "Medlem slettet";
$locale['423'] = "Er du sikker p� at du �nsker � slette medlemmet?";
$locale['424'] = "Medlem aktivert";
// Edit Member Details
$locale['430'] = "Rediger medlem";
$locale['431'] = "Medlemsdetaljer oppdatert";
$locale['432'] = "Tilbake til medlemsadmin";
$locale['433'] = "Tilbake til adminside";
$locale['434'] = "Kunne ikke oppdatere medlemsdetaljer:";
// Extra Edit Member Details form options
$locale['440'] = "Lagre endringer";
// Update Profile Errors
$locale['450'] = "Hovedadministrator kan ikke endres.";
$locale['451'] = "Du m� oppgi brukernavn og e-postadresse.";
$locale['452'] = "Brukernavnet innheholder ugyldige tegn.";
$locale['453'] = "Brukernavnet ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." er allerede i bruk.";
$locale['454'] = "Ugyldig e-postadresse.";
$locale['455'] = "E-postadressen ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." er allerede i bruk.";
$locale['456'] = "De nye passordene er ikke like.";
$locale['457'] = "Ugyldig passord, bruk bare alfanumeriske tegn (a-Z, 0-9).<br />
Passordet m� v�re minst 6 tegn langt.";
$locale['458'] = "<strong>Advarsel:</strong> uventet skriptkj�ing.";
// View Member Profile
$locale['470'] = "Medlemsprofil";
$locale['472'] = "Statistikk";
$locale['473'] = "Brukergrupper";
// Add Member Errors
$locale['480'] = "Legg til medlem";
$locale['481'] = "Medlemskontoen ble lagt til.";
$locale['482'] = "Medlemskontoen kunne ikke legges til.";
// Suspension Log 
$locale['510s'] = "Suspensjonslogg for ";
$locale['511s'] = "Det er ingen registrerte suspenderinger for dette medlemmet i loggen.";
$locale['512s'] = "Tidligere suspenderinger av ";
$locale['513'] = "Nr."; // as in number
$locale['514'] = "Dato";
$locale['515'] = "�rsak";
$locale['516'] = "Suspenderende administrator";
$locale['517'] = "Systemhandling";
$locale['518'] = "Tilbake til brukerprofil";
$locale['519'] = "Suspenderingslogg for brukeren ";
$locale['520'] = "Opphevet: ";
$locale['521'] = "IP: ";
$locale['522'] = "Ikke opphevet enda";
$locale['540'] = "Feil";
$locale['541'] = "Feil: Du m� oppgi en grunn for suspenderingen!";
$locale['542'] = "Feil: Du m� oppgi en grunn for sikkerhetsutestengingen!";
// User Management Admin
$locale['550'] = "Suspender bruker: ";
$locale['551'] = "Varighet i dager:";
$locale['552'] = "Grunn:";
$locale['553'] = "Suspender";
$locale['554'] = "Det er ingen registrerte suspenderinger for dette medlemmet i loggen.";
$locale['555'] = "Hvis du bestemmer at bruker skal utestenges klikk 'Utesteng'";
$locale['556'] = "Opphev suspendering av bruker: ";
$locale['557'] = "Opphev suspendering";
$locale['558'] = "Opphev utestening av bruker: ";
$locale['559'] = "Opphev utestenging ";
$locale['560'] = "Opphev sikkerhets-utestenging av bruker: ";
$locale['561'] = "Opphev sikkerhets-utestenging";
$locale['562'] = "Utesteng bruker: ";
$locale['563'] = "Sikkerhets-utesteng bruker: ";
$locale['585a'] = "Vennligst oppgi grunnen for at du utestenger eller opphever utestengelsen ";

$locale['566'] = "Utestenging opphevet";
$locale['568'] = "Sikkerhets-utestenging gjennomf�rt";
$locale['569'] = "Sikkerhets-utestenging opphevet";
$locale['572'] = "Medlem suspendert";
$locale['573'] = "Suspendering opphevet";
$locale['574'] = "Medlem deaktivert";
$locale['575'] = "Medlem reaktivert";
$locale['576'] = "Konto kanselert";
$locale['577'] = "Konto kanselering ugjort";
$locale['578'] = "Konto kanselert og anonymisert";
$locale['579'] = "Konto anonymisering ugjort";
$locale['580'] = "Deaktiver inaktive medlemmer";
$locale['581'] = "Du har flere enn 50 inaktive medlemmer og m� kj�re deaktiveringsprosessen <strong>%d ganger</strong>.";
$locale['582'] = "Reaktiver";
$locale['583'] = "Gjenninnsett";
$locale['584'] = "Velg ny status";
$locale['585'] = "Dette medlemmet var opprinnelig utestengt av sikkerhetsgrunner! Er du sikker p� at du vil oppheve utestengingen av medlemmet n�?";

$locale['590'] = "Suspender";
$locale['591'] = "Opphev suspendering";
$locale['592'] = "suspenderer";
$locale['593'] = "opphever suspendering";
$locale['594'] = "Vennligst oppgi en grunn for at du gj� dette ";
$locale['595'] = " bruker ";
$locale['596'] = "Varighet:";

$locale['600'] = "Sikkerhetsutestengelse";
$locale['601'] = "sikkerhetsutestenger";
$locale['602'] = "Opphev utestengelse";
$locale['603'] = "opphever utestengelse";
$locale['604'] = "Grunn:";
// Deactivation System
$locale['610'] = "<strong>%d medlem(er)</strong> har ikke logget inn p� <strong>%d dag(er)</strong> og har blitt merket som inaktive. 
Ved � deaktivere disse brukerne vil de ha <strong>%d dag(er)</strong> f�r de er %s.";
$locale['611'] = "V�r oppmerksom p� at noen brukere kan ha bidratt med innhold til siden som foruminnlegg, kommentarer, bilder osv.
Disse vil slettes n�r deaktiverte brukere slettes.";
$locale['612'] = "bruker";
$locale['613'] = "brukere";
$locale['614'] = "Deaktiver";
$locale['615'] = "permanent slettet";
$locale['616'] = "anonymiser";
$locale['617'] = "Advarsel:";
$locale['618'] = "Det anbefales p� det sterkeste � endre handling for deaktivering til anonymiser i stedet for slette for � forhindre tap av data!";
$locale['619'] = "Du kan gj�re det <a href='".ADMIN."settings_users.php".$aidlink."'>her</a>.";
$locale['620'] = "anonymiser";
$locale['621'] = "Automatisk deaktivering av inaktive brukere.";
?>
