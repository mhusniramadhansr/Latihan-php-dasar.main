<!-- file latihan21.php -->
<html>
<head>
	<title>Latihan 21</title>
</head>
<body>

<?php
$data = array(1,3,2,4,7,8,6,5,9,10);
sort($data);
for($x=0;$x<=10;$x++){
	echo current($data)."<br>";
	next($data);
}
?>

</body>
</html>
