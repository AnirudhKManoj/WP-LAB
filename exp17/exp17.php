<html>
<head>
    <title>Display Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
    <p><a href="index.php">Go Back</a></p>
</body>
</html>
