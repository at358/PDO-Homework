		<?php
			$username = 'at358';
			$password = 'Krishna15';
			$hostname = 'sql1.njit.edu';
			$dsn = "mysql:host=$hostname;dbname=$username";

		try {
		    $conn = new PDO($dsn, $username, $password);
    		echo "Connected successfully<br>";
    		$conn = null;
    		$stmt->bindValue(':id', $id); 
    		$stmt = $conn->prepare("SELECT id, email FROM accounts LIMIT 5"); 
    		$stmt->execute();
    		$result = $stmt->fetchAll()); 
    		$stmt->closerCursor();
    		$count = $stmt->rowCount();
			echo "Results: $count<br>";
		catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
							   }
		
    	foreach ($accounts as $account) { ?>
		<table border="1">
    		<th>
        		<td>ID</td>
        		<td>Email</td>
    		</th>
    		<tr>
        		<td><?php echo $account['id']; ?></td>
        		<td><?php echo $account['email']; ?></td>
    		</tr>
		</table>
    			}
			}
		
		?>
   
