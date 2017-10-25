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
	foreach($result['id','email'] as $rows):?>
            <td> <?php echo $rows['id']; ?></td>
            <td> <?php echo $rows['email']; ?></td>
	} catch(PDOException $e) {
    	echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
	?>
        </tbody>
        </table>
    </body>
</html>
		
	
   
