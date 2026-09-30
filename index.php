<?php

include "config.php";
$query = mysqli_query($connection, "SELECT * FROM users");
// The above intelisense error for connection variable is illogocal. It's due to glitch in the vs code. //

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="container">
        <h1>Users List</h1>
        <a href="add.php">Add User</a>

        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

            <?php
            $no = 1;
            while ($user = mysqli_fetch_assoc($query)) : ?>

                <tr>
                    <!-- This is the echo method for PHP -->
                    <td><?= $no++ ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td><?= $user['address'] ?></td>
                    <td>
                        <!-- This is also the echo method to add id in tags via PHP -->
                        <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                        <a href="action.php?id=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>