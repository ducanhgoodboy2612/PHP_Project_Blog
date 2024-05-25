<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

// Kiểm tra xem session 'username' có tồn tại không
if (!isset($_SESSION['username'])) {
    // Nếu không tồn tại, chuyển hướng sang trang đăng nhập
    header("Location: login?error=Vui lòng đăng nhập");
    exit();
}

$conn->close();
?>
