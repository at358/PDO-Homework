<html>
    <head>
        <title>PDO Demo</title>
    </head>
    <body>
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
	<table = border="1">
        foreach ($accounts as account):
	<tr>
    	<td><?php echo $accounts['ID']; ?></td>
    	<td><?php echo $accounts['Email']; ?></td>
    	</tr>
	<?php endforeach; ?>

	<?php
	} catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
	$conn = null;
	}
	
	?>
        </tbody>
        </table>
    </body>
</html>
		
	
   
