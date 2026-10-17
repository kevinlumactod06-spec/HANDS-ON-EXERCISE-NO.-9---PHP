<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $contact_number = trim($_POST['contact_number']);

    if (empty($age) || empty($gender) || empty($email) ||
        empty($address) || empty($contact_number)) {

        die("Error: All fields are required.");
    }

    if (!is_numeric($age) || $age < 1 || $age > 120) {
        die("Error: Please enter a valid age.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Please enter a valid email address.");
    }

    if (!preg_match("/^09[0-9]{9}$/", $contact_number)) {
        die("Error: Contact number must be 11 digits and start with 09.");
    }

    $stmt = $conn->prepare(
        "UPDATE registered_person
         SET age = ?, gender = ?, email = ?, address = ?, contact_number = ?
         WHERE id = ?"
    );

    $stmt->bind_param(
        "issssi",
        $age,
        $gender,
        $email,
        $address,
        $contact_number,
        $id
    );

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>

temportasrdknja
