<?php
$locale['email_create_subject'] = "Sitemizde �yeli�iniz olu�turuldu";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." �zerindeki hesab�n�z olu�turuldu.\n
Sitemize a�a��daki kullan�c� bilgileri ile giri� yapabilirsiniz:\n
kullan�c� ad�: [USER_NAME]\n
parola: [PASSWORD]\n\n
Sayg�lar�m�zla,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Sitemizde �yeli�iniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n
".$settings['sitename']." adl� sitemizde �yeli�iniz aktif edildi.\n
Mevcut kullan�c� ad�n�z ve �ifrenizle sitemize yeniden giri� yapabilirsiniz.\n\n
Sayg�lar�m�zla,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Sitemizde hesab�n�z� yeniden aktifle�tirmeniz gerekmekte ";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresine ".$settings['deactivation_period']." g�nd�r girmedi�inizi fark ettik.
Hesab�n�z� yeniden aktifle�tirmek i�in a�a��daki linke t�klayabilirsiniz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Unutmay�n ki sadece �ye durumunuz inaktif durumda. T�m �ye bilgileriniz ve sitemize girmi� oldu�unuz t�m i�erikler halen mevcut ve de ayn� durumda bulunmakta.action=[RESPONSE]pass=[PASS]\n\n
Sayg�lar�m�zla,\b
".$settings['siteusername'];

$locale['email_ban_subject'] = "Sitemizden banland�n�z";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." �zerindeki hesab�n�z ".$userdata['user_name']." taraf�ndan a�a��daki sebepten dolay� banland�:\n
[REASON].\n
E�er bu konu ile ilgili detayl� bilgiye ihtiya� duyuyorsan�z l�tfen ".$settings['siteemail']." adresi �zerinden site y�neticileri ile irtibata ge�in.\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Sitemizden banland�n�z";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." �zerindeki hesab�n�z ".$userdata['user_name']." taraf�ndan sizin ya da sizin hesab�n�z �zerinden yap�lan sitemiz i�in g�venlik riski te�kil edecek bir davran��tan dolay� banlanm��t�r.\n
E�er bu konu ile ilgili detayl� bilgiye ihtiya� duyuyorsan�z l�tfen ".$settings['siteemail']." adresi �zerinden site y�neticileri ile irtibata ge�in.\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Sitemizdeki hesab�n�z ask�ya al�nd�";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." �zerindeki hesab�n�z ".$userdata['user_name']." taraf�ndan [DATE] tarihine kadar (site zaman�) a�a��daki gerek�e ile ask�ya al�nm��t�r:\n
[REASON].\n
E�er bu konu ile ilgili detayl� bilgiye ihtiya� duyuyorsan�z l�tfen ".$settings['siteemail']." adresi �zerinden site y�neticileri ile irtibata ge�in.\n
".$settings['siteusername'];
?>