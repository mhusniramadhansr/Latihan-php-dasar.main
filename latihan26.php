<!-- file latihan26.php -->
<html>
<head><title>Latihan 26</title></head>
<body>

<?php

//memfilter tag html
$situsspammer = "Silahkan <u>berkunjung</u> ke <a href=
'http://www.tokosandaljepit.com'> Toko Online Sandal Jepit 
<strong>Aneka Warna</strong></a>";
$filterlink = strip_tags($situsspammer, "<strong><u>");
echo $filterlink;
?>

</body>
</html>
