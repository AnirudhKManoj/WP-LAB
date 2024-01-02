<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "anirudh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) 
        {
            header("Location: exp19.php?username=" . urlencode($username));
        } 
        else 
        {
            echo "Incorrect password";
        }
    } else 
    {
        echo "Incorrect username";
    }
}

$conn->close();
?>
