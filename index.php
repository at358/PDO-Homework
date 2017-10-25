<html>
    <head>
        <title>PDO Demo</title>
    </head>
    <body>
        <table = border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
        <table>
	<?php
			$username = 'at358';
			$password = 'Krishna15';
			$hostname = 'sql1.njit.edu';
			$dsn = "mysql:host=$hostname;dbname=$username";

	try {
	$conn = new PDO($dsn, $username, $password);
    	echo "Connected successfully<br>";
	$query = 'SELECT id, email FROM accountsWHERE id = :id;'
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $accounts);
	$statement->execute();
	$accounts = $statement->fetchAll();
	$statement->closeCursor();
	?>
	foreach ($accounts as account):
	<tr>
    	<td><?php echo $accounts['ID']; ?></td>
    	<td><?php echo $accounts['Email']; ?></td>
    	<td><?php echo $product['listPrice']; ?></td>
	</tr>
	<?php endforeach; ?>

	<?php
	} catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	?>
        </tbody>
        </table>
    </body>
</html>
		
	
   
