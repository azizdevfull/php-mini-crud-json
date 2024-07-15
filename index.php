<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Crud</title>
</head>
<body>
    <h2>User Crud</h2>
    <form action="create.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Add User</button>
    </form>
    <hr>
    <h3>Users:</h3>
    <ul>
        <?php include 'read.php'; ?>
    </ul>
</body>
</html>