<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

// Tìm kiếm và phân trang
if(isset($_GET['search'])) {
    // Lấy từ khóa tìm kiếm từ URL
    $search = $_GET['search'];

    // Thực hiện tìm kiếm trong cơ sở dữ liệu
    $sql = "SELECT COUNT(*) AS total FROM sanpham WHERE `name` LIKE '%$search%'";
    $resultCount = $conn->query($sql);
    $rowCount = $resultCount->fetch_assoc();
    $tongSanPham = $rowCount['total'];

    // Tính tổng số trang
    $soSanPhamTrenTrang = 12;
    $tongTrang = ceil($tongSanPham / $soSanPhamTrenTrang);

    // Xác định trang hiện tại
    $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;
    $trangHienTai = max(1, min($trangHienTai, $tongTrang));

    // Tính chỉ số bắt đầu của sản phẩm trên trang hiện tại
    $batDau = ($trangHienTai - 1) * $soSanPhamTrenTrang;

    // Truy vấn cơ sở dữ liệu để lấy kết quả tìm kiếm và phân trang
    $sqlSearch = "SELECT s.*, d.name AS TenLoai, d.id AS MaLoai 
                  FROM sanpham s INNER JOIN danhmuc d ON s.danhmuc_id = d.id 
                  WHERE s.name LIKE '%$search%' 
                  ORDER BY create_at DESC 
                  LIMIT $batDau, $soSanPhamTrenTrang";
    $resultSearch = $conn->query($sqlSearch);

    $sanphams = array(); // Khởi tạo một mảng để lưu trữ danh sách sản phẩm tìm kiếm

    if ($resultSearch->num_rows > 0) {
        while($row = $resultSearch->fetch_assoc()) {
            $sanphams[] = $row; // Thêm từng dòng kết quả vào mảng sản phẩm tìm kiếm
        }
    } else {
        echo "Không có code nào";
    }
}

// Thêm vào giỏ hàng------------------------------------------------------------------------------------------------------
if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'addtocart') {
    // Lấy ID sản phẩm từ yêu cầu
    $sanpham_id = $_REQUEST['sanpham_id'];
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $item) {
            if($item['id'] == $sanpham_id) {
                // Nếu sản phẩm đã có trong giỏ hàng, hiển thị thông báo lỗi và dừng lại
                header("Location: ../timkiem?search=$search&page=$currentPage&error=Code đã tồn tại trong giỏ hàng");
                exit();
            }
        }
    }

    // Câu truy vấn lấy sản phẩm theo id
    $sql = "SELECT id, `name`, photo, price FROM sanpham WHERE id = $sanpham_id";
    $result = $conn->query($sql);

    // Kiểm tra nếu có kết quả từ câu truy vấn
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Lấy thông tin sản phẩm từ kết quả truy vấn

        // Lưu thông tin sản phẩm vào session
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        // Thêm thông tin sản phẩm vào mảng trong session
        array_push($_SESSION['cart'], $row);

        // Chuyển hướng về trang tìm kiếm với cùng trang hiện tại
        header("Location: ../timkiem?search=$search&page=$currentPage&success=Thêm code vào giỏ hàng thành công");
        exit();
    }
}


$conn->close();
?>
