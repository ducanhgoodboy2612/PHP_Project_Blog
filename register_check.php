<?php
session_start();
require ("action/home_post.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Nếu cần xử lý biến $_POST['agree_terms'], bạn có thể làm ở đây.
    echo $username;
    echo $password;

    $db = new home_controller();
    try {
        $result = $db->register($username, $password, $name, $email, $phoneNumber);
        if ($result) {
            $_SESSION['message'] = "Registration successful!";
        } else {
            echo "Login failed"; // Hoặc thông báo lỗi đăng nhập không thành công
        }
    } catch (Exception $e) {
        // Xử lý ngoại lệ
        header("Location: index.php?error=" . urlencode($e->getMessage()));
        exit;
    }
}
?>