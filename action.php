<?php

include "config.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($connection, "INSERT INTO users (name, email, phone, address)
        VALUES('$name', '$email', '$phone', '$address')");

    header("Location: index.php");
    exit;
};


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($connection, "UPDATE users 
                            SET name='$name', email='$email', phone='$phone', address='$address'    WHERE id=$id");

    header("Location: index.php");
    exit;
};


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($connection, "DELETE FROM users WHERE id=$id");

    header("Location: index.php");
    exit;
};
// Finally we close the delete operation redirecting the file to the index page and stopping the script with exit function. //