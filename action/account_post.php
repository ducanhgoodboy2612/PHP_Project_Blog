<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
include "db.php";

// Đăng xuất----------------------------------------------------------------------------------------------------
if (isset($_GET['logout'])) {
    unset($_SESSION['username']); // Xoá session 'user'
    unset($_SESSION['id']); 
    header("Location: ../login");
    exit();
}

// Đăng nhập-----------------------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'login') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        $hashedPassword = md5($password);
        // Thực hiện truy vấn để kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM `user` WHERE username='$username' AND `password`='$hashedPassword'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($row['username'] === $username) {
                if($row['ban'] === '0'){
                    // Lưu thông tin người dùng vào session
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    header("Location: ../index");
                    exit();
                }else{
                    header("Location: ../login?error=Tài khoản của bạn đã bị khoá do vi phạm chính sách");
                    exit();
                }
            } else {
                header("Location: ../login?error=Tài khoản hoặc mật khẩu không đúng!");
                exit();
            }
        } else {
            header("Location: ../login?error=Tên đăng nhập hoặc mật khẩu không đúng!");
            exit();
        }
    }
}

// Đăng ký---------------------------------------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'signup') {
    // Kiểm tra xem các trường dữ liệu có tồn tại không
    if (isset($_POST['username'], $_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'])) {
        // Lấy dữ liệu từ form và áp dụng hàm validate
        $username = validate($_POST['username']);
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $confirmPassword = validate($_POST['confirmPassword']);

        // Kiểm tra xác nhận mật khẩu
        if ($password === $confirmPassword) {
            // Sử dụng câu lệnh SQL parametrized để thêm người dùng mới
            $sql = "INSERT INTO user (username, `name`, email, `password`, create_at) VALUES (?, ?, ?, ?, NOW())";

            // Chuẩn bị câu lệnh SQL
            $stmt = $conn->prepare($sql);

            // Kiểm tra xem câu lệnh đã được chuẩn bị thành công chưa
            if ($stmt) {
                // Bind các giá trị vào câu lệnh SQL
                $hashedPassword = md5($password); // Bạn nên sử dụng các phương pháp bảo mật mạnh hơn cho việc mã hóa mật khẩu
                $stmt->bind_param("ssss", $username, $name, $email, $hashedPassword);

                // Thực thi câu lệnh SQL
                if ($stmt->execute()) {
                    // Đăng ký thành công, chuyển hướng người dùng đến trang đăng nhập
                    header("Location: ../login?success=Tài khoản đã được tạo thành công. Vui lòng đăng nhập!");
                    exit();
                } else {
                    // Lỗi khi thực thi câu lệnh SQL
                    header("Location: ../signup?error=Có lỗi xảy ra khi đăng ký tài khoản. Vui lòng thử lại sau!");
                    exit();
                }
            } else {
                // Lỗi khi chuẩn bị câu lệnh SQL
                header("Location: ../signup?error=Có lỗi xảy ra khi đăng ký tài khoản. Vui lòng thử lại sau!");
                exit();
            }
        } else {
            // Xác nhận mật khẩu không khớp
            header("Location: ../signup?error=Xác nhận mật khẩu không chính xác!");
            exit();
        }
    } else {
        // Dữ liệu đầu vào không đủ
        header("Location: ../signup?error=Vui lòng điền vào tất cả các trường!");
        exit();
    }
}

// Hàm validate dữ liệu-------------------------------------------------------------------------------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Lấy ra thông tin của người dùng-----------------------------------------------------------------------------------
if(isset($_SESSION['username'])) {
    $sql = "SELECT * FROM user WHERE id = ?";
    
    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare($sql);
    
    // Biding giá trị cho tham số
    $stmt->bind_param("i", $_SESSION['id']);
    
    // Thực thi câu lệnh
    $stmt->execute();
    
    // Lấy kết quả
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Lặp qua các hàng kết quả
        while($row = $result->fetch_assoc()) {
            // Lấy toàn bộ thông tin người dùng từ kết quả truy vấn
            $user_info = $row;
        }
    } else {
        echo "Không có dữ liệu";
    }
    
    // Giải phóng tài nguyên statement
    $stmt->close();
}

$conn->close();
?>