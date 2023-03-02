<!-- file latihan20.php -->
<html>
<head>
	<title>Latihan 20</title>
</head>
<body>

<?php
$listNama = array("Ikhlash", "Husni", "Muslim");

echo "<h2>Daftar Nama</h2>" . "<br>";

foreach($listNama as $nama){
	echo "-" . $nama . "<br>";
}
?>

</body>
</html>
