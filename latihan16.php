<!-- file latihan16.php -->
<html>
<head>Latihan 16</head>
<body>

<?php

function luasPersegiPanjang($p, $l, $t){
	$luas = $p * $l * $t;
	return $luas;
}

$panjang = 6;
$lebar = 4;
$tinggi = 2;

echo "Total luas persegi panjang : " . luasPersegiPanjang($panjang, $lebar, $tinggi);

?>

</body>
</html>
