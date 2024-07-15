<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $users = json_decode(file_get_contents('users.json'), true);
        $user = null;
        // user-ni id orqali topish
        foreach ($users as $u) {
            if ($u['id'] === $id) {
                $user = $u;
                break;
            }
        }
        if ($user) {
            echo '<form action="update.php" method="POST">';
            echo '<input type="hidden" name="id" value="' . $user['id'] . '">';
            echo '<label for="username">Username:</label>';
            echo '<input type="text" id="username" name="username" value="' . $user['username'] . '" required>';
            echo '<button type="submit">Update User</button>';
            echo '</form>';
        } else {
            echo '<p>User not found.</p>';
        }
    } else {
        echo '<p>Invalid request.</p>';
    }
    ?>
    <a href="index.php">Back to User List</a>
</body>

</html>