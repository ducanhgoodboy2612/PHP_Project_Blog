<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "db.php";

// Lấy ra toàn bộ danh mục sản phẩm----------------------------------------------------------------------------
$sql = "SELECT * FROM danhmuc";
$result = $conn->query($sql);

$danhmucs = array(); // Khởi tạo một mảng để lưu trữ danh sách danh mục

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $danhmucs[] = $row; // Thêm từng dòng kết quả vào mảng danh mục
    }
} else {
    echo "Không có dữ liệu";
}

// Lấy ra sản phẩm mới-----------------------------------------------------------------------------------------
// Số lượng sản phẩm trên mỗi trang
$soSanPhamTrenTrang = 12;

// Lấy tổng số lượng sản phẩm
$sqlCount = "SELECT COUNT(*) AS total FROM sanpham";
$resultCount = $conn->query($sqlCount);
$rowCount = $resultCount->fetch_assoc();
$tongSanPham = $rowCount['total'];

// Tính tổng số trang
$tongTrang = ceil($tongSanPham / $soSanPhamTrenTrang);

// Xác định trang hiện tại
$trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;

// Đảm bảo trang hiện tại không vượt quá tổng số trang
$trangHienTai = max(1, min($trangHienTai, $tongTrang));

// Tính chỉ số bắt đầu của sản phẩm trên trang hiện tại
$batDau = ($trangHienTai - 1) * $soSanPhamTrenTrang;

// Câu truy vấn lấy sản phẩm mới nhất và phân trang
$sql = "SELECT s.*, d.name AS TenLoai, d.id AS MaLoai 
        FROM sanpham s INNER JOIN danhmuc d ON s.danhmuc_id = d.id 
        ORDER BY create_at DESC
        LIMIT $batDau, $soSanPhamTrenTrang";
$result = $conn->query($sql);

$sanphammois = array(); // Khởi tạo một mảng để lưu trữ danh sách sản phẩm mới nhất

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sanphammois[] = $row; // Thêm từng dòng kết quả vào mảng sản phẩm mới nhất
    }
} else {
    echo "Không có dữ liệu";
}

// Lấy ra toàn bộ slide--------------------------------------------------------------------------------------
$sql = "SELECT * FROM slide";
$result = $conn->query($sql);

$slides = array(); // Khởi tạo một mảng để lưu trữ danh sách danh mục

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $slides[] = $row; // Thêm từng dòng kết quả vào mảng danh mục
    }
} else {
    echo "Không có dữ liệu";
}

// Thêm vào giỏ hàng------------------------------------------------------------------------------------------------------
if(isset($_REQUEST['action']) && $_REQUEST['action'] === 'addtocart') {
    // Lấy ID sản phẩm từ yêu cầu
    $sanpham_id = $_REQUEST['sanpham_id'];

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $item) {
            if($item['id'] == $sanpham_id) {
                // Nếu sản phẩm đã có trong giỏ hàng, hiển thị thông báo lỗi và dừng lại
                header("Location: ../index?error=Code đã tồn tại trong giỏ hàng");
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

        header("Location: ../index?success=Thêm code vào giỏ hàng thành công");
        exit();
    }
}

// Tìm kiếm----------------------------------------------------------------------------------------------
if(isset($_GET['action']) && $_GET['action'] === 'search') {
    $search = $_GET['search'];

    $sql = "SELECT * FROM sanpham WHERE `name` LIKE '%$search%'";
    $result = $conn->query($sql);

    $searchs = array(); 

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $searchs[] = $row;
        }
    } else {
        echo "Không có dữ liệu";
    }

    header("Location: ../timkiem?search=$search");
    exit();
}

$conn->close();
?>