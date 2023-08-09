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
        echo $Deger . "<br/>";

        $Islem  =   htmlspecialchars($Deger);
        echo $Islem . "<br/><br/>";

        $IslemIki  =   htmlspecialchars($Deger, ENT_COMPAT);
        echo $IslemIki . "<br/><br/>";

        $IslemuC  =   htmlspecialchars($Deger, ENT_QUOTES); //TEK TIRNAK (') işaretlerini de dönüşüme sokar.
        echo $IslemuC . "<br/><br/>";

        $IslemDort  =   htmlspecialchars($Deger, ENT_NOQUOTES); //tek tırnak ve çift tırnaklar hariç dönüşüm yapar.
        echo $IslemDort . "<br/><br/>";


    ?>
</body>
</html>