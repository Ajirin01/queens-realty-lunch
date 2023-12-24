<?php
session_start();
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password']) && $user['status'] === 'active' && $user['role'] === 'admin') {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            echo "Login successful! Welcome, Admin!";
            header('location: ../admin');
        } else {
            echo "Invalid credentials or account not active.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
