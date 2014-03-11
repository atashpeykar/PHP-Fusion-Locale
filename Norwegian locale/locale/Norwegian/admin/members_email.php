<?php
$locale['email_create_subject'] = "Konto opprettet p� ";
$locale['email_create_message'] = "Hei [USER_NAME],\n
Din konto p� ".$settings['sitename']." har blitt opprettet.\n
Du kan n� logge inn med f�lgende detaljer:\n
brukernavn: [USER_NAME]\n
passord: [PASSWORD]\n\n
Hilsen,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Konto aktivert p� ";
$locale['email_activate_message'] = "Hei [USER_NAME],\n
Din konto p� ".$settings['sitename']." har blitt aktivert.\n
Du kan n� logge inn med ditt valgte brukernavn og passord.\n\n
Hilsen,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Konto reaktivering kreves p� ".$settings['sitename'];
$locale['email_deactivate_message'] = "Hei [USER_NAME],\n
Det har g�tt ".$settings['deactivation_period']." dag(er) siden du sist logget inn p� ".$settings['sitename'].". Din bruker har blitt markert som inaktiv, men alle kontodetaljene og innholdet er intakt.\n
For � reaktivere kontoen din klikk denne lenken:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Hilsen,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Din konto p� ".$settings['sitename']." har blitt utestengt";
$locale['email_ban_message'] = "Hei [USER_NAME],\n
Kontoen din p� ".$settings['sitename']." har blitt utestengt av ".$userdata['user_name']." av f�lgende grunn:\n
[REASON].\n
Hvis du vil ha mer informasjon rundt utestengelsen, vennligst kontakt sidens administrator p� ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Din konto p� ".$settings['sitename']." har blitt utestengt";
$locale['email_secban_message'] = "Hei [USER_NAME],\n
Din konto p� ".$settings['sitename']." har blitt utestengt av ".$userdata['user_name']." p� grunn av at handlinger akkreditert deg eller koblet til din konto var � regne som en sikkerhetstrussel mot siden.\n
Hvis du vil ha mer informasjon rundt sikkerhetsutestengelsen, vennligst kontakt sidens administrator p� ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Din konto p� ".$settings['sitename']." har blitt suspendert";
$locale['email_suspend_message'] = "Hei [USER_NAME],\n
Din konto p� ".$settings['sitename']." har blitt suspendert av ".$userdata['user_name']." inntil [DATE] (site time) av f�lgende gunn:\n
[REASON].\n
Hvis du �nsker mer informasjon omkring suspenderingen, vennligst kontakt sidens administrator p� ".$settings['siteemail'].".\n
".$settings['siteusername'];
?>
