$servername = "localhost:3306";
$username = "root";
$password = "12345";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

echo "Connected succesfully";