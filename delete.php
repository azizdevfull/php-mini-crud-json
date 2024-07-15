<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // JSON faylidan mavjud foydalanuvchilarni olamiz
    $users = json_decode(file_get_contents('users.json'), true);
    // Foydalanuvchini ID bo'yicha topib va massivdan olib tashlimiz
    foreach ($users as $key => $user) {
        if ($user['id'] === $id) {
            unset($users[$key]);
            break;
        }
    }
    // Yangilangan foydalanuvchilar roʻyxatini yana JSON fayliga saqlimiz
    file_put_contents('users.json', json_encode(array_values($users), JSON_PRETTY_PRINT));
    // index.php ga qaytish
    header('Location: index.php');
    exit;
}