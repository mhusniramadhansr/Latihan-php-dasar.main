<!-- file latihan10.php --> 
<html> 
<head>Latihan 10</head> 
<body> 

<?php
$cuaca = "hujan";
if ($cuaca == "mendung"){
	echo "Bawa payung!" . "<br>";
}else if($cuaca == "hujan"){
	echo "Tunggu reda!" . "<br>"; //ini akan dijalankan
}else{
	echo "Tidak usah bawa payung!" . "<br>";
}
?>

</body> 
</html>
