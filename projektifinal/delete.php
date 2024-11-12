<?php

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "apple_storeproject";

    $connection = new mysqli($servername, $username, $password, $database);


    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    
    $sql = "DELETE FROM productss WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $productId);

  
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
} else {
    echo "No product ID provided.";
}
?>
