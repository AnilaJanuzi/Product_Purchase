<?php

include_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $product = $_POST['product'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $paymentMethod = $_POST['paymentMethod'];
    $card_name=$_POST['card_name'];
    $card_number=$_POST['card_number'];
   

    $sql = "INSERT INTO orders (firstname, lastname, product, email, address, country, state, zip, payment_method,card_name,card_number)
            VALUES ('$firstname', '$lastname', '$product', '$email', '$address', '$country', '$state', '$zip', '$paymentMethod','$card_name','$card_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Order was successfully purchased!";
        header("Location: buynowmodal.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
