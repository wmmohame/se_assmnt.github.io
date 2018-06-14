<!DOCTYPE html>
<html>
    <head>
        <title>Database</title>
		<style>
			table{
				border-collapse: collapse;
				width: 100%;
				color: ##3498DB;
				font-family: monospace;
				font-size: 25px;
				text-align: left;
			}
			th{
				background-color: #3498DB;
				color:whitee
			}
			tr:nth-child(even).{background-color: ##D6EAF8}
		</style>
    </head>
<body>    
    <table>
    
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>AddressOne</th>
            <th>AddressTwo</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Country</th>
            <th>Date/Time</th>
        </tr>
<?php
    
$servername = "Localhost";
$username = "1106603";
$password = "bigwees52";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '1106603');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    
    $sql = "SELECT firstName,lastName,address1,adress2,city,state,zip,country,dateAdded from Users";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo "<tr><td>" . $row["firstName"] . "</td><td>" . 
			$row["lastName"] . "</td><td>" . $row["address1"] . 
			"</td><td>" . $row["adress2"] . "</td><td>" . 
			$row["city"] . "</td><td>" . $row["state"] . "</td><td>" . 
			$row["zip"] . "</td><td>" . $row["country"] . "</td><td>" . 
			$row["dateAdded"] . "</td></tr>";
        }
        echo "<table>";
    }
    else{
        echo "0 result";
    }
    
    $conn -> close();
?>
    </table> 

</body>
</html>