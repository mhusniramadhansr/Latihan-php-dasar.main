<!-- file latihan23.php -->
<html>
<head><title>Latihan 23</title></head>
<body>

<?php
$passwordasli = "b3laj@rpHP";
$passwordinput = "belajarPHP";

$cocok = strcmp($passwordasli, $passwordinput);

if ($cocok != 1){
	echo "Password anda salah!";
}else{
	echo "Password anda benar.";
}
?>

</body>
</html>
