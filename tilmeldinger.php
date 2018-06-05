<?php
include("db_con.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
		<thead>
			<th>E-mail adresse</th>
			<th>Oprettelsesdato</th>
		</thead>
		<tbody>
<?php
	$henttilmeldinger = mysqli_query($con, "SELECT * FROM nyhedsbrev");
	while($tilmeldinger = mysqli_fetch_array($henttilmeldinger)){
		echo "<tr><td>{$tilmeldinger["email"]}</td><td>{$tilmeldinger["dato"]}</td></tr>";
	}
?>
		</tbody>
</table>
</body>
</html>