<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

// Xoá sản phẩm khỏi giỏ hàng-------------------------------------------------------------------------------------------------
if(isset($_POST['action']) && $_POST['action'] === 'remove') {
    // Lấy ID sản phẩm muốn xoá từ yêu cầu POST
    $sanpham_id = $_POST['sanpham_id'];

    // Kiểm tra xem session giỏ hàng có tồn tại không
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        // Duyệt qua các sản phẩm trong giỏ hàng
        foreach($_SESSION['cart'] as $key => $item) {
            // Nếu tìm thấy sản phẩm cần xoá, loại bỏ nó khỏi session
            if($item['id'] == $sanpham_id) {
                unset($_SESSION['cart'][$key]);
                header("Location: ../giohang?success=Code đã được xoá khỏi giỏ hàng");
                exit();
            }
        }
    }
}

$conn->close();
?>
