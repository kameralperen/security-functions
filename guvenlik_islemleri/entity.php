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

        $Islem  = htmlentities($Deger); //tüm özel karakterleri dönüştürür. (Türkçe karakterler vs)
        echo $Islem . "<br/><br/>";

        $IslemIki  = htmlentities($Deger, ENT_QUOTES); //Tek tırnaklar da dahil olacaktır
        echo $IslemIki . "<br/><br/>";

        $Sonuc  =   html_entity_decode($Islem, ENT_QUOTES);
        echo $Sonuc;

   


    ?>
</body>
</html>