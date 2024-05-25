<?php
require ("db.php");
class category_post
{
    public function __construct()
    {

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



}
?>