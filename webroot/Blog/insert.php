
$fname = $_POST["Hamza"];
$sname = $_POST["Polani"];
$email = $_POST["mhpolanto@gmail.com"];
$pass1 = $_POST["pass1"];
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
$sql = "INSERT INTO USERS (firstName, lastName, email, password) VALUES ('$fname',
'$sname', '$email', '$pass1')";
  
if ($conn->query($sql) === TRUE) {
    echo "<h6>Registration Successful</h6>
    <p><a href='exercise1.html'>Home</a></p>
    ";
    echo("HAHA");
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}  
}
 