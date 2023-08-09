<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    //strip_tags() : Belirtilecek olan içerikte bulunan tüm html kodlarını temizleyerek, bulduğu değeri geriye döndürür.

    $Deger  =   "<b>Kamer Alperen</b> <i>ÖZOKUTAN</i> & <u> Napıyorsun burada</u> <script> alert('strip_tags() metodu gerçekten çokomelli. Sayfa kaynağından dönüşüme bakabilirsin')</script>";
    echo $Deger . "<br/><br/>";

    $Islem  =   strip_tags($Deger);
    echo $Islem . "<br/><br/>";

    $IslemIki  =   strip_tags($Deger, "<b>"); //kalmasını istediğimiz tagları, 2. parametrede yan yana yazarak kalmasını sağlayabiliyoruz.
    echo $Islem . "<br/><br/>";



    ?>
</body>
</html>