<?php

include "config.php";
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM users WHERE id=$id");
// The above intelisense error for connection variable is illogocal. It's due to glitch in the vs code. //
$user = mysqli_fetch_assoc($query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit User</h1>
            <form action="action.php?id=<?= $id ?>" method="POST">
                <input type="text" name="name" placeholder="Name" value="<?= $user['name'] ?>" required>
                <input type="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" required>
                <input type="text" name="phone" placeholder="Phone" value="<?= $user['phone'] ?>" required>
                <textarea name="address" placeholder="Address" required><?= $user['address'] ?></textarea>
                <div class="btn-box">
                    <button class="btn" type="submit" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>