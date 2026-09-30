<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Add User</h1>
            <form action="action.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <div class="btn-box">
                    <button class="btn" type="submit" name="add">Submit</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>