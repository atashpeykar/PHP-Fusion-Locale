<?php

/**
* Turkish Language Fileset
* Terc�me: Arda K�l��da�� (SoulSmasher)
* Email: phpfusionturkiye@gmail.com
* Web: http://www.phpfusionturkiye.com
*/

// Locale Settings
setlocale(LC_TIME, "tr_TR"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-9";
$locale['xml_lang'] = "tr";
$locale['tinymce'] = "tr";
$locale['phpmailer'] = "tr";

// Full & Short Months
$locale['months'] = "&nbsp|Ocak|�ubat|Mart|Nisan|May�s|Haziran|Temmuz|A�ustos|Eyl�l|Ekim|Kas�m|Aral�k";
$locale['shortmonths'] = "&nbsp|Ock|�bt|Mar|Nis|May|Haz|Tem|A�us|Eyl|Eki|Kas|Arlk";

// Standard User Levels
$locale['user0'] = "Genel";
$locale['user1'] = "�ye";
$locale['user2'] = "Y�netici";
$locale['user3'] = "S�per Y�netici";
$locale['user_na'] = "YOK";
$locale['user_anonymous'] = "Anonim �ye";
// Standard User Status
$locale['status0'] = "Aktif";
$locale['status1'] = "Engellenmi�";
$locale['status2'] = "�naktif Edilmi�";
$locale['status3'] = "Ge�ici banlanm��";
$locale['status4'] = "G�venlik Ban� Uygulanm��";
$locale['status5'] = "�ptal Edilmi�";
$locale['status6'] = "Anonim";
$locale['status7'] = "Deaktif";
$locale['status8'] = "�naktif";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderat�r";
// Navigation
$locale['global_001'] = "Ana Men�";
$locale['global_002'] = "Kay�tl� Link Yok\n";
// Users Online
$locale['global_010'] = "�evrimi�i Kullan�c�lar";
$locale['global_011'] = "�evrimi�i Ziyaret�iler";
$locale['global_012'] = "�evrimi�i �yeler";
$locale['global_013'] = "�evrimi�i �ye Yok";
$locale['global_014'] = "Toplam �ye Say�s�";
$locale['global_015'] = "Aktif Edilmemi� �ye Say�s�";
$locale['global_016'] = "En Yeni �ye";
// Forum Side panel
$locale['global_020'] = "Forum Ba�l�klar�";
$locale['global_021'] = "En Yeni Forum Ba�l�klar�";
$locale['global_022'] = "En Fazla �lgilenilen Ba�l�klar";
$locale['global_023'] = "Hen�z Ba�l�k Olu�turulmam��.";
// Comments Side panel
$locale['global_025'] = "Son Yorumlar";
$locale['global_026'] = "Hi� yorum girilmemi�";
// Articles Side panel
$locale['global_030'] = "En Son Makaleler";
$locale['global_031'] = "Makale Bulunamad�";
// Downloads Side panel
$locale['global_032'] = "Son Eklenen Dosyalar";
$locale['global_033'] = "Hi� Dosya Bulunamad�";
// Welcome panel
$locale['global_035'] = "Ho� Geldiniz";
// Latest Active Forum Threads panel
$locale['global_040'] = "En Son Aktif Forum Ba�l�klar�";
$locale['global_041'] = "Yeni Ba�l�klar�m";
$locale['global_042'] = "Yeni Forum Mesajlar�m";
$locale['global_043'] = "Yeni Mesajlar";
$locale['global_044'] = "Ba�l�k";
$locale['global_045'] = "G�sterim";
$locale['global_046'] = "Cevaplar";
$locale['global_047'] = "En Son Mesaj";
$locale['global_048'] = "Forum";
$locale['global_049'] = "G�nderen";
$locale['global_050'] = "Yazar";
$locale['global_051'] = "Anket";
$locale['global_052'] = "Ta��nd�";
$locale['global_053'] = "Hi� forum ba�l��� olu�turmam��s�n�z.";
$locale['global_054'] = "Foruma hi� mesaj g�ndermemi�siniz.";
$locale['global_055'] = "En son giri�inizden beri %u yeni mesaj, %u farkl� ba�l�k i�erisinde bulunmakta.";
$locale['global_056'] = "Takip Etti�im Ba�l�klar";
$locale['global_057'] = "Se�enekler";
$locale['global_058'] = "Dur";
$locale['global_059'] = "Hi�bir ba�l��� takip etmemektesiniz.";
$locale['global_060'] = "Ba�l��� takip etmeyi durdurmak istedi�inizden emin misiniz?";
// News & Articles
$locale['global_070'] = "Yazar ";
$locale['global_071'] = "- ";
$locale['global_072'] = "Devam�";
$locale['global_073'] = " Yorum";
$locale['global_073b'] = " Yorum";
$locale['global_074'] = " Okunma";
$locale['global_075'] = "Yazd�r";
$locale['global_076'] = "D�zenle";
$locale['global_077'] = "Haberler";
$locale['global_078'] = "Hen�z Hi� Haber G�nderilmemi�.";
$locale['global_079'] = "Kategori: ";
$locale['global_080'] = "Kategorisiz";
// Page Navigation
$locale['global_090'] = "�nceki";
$locale['global_091'] = "Sonraki";
$locale['global_092'] = "Sayfa ";
$locale['global_093'] = " - ";
// Guest User Menu
$locale['global_100'] = "�ye Giri�i";
$locale['global_101'] = "Kullan�c� Ad�";
$locale['global_102'] = "Parola";
$locale['global_103'] = "Beni Hat�rla";
$locale['global_104'] = "Giri�";
$locale['global_105'] = "Hen�z �ye De�il Misiniz?<br /><a href='".BASEDIR."register.php' class='side'>Buraya T�klayarak</a> �ye Olabilirsiniz.";
$locale['global_106'] = "Parolan�z� M� Unuttunuz?<br /><a href='".BASEDIR."lostpassword.php' class='side'>Buraya T�klay�n</a>";
$locale['global_107'] = "Kaydol";
$locale['global_108'] = "Kay�p Parola";
// Member User Menu
$locale['global_120'] = "Profil D�zenle";
$locale['global_121'] = "�zel Mesajlar";
$locale['global_122'] = "�ye Listesi";
$locale['global_123'] = "Y�netici Paneli";
$locale['global_124'] = "��k��";
$locale['global_125'] = "%u yeni �zel ";
$locale['global_126'] = "mesaj�n�z var";
$locale['global_127'] = "mesaj�n�z var";
$locale['global_128'] = "�neri";
$locale['global_129'] = "�neri";
// Poll
$locale['global_130'] = "Anket";
$locale['global_131'] = "Oy Ver";
$locale['global_132'] = "Oy vermek i�in �ye giri�i yapm�� olman�z gerekmektedir.";
$locale['global_133'] = "Oy";
$locale['global_134'] = "Oy";
$locale['global_135'] = "Oy: ";
$locale['global_136'] = "Ba�lama Tarihi: ";
$locale['global_137'] = "Biti� Tarihi: ";
$locale['global_138'] = "Anket Ar�ivi";
$locale['global_139'] = "Listeden g�sterilecek bir anket se�in:";
$locale['global_140'] = "G�r�nt�le";
$locale['global_141'] = "Anketi G�r�nt�le";
$locale['global_142'] = "Tan�mlanm�� Anket Bulunamad�.";

// Captcha
$locale['global_150'] = "Do�rulama Kodu:";
$locale['global_151'] = "Do�rulama Kodunu Girin:";

// Footer Counter
$locale['global_170'] = "Tekil Tiyaret�i";
$locale['global_171'] = "Tekil Ziyaret�i";
$locale['global_172'] = "Sayfa olu�turulma s�resi: %s saniye";
$locale['global_173'] = "Sorgu";
// Admin Navigation
$locale['global_180'] = "Y�netici Paneli";
$locale['global_181'] = "Siteye Geri D�n";
$locale['global_182'] = "<strong>Uyar�</strong>: Y�netici �ifresi hatal� veya girilmedi.";
// Miscellaneous
$locale['global_190'] = "Bak�m Modu Aktif";
$locale['global_191'] = "IP adresin kara listede.";
$locale['global_192'] = "Cookie s�reniz dolmu� durumda, bu nedenle siteden ��kt�n�z, l�tfen yeniden giri� yap�n."; //$locale['global_192'] = "��k�� Yapan �ye: ";
$locale['global_193'] = "Cookie olu�turulamad�. L�tfen taray�c�n�zda cookielere izin verildi�inden emin olun."; //$locale['global_193'] = "Giri� Yapan �ye: ";
$locale['global_194'] = "�yeli�iniz Ask�ya Al�nm��t�r (Siteden Banland�n�z).";
$locale['global_195'] = "�yeli�iniz Hen�z Aktif Edilmedi.";
$locale['global_196'] = "Hatal� Kullan�c� Ad� Veya �ifre.";
$locale['global_197'] = "Ana Sayfaya Y�nlendiriliyorsunuz, L�tfen Bekleyin...<br /><br />
[ <a href='index.php'>E�er beklemek istemiyorsan�z buraya t�klay�n</a> ]";
$locale['global_198'] = "<strong>Dikkat:</strong> setup.php dosyas� bulundu, l�tfen hemen silin.";
$locale['global_199'] = "<strong>Dikkat:</strong> admin parolas� hen�z olu�turulmam��, <a href='".BASEDIR."edit_profile.php'>Profil D�zenle</a>ye t�klayarak bir tane olu�turun.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Arama";
$locale['global_203'] = $locale['global_200']."S.S.S";
$locale['global_204'] = $locale['global_200']."Forum";
//Themes
$locale['global_210'] = "��eri�e Git";
// No themes found
$locale['global_300'] = "tema bulunamad�";
$locale['global_301'] = "�zg�n�z, sayfay� �imdilik g�r�nt�leyemiyoruz. Baz� sorunlardan dolay� sitemizde tema bulunamad�. E�er site y�neticisi iseniz FTP y�neticisi aray�z�n�z ile <em>themes/</em> klas�r� alt�na <em>PHP-Fusion v7</em> i�in tasarlanm�� bir tema ekleyin. Temay� y�kledikten sonra <em>Ana Ayarlar</em> b�l�m�nden teman�n <em>themes/</em> d�zg�n y�klendi�ini kontrol edin. E�er y�kleme ba�ar� ile ger�ekle�mi�se - teman�n <em>Ana Ayarlar</em> b�l�m�ndeki tema ad� ile birebir �rt��t���nden emin olun (b�y�k k���k harflere linux temelli sunucularda �zellikle dikkat edin).<br /><br />E�er bu sitenin d�zenli kullan�c�lar�ndansan�z, l�tfen site y�neticisine ".hide_email($settings['siteemail'])." e-mail adresi ile ula��p hatay� bildirin.";
$locale['global_302'] = "Ana Ayarlarda Se�ilen Tema Bulunmamakta veya Dosyalar� Eksik!";
// JavaScript Not Enabled
$locale['global_303'] = "Ah, hay�r, <strong>JavaScript</strong> nerede?<br />�nternet taray�c�n�zda JavaScript aktif edilmemi�, ya da JavaScript desteklemiyor. L�tfen sitemizi d�zg�n g�r�nt�leyebilmek i�in internet taray�c�n�zda <strong>JavaScript</strong>i etkinle�tirin,<br /> ya da internet taray�c�n�z� JavaScript destekleyen bir versiyona <strong>g�neclleyin</strong>; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Taray�c�s�'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ya da <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a>'�n 6 dan sonraki g�ncel bir s�r�m�n� edinin.";

// User Management
// Member status
$locale['global_400'] = "ask�ya al�nm�� (ge�ici banlanm��)";
$locale['global_401'] = "banlanm��";
$locale['global_402'] = "inaktif edilmi�";
$locale['global_403'] = "hesap durdurulmu�";
$locale['global_404'] = "hesap anonim hale d�n��t�r�lm��";
$locale['global_405'] = "anonim �ye";
$locale['global_406'] = "Bu hesap �u sebepten dolay� banlanm��t�r:";
$locale['global_407'] = "Bu hesap �u tarihe kadar ask�ya al�nm��t�r: ";
$locale['global_408'] = ", sebebi:";
$locale['global_409'] = "Bu hesap g�venlik gerek�esi ile banlanm��t�r.";
$locale['global_410'] = "Bunun sebebi: ";
$locale['global_411'] = "Bu hesap iptal edilmi�tir.";
$locale['global_412'] = "Bu hesap muhtemelen inaktiflikten dolay� anonim hale d�n��t�r�lm��.";
// Banning due to flooding
$locale['global_440'] = "Flood (arka arkaya mesaj) Kontrol Sistemi Taraf�ndan Otomatik Banlanma.";
$locale['global_441'] = $settings['sitename']." �zerindeki �yeli�iniz banland�";
$locale['global_442'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresinde �yeli�iniz arka arkaya pek �ok i�eri�in IP adresiniz olan ".USER_IP." h�zl�ca girildi�ini fark etti, ve de �yeli�iniz banlad�. Bu koruman�n sebebi sitemize botlar�n spam mesaj g�ndermelerini engellemektir.\n
E�er g�venlik sistemindeki olas� bir hatan�n sizi yanl��l�kla engelledi�ini d���n�yorsan�z l�tfen ".$settings['siteemail']." elektronik posta adresi arac�l��� ile site y�neticileri ile irtibata ge�in.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "�yelik ask�n�z sona erdi (ge�ici ban s�reniz bitti)";
$locale['global_451'] = $settings['sitename']." �zerindeki ge�ici ban�n�z kald�r�lm��t�r";
$locale['global_452'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." �zerindeki �yelik ask�n�z sona ermi�, ge�ici ban�n�z kald�r�lm��t�r. Sitemize giri� bilgileriniz a�a��dad�r:\n
Kullan�z� Ad�: USER_NAME
Parola: G�venlik sebebi ile gizlenmi�tir\n
E�er parolan�z� unuttuysan�z �u linke t�klayarak s�f�rlayabilirsiniz: LOST_PASSWORD\n\n
Sayg�lar�m�zla,\n
".$settings['siteusername'];
$locale['global_453'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." �zerindeki �yelik ask�n�z sona ermi�tir.\n\n
Sayg�lar�m�zla,\n
".$settings['siteusername'];
$locale['global_454'] = $settings['sitename']." �zerindeki hesab�n�z yeniden aktifle�tirilmi�tir";
$locale['global_455'] = "Merhaba USER_NAME,\n
".$settings['siteurl']." adresi �zerinden sitemize yapt���n�z son giri� �zerine hesab�n�z yeniden aktif konuma getirilmi�, ve de inaktif ibresi kald�r�lm��t�r.\n\n
Sayg�lar�m�zla,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Bo�";
$locale['global_461'] = "Bit";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "%s sayfas�na y�nlendiriliyorsunuz, l�tfen bekleyin. E�er y�nlenme ger�ekle�mezse buraya t�klay�n.";

// Captcha Locales
$locale['global_600'] = "Do�rulama Kodu";
$locale['recaptcha'] = "tr";

//Miscellaneous
$locale['global_900'] = "Sekizlik (HEX) veri onluk (DEC) veriye d�n��t�r�lemedi";
$locale['global_901'] = "Sat�r(lar)";
?>