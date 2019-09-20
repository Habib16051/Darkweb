<?PHP 
if($_POST["name"])
{
   $a = $_POST["name"];
echo $a;
    $b = $_POST["emailid"];
echo $b;
    $c = $_POST["message"];
echo $c;
  

    
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "habib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contactdetails (name,emailid,message)
VALUES ('$a', '$b', '$c')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    }
else
{
   
    echo 'didnt recieve';
}
?>