<?php
#create table name users
#server-database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname)or die("Unable to Connect to $servername");
/*mysqli::__construct ([ string $host = ini_get("localhost") [, string $username = ini_get("root") [, string $passwd = ini_get("juhijuhi") [, string $dbname = "mydb" [, int $port = ini_get("1998") ]]]]] )*/
	//$id=1;
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$mno=$_POST["mno"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	
	$sql= "INSERT INTO cust values ('$fname','$lname',$mno,'$email','$gender')";
	$conn->query($sql);
    //echo "New record created successfully";
	//} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
	//}
	$sql1= "SELECT * FROM cust";
	$ans=$conn->query($sql1); ?>
<html>
	<head>
	<title>DemoDatabaseView</title>
	<link rel="icon" type="Image/png" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="page2.css">
</head>
	<body>
	<div>
		<table align="center">
			<tr>
				<th scope="col">fname</th>
				<th scope="col">lname</th>
				<th scope="col">mno</th>
				<th scope="col">email</th>
				<th scope="col">gender</th>
				
			</tr>
			 <?php
	If (mysqli_num_rows($ans) > 0) {
    while ($row = mysqli_fetch_array($ans, MYSQLI_ASSOC)) {
        ?>
        <tr>
		    <td><?php echo $row['fname']; ?></td> 
            <td><?php echo $row['lname']; ?></td> 
            <td><?php echo $row['email']; ?></td>
			<td><?php echo $row['mno']; ?></td>			
			<td><?php echo $row['gender']; ?></td>			
        </tr>
        <?php
    }
}
?>
		</table>
	</div>
</body>
</html>	
