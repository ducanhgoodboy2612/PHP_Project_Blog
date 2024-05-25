<?php
require ("action/home_post.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $username;
    // Nếu cần xử lý biến $_POST['remember_me'], bạn có thể làm ở đây.

    $db = new home_controller();
    $result = $db->login($username, $password);
    if ($result) {
        echo "Login successful"; // Hoặc thực hiện các thao tác cần thiết
    } else {
        echo "Login failed"; // Hoặc thông báo lỗi đăng nhập không thành công
    }
    
    // Xử lý kết quả, chẳng hạn chuyển hướng hoặc hiển thị thông báo.
}
?>