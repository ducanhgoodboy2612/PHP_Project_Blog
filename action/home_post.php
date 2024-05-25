<?php
require ("db.php");
class home_controller
{
    public function __construct()
    {

    }

    // public function getBlogs()
    // {
    //     $db = new dbconnect();
    //     $sql = "SELECT * FROM blog;";
    //     return $db->query($sql);
    // }

    public function getBlogs($limit, $offset)
    {
        $db = new dbconnect();
        $sql = "SELECT * FROM blog LIMIT $limit OFFSET $offset";
        return $db->query($sql);
    }

    public function getTotalBlogs()
    {
        $db = new dbconnect();
        $sql = "SELECT COUNT(*) AS total FROM blog";
        $result = $db->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getPaginatedBlogs($current_page, $postsPerPage)
    {
        // Lấy tổng số lượng bài viết
        $totalPosts = $this->getTotalBlogs();

        // Tính tổng số trang
        $totalPages = ceil($totalPosts / $postsPerPage);

        // Đảm bảo trang hiện tại nằm trong giới hạn hợp lệ
        $current_page = max(1, min($current_page, $totalPages));

        // Tính toán vị trí bắt đầu của bài viết
        $offset = ($current_page - 1) * $postsPerPage;

        // Lấy danh sách bài viết cho trang hiện tại
        $blogs = $this->getBlogs($postsPerPage, $offset);

        return [
            'blogs' => $blogs,
            'totalPages' => $totalPages,
            'current_page' => $current_page,
        ];
    }



    public function getOnce($CatID)
    {
        $db = new dbconnect();
        $sql = "SELECT * FROM pharma where Product_Id='$CatID'";
        return $db->getOnce($sql);
    }

    public function getAllCate()
    {
        $db = new dbconnect();
        $sql = "SELECT * FROM category";
        return $db->query($sql);
    }

    public function getProduct_Cate($id)
    {
        $db = new dbconnect();
        $sql = "SELECT b.*
            FROM blog_news.blog b
            JOIN blog_news.blog_cate bc ON b.id = bc.blog_id
            JOIN blog_news.category c ON bc.category_id = c.id
            WHERE c.id = '$id'";
        return $db->query($sql);
    }

    public function searchBlogs($keyword)
    {
        $db = new dbconnect();
        // Sanitize the keyword to prevent SQL injection
        // $keyword = $db->real_escape_string($keyword);
        $sql = "SELECT * FROM blog WHERE title LIKE '%$keyword%'";
        return $db->query($sql);
    }


    public function login($username, $password)
    {
        // Kiểm tra xem $username và $password có tồn tại không
        if (empty($username) || empty($password)) {
            throw new Exception("Please provide both username and password.");
        }

        // Kiểm tra thông tin đăng nhập với cơ sở dữ liệu
        $db = new dbconnect();
     
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if ($result->rowCount() == 1) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
            if ($user['role'] == 1) {
                // Nếu vai trò là 1 (admin), chuyển hướng đến trang admin.php
                header("Location: admin/index.php?success=Login successful");
              
                exit; // Kết thúc chương trình sau khi chuyển hướng
            } else {
                // Nếu vai trò là 0 (user), chuyển hướng đến trang index.php
                header("Location: index.php?success=Login successful");
                exit; // Kết thúc chương trình sau khi chuyển hướng
            }
        } else {
            // Nếu không tìm thấy người dùng hoặc thông tin không chính xác, ném ra một ngoại lệ hoặc thông báo lỗi
            header("Location: login.php?error=Invalid username or password");
            exit;
        }
        
    }


    public function register($username, $password, $name, $email, $phoneNumber)
    {
        // Kiểm tra tính hợp lệ của dữ liệu (ví dụ: kiểm tra email có hợp lệ không, kiểm tra mật khẩu có đủ mạnh không, v.v.)

        // Thực hiện thêm người dùng vào cơ sở dữ liệu
        $db = new dbconnect();
        

        // Thêm người dùng mới vào cơ sở dữ liệu
        $sql = "INSERT INTO user (username, password, name, email, sdt, create_at) VALUES ('$username', '$password', '$name', '$email', '$phoneNumber', NOW())";
        $result = $db->query($sql);

        if ($result) {
            // Thêm người dùng thành công
            header("Location: index.php");
            exit;
        } else {
            // Thêm người dùng thất bại
            throw new Exception("Failed to register user.");
        }
    }




}
?>