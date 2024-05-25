<?php
require ("db.php");
class admin_blog_controller
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


    public function updateBlog($id, $image, $title, $author, $updated_at, $content)
    {
        $db = new dbconnect();
        $sql = "UPDATE blog SET 
                image = '$image', 
                title = '$title', 
                author = '$author',
                content = '$content',
                updated_at = NOW()
            WHERE id = $id";

        // Thực hiện câu lệnh SQL
        return $db->exec($sql);
    }


    public function insertBlog($image, $title, $author, $content)
    {
        $db = new dbconnect();
        $sql = "INSERT INTO blog (image, title, author, content, created_at, updated_at) 
            VALUES ('$image', '$title', '$author', '$content', NOW(), NOW())";

        // Thực hiện câu lệnh SQL
        return $db->exec($sql);
    }

    public function deleteBlog($id)
    {
        $db = new dbconnect();
        $sql = "DELETE FROM blog WHERE id = '$id'";
        // Thực hiện câu lệnh SQL
        return $db->exec($sql);
    }



}
?>