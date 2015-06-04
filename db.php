
<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
 
$dbh = new PDO('mysql:dbname=sakila;host=localhost','root','');
$stmt = dbh->query('select * from staff');
?>


<table border='1'>
<?php foreach ($stmt->fetchALL(PDO::FETCH_ASSOC) as $staff ): ?>









</body>
</html>