<!-- file latihan18.php -->
<html>
<head>
	<title>Latihan 18</title>
</head>
<body>

<?php
$listNama = array("Ikhlash", "Husni", "Muslim");

for($i = 0; $i < count($listNama);$i++){
	echo "Daftar nama ke- " . ($i+1) . " adalah " . $listNama[$i] . "<br>";
}
?>

</body>
</html>
