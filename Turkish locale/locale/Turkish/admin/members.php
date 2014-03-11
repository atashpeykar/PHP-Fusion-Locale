<?php
// Member Management Options
$locale['400'] = "�ye Y�netimi";
$locale['401'] = "�ye";
$locale['402'] = "Ekle";
$locale['403'] = "�ye Tipi";
$locale['404'] = "Se�enekler";
$locale['405'] = "G�r�nt�le";
$locale['406'] = "D�zenle";
$locale['407'] = "Aktif Et";
$locale['408'] = "Ban� Kald�r";
$locale['409'] = "Banla";
$locale['410'] = "Sil";
$locale['411'] = "%s Bulunamad�";
$locale['412'] = ". Aranan �lk Harf: ";
$locale['413'] = ". Aranan Kullan�c� Ad�: ";
$locale['414'] = "Hepsini G�ster";
$locale['415'] = "�ye Ara:";
$locale['416'] = "Ara";
$locale['417'] = "��lem Se�in";
$locale['418'] = "�ptal Et";
$locale['419'] = "Eski durumuna getir";
// Ban/Unban/Delete Member
$locale['420'] = "Siteden Banland�";
$locale['421'] = "Ban� Kald�r�ld�";
$locale['422'] = "�ye Silindi";
$locale['423'] = "Bu �yeyi silmek istedi�inizden emin misiniz?";
$locale['424'] = "�ye Aktif Edildi";
// Edit Member Details
$locale['430'] = "Kullan�c�y� D�zenle";
$locale['431'] = "Kullan�c� Bilgileri G�ncellendi";
$locale['432'] = "�ye Y�netimine Geri D�n";
$locale['433'] = "Site Y�netimine Geri D�n";
$locale['434'] = "Kullan�c� Bilgileri G�ncellenemedi:";
// Extra Edit Member Details form options
$locale['440'] = "De�i�iklikleri Kaydet";
// Update Profile Errors
$locale['450'] = "Site Sahibi olan ve �lk Admin Olarak tan�mlanan y�netici d�zenlenemez.";
$locale['451'] = "Bir �ye ismi ve e-mail adresi belirtmelisiniz..";
$locale['452'] = "�ye isminde ge�ersiz karakter var.";
$locale['453'] = "Bu kullan�c� ad� ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." daha �nce al�nm��.";
$locale['454'] = "Ge�ersiz e-mail adresi.";
$locale['455'] = "Bu e-mail adresi ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." daha �nce al�nm��.";
$locale['456'] = "�ifreler birbirini tutmuyor.";
$locale['457'] = "Ge�ersiz �ifre, T�rk�e Karakter Kullanmay�n�z.<br>
�ifreniz minimum 6 karakter uzunlu�unda olmal�d�r.";
$locale['458'] = "<strong>Dikkat:</strong> beklenmeyen bir script hatas� olu�tu.";
// View Member Profile
$locale['470'] = "�ye Profili: ";
$locale['472'] = "�statistik";
$locale['473'] = "Kullan�c� Gruplar�";
// Add Member Errors
$locale['480'] = "�ye Ekle";
$locale['481'] = "�ye Hesab� Olu�turuldu.";
$locale['482'] = "�ye Hesab� Olu�turulam�yor.";
// Suspension Log 
$locale['510s'] = "�u �yenin ge�ici banlanma ge�mi�i: ";
$locale['511s'] = "Ge�ici banlanma ge�mi�inde bu �ye i�in bir ge�mi� bulunamad�.";
$locale['512s'] = "�u �yenin �nceki ge�ici banlanmalar�: ";
$locale['513'] = "No."; // as in number
$locale['514'] = "Tarih";
$locale['515'] = "Sebep";
$locale['516'] = "Ge�ici banlanma y�netimi";
$locale['517'] = "Sistem Etkisi"; //system action
$locale['518'] = "�ye Profiline Geri D�n";
$locale['519'] = "Bu �yenin ge�ici banlanma durumu ";
$locale['520'] = "Ban Kalkma: ";
$locale['521'] = "IP: ";
$locale['522'] = "Hen�z eski haline d�n��t�r�lmemi�";
$locale['540'] = "Hata";
$locale['541'] = "Hata: Ge�ici banlama i�in bir sebep belirtmelisiniz!";
$locale['542'] = "Hata: G�venlik banlamas� i�in bir sebep belirtmelisiniz!";
// User Management Admin
$locale['550'] = "Ge�ici banlanan �ye: ";
$locale['551'] = "M�ddet (g�n):";
$locale['552'] = "Sebep:";
$locale['553'] = "Ge�ici banlanma";
$locale['554'] = "Ge�ici banlanma ge�mi�inde bu �ye i�in bir ge�mi� bulunamad�.";
$locale['555'] = "E�er bu �yenin banlanmas�na karar verdiyseniz 'Banla' tu�una bas�n";
$locale['556'] = "�u �yenin ge�ici ban�n� kald�r�n: ";
$locale['557'] = "Ge�ici ban� kald�r";
$locale['558'] = "�u �yenin ban�n� kald�r�n: ";
$locale['559'] = "Ban� kald�r ";
$locale['560'] = "�u �yenin g�venlik ban�n� kald�r�n: ";
$locale['561'] = "G�venlik ban�n� kald�r";
$locale['562'] = "�yeyi Banla: ";
$locale['563'] = "G�venlik Ban� uygula: ";
$locale['585a'] = "L�tfen banlad���n�z�n ya da ban� kald�rman�z�n sebebini girin ";

$locale['566'] = "Ban kald�r�ld�";
$locale['568'] = "G�venlik Ban� uyguland�";
$locale['569'] = "G�venlik Ban� kald�r�ld�";
$locale['572'] = "�ye ge�ici banland�";
$locale['573'] = "Ge�ici Ban kald�r�ld�";
$locale['574'] = "�ye inaktif edildi";
$locale['575'] = "�ye yeniden aktif edildi";
$locale['576'] = "Hesap iptal edildi";
$locale['577'] = "Hesap iptali kald�r�ld�";
$locale['578'] = "Hesap iptal edildi ve anonim hale d�n��t�r�ld�";
$locale['579'] = "Hesap anonim halden ba�ar� ile kald�r�ld�";
$locale['580'] = "Aktif olmayan �yeleri inaktif hale d�n��t�r";
$locale['581'] = "50 den fazla inaktif �yeniz var ve de deaktifle�tirme prosesini <strong>%d sefer</strong> �al��t�rman�z gerekmekte.";
$locale['582'] = "Yeniden aktifle�tir";
$locale['583'] = "Eski haline d�n��t�r";
$locale['584'] = "Yeni durumu se�in";
$locale['585'] = "Bu �ye ilk olarak g�venlik sebepleri nedeniyle banlanm��t�! Bu �yenin ban�n� kald�rmak istedi�inizden emin misiniz?";

$locale['590'] = "Ge�ici Banla";
$locale['591'] = "Ge�ici Ban� Kald�r";
$locale['592'] = "ge�ici banlad���n�z";
$locale['593'] = "ge�ici ban�n� kald�rd���n�z";
$locale['594'] = "L�tfen bu �yeyi neden ";
$locale['595'] = " i�in bir sebep belirtin: ";
$locale['596'] = "S�re:";

$locale['600'] = "G�venlik banlamas�";
$locale['601'] = "g�venlik banlamas�";
$locale['602'] = "Ban� kald�r";
$locale['603'] = "ban� kald�r�l�yor";
$locale['604'] = "Sebep:";
// Deactivation System
$locale['610'] = "<strong>%d �ye</strong> <strong>%d g�nd�r</strong> siteye girmedi, ve de bu y�zden inaktif olarak i�aretlenmi�tir. 
Bubu ger�ekle�tirerek bu �yelere <strong>%d g�n</strong>tan�m�� olacaks�n�z. Yoksa bu �yeler %s<br />
Bu �yeler forum mesaj�, yorum, resim gibi i�erikler eklemi� olabilirler,
ve de e�er bu �yeler kendilerine verilen s�re i�erisinde giri� yapmay�p otomatik olarak silinirse girdikleri girdiler de silinecektir.";
$locale['612'] = "�ye";
$locale['613'] = "�yeler";
$locale['614'] = "Deaktif Et";
$locale['615'] = "kal�c� olarak silinecek";
$locale['616'] = "Anonim hale d�n��t�r";
$locale['617'] = "Uyar�:";
$locale['618'] = "Veri kayb�n� �nmelek i�in dealtivasyon se�ene�ini anonim hale d�n��t�rmeye ayarlaman�z� �iddetle tavsiye ediyoruz!";
$locale['619'] = "Bunu buradan ger�ekle�tirebilirsiniz.";
$locale['620'] = "anonim hale d�n��t�r";
$locale['621'] = "�naktif �yelerin otomatik deaktivasyonu.";
?>