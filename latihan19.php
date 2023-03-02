<!-- file latihan19.php -->
<html>
<head>
	<title>Latihan 19</title>
</head>
<body>

<?php
$mahasiswa = array("Loka Dwiartara","Laki-
laki","24/01/1987","B",3.41,"Bot Technology");

list($nama,$jeniskelamin,$tanggallahir,$poin,$IP,$spesialisasi) = $mahasiswa;

echo $nama."<br>";
echo $jeniskelamin."<br>";
echo $tanggallahir."<br>";
echo $poin."<br>";
echo $IP."<br>";
echo $spesialisasi."<br>";
?>

</body>
</html>
