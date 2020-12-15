<?php
error_reporting(E_ALL);

ini_set('display_errors', '1');

include('session.php');

$servername = "localhost";
$username = "root";
$password = "12112017";
$db = "database";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connexió errònia ".$conn->connect_error);
}

$sql = "select * from member where mem_id='$loggedin_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();


$username = $row["username"];
$password = $row["password"];
$fname = $row["fname"];
$lname = $row["lname"];
$address = $row["address"];
    
echo

"<html>
<body>

<form action='phpUpdateFormScript.php' method='post'>
Soci ID: $loggedin_id<br>
<input type='hidden' name='mem_id' value='$loggedin_id'>
DNI: <input type='text' name='username' value='$username'><br>
Contrasenya: <input type='text' name='password' value='$password'><br>
Nom: <input type='text' name='fname' value='$fname'><br>
Cognom: <input type='text' name='lname' value='$lname'><br>
Email: <input type='text' name='address' value='$address'><br>

<input type ='submit'>
</form>

</body>
</html>";

} 
$conn->close();

?>