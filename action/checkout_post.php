<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

// Kiểm tra xem session 'cart' có tồn tại và có chứa ít nhất một sản phẩm không------------------------------------
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'checkout') {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sdt'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];

            // Lấy thông tin người dùng từ cơ sở dữ liệu để kiểm tra số dư tài khoản
            $userSql = "SELECT * FROM user WHERE id = ?";
            $stmtUser = $conn->prepare($userSql);
            $stmtUser->bind_param("i", $_SESSION['id']);
            $stmtUser->execute();
            $userResult = $stmtUser->get_result();

            if ($userResult->num_rows > 0) {
                $userRow = $userResult->fetch_assoc();
                $userBalance = $userRow['vnd'];

                // Tính tổng giá trị đơn hàng
                $totalPrice = 0;
                foreach($_SESSION['cart'] as $item) {
                    $totalPrice += $item['price'];
                }

                // Kiểm tra xem số dư tài khoản có đủ để thanh toán hay không
                if ($userBalance >= $totalPrice) {
                    // Thực hiện thanh toán và tạo đơn hàng
                    // Thêm đơn hàng vào cơ sở dữ liệu
                    $insertOrderSql = "INSERT INTO donhang (`name`, email, sdt, tongtien, user_id) VALUES (?, ?, ?, ?, ?)";
                    $stmt1 = $conn->prepare($insertOrderSql);
                    $stmt1->bind_param("sssii", $name, $email, $sdt, $totalPrice, $_SESSION['id']);
                    $stmt1->execute();
                    $orderId = $stmt1->insert_id;

                    // Thêm các chi tiết đơn hàng vào cơ sở dữ liệu
                    foreach($_SESSION['cart'] as $item) {
                        $sanphamId = $item['id'];
                        $price = $item['price'];

                        $insertOrderDetailSql = "INSERT INTO chitietdonhang (price, sanpham_id, donhang_id) VALUES (?, ?, ?)";
                        $stmt2 = $conn->prepare($insertOrderDetailSql);
                        $stmt2->bind_param("iii", $price, $sanphamId, $orderId);
                        $stmt2->execute();
                    }

                    // Cập nhật số dư tài khoản của người dùng
                    $newBalance = $userBalance - $totalPrice;
                    $updateBalanceSql = "UPDATE user SET vnd = ? WHERE id = ?";
                    $stmt3 = $conn->prepare($updateBalanceSql);
                    $stmt3->bind_param("ii", $newBalance, $_SESSION['id']);
                    $stmt3->execute();

                    // Xóa session 'cart' sau khi đã tạo đơn hàng thành công
                    unset($_SESSION['cart']);

                    header("Location: ../index?success=Cảm ơn bạn đã thanh toán");
                    exit();
                } else {
                    // Số dư tài khoản không đủ
                    header("Location: ../thanhtoan?error=Số dư tài khoản không đủ để thanh toán");
                    exit();
                }
            } else {
                echo "Không có dữ liệu người dùng";
            }
            // Giải phóng tài nguyên statement
            $stmtUser->close();
        } else {
            // Dữ liệu đầu vào không đủ
            header("Location: ../thanhtoan?error=Vui lòng điền vào tất cả các trường!");
            exit();
        }
    }
} else {
    header("Location: ../index?error=Bạn chưa có sản phẩm nào trong giỏ hàng");
    exit();
}

$conn->close();
?>
