
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
 
$dbh = new PDO('mysql:dbname=sakila;host=localhost','root','');
$stmt = $dbh->query('select * from staff');
?>


<table border='1'>
<?php foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $staff ): ?>

<tr>
<td><?php echo $staff['staff_id']; ?></td>
<td><?php echo $staff['first_name']; ?></td>
<td><?php echo $staff['last_name']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>


