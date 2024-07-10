<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>

<body>
    <h2>User Management</h2>

    <!-- Form for adding new user -->
    <form action="create.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Add User</button>
    </form>

    <hr>

    <!-- List existing users -->
    <h3>Existing Users:</h3>
    <ul>
        <?php include 'read.php'; ?>
    </ul>
</body>

</html>