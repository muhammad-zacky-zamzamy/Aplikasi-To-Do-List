<?php
$sName = "localhost";  // Server name (usually "localhost" for local development)
$uName = "root";       // Database username
$pass = "";            // Database password (empty in this case)
$db_name = "to_do_list"; // Database name

try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);

    // Set PDO attributes for error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If the connection is successful, you might want to log or handle it differently
    // echo "connected!";
} catch (PDOException $e) {
    // If an exception occurs, print an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
