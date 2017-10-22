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

		mysql_connect($dsn, $username, $password) or die("Could not connect: " . mysql_error()); 
		
		$result = mysql_query("SELECT id, email FROM accounts LIMIT 5");

		foreach($result['id','email'] as $rows):?>
        <tr class="item_row">
            <td> <?php echo $rows['id']; ?></td>
            <td> <?php echo $rows['email']; ?></td>
		?>
        </tr>
        </tbody>
        </table>
    </body>
</html>
		
	
   
