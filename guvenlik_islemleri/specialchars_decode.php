<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
        $Deger  =   "<b>Kamer Alperen</b> <i>ÖZOKUTAN</i> & Balıkesir üni'YE 17.3\" Monitör";
        echo $Deger . "<br/><br/>";

        $Islem  =   htmlspecialchars($Deger, ENT_QUOTES); //her özel karakteri dönüşüme tabi tuttu.
        echo $Islem . "<br/><br/>";

        $Sonuc  =   htmlspecialchars_decode($Islem); //encode olan işlemi geri çevirmeye yani verilen string nasılsa ona geri döndürür. Varsayılan değer ENT_COMPAT'tır.
        echo $Sonuc . "<br/><br/>";

        $SonucIki  =   htmlspecialchars_decode($Islem, ENT_QUOTES); //ifade içinde bulunan tüm özel karakterleri encode eder. (tek tırnak, çift tırnak vs)
        echo $SonucIki . "<br/><br/>";





    ?>
</body>
</html>