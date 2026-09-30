<?php

$connection = mysqli_connect("localhost", "root", "", "users_list");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};
