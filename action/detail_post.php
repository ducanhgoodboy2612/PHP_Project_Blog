<?php
require ("db.php");
class detail_post
{
    public function __construct()
    {

    }

    public function getAll()
    {
        $db = new dbconnect();
        $sql = "SELECT * FROM pharma;";
        return $db->query($sql);
    }

    public function getOnce($id)
    {
        $db = new dbconnect();
        $sql = "SELECT * FROM blog where id='$id'";
        return $db->getOnce($sql);
    }

   

}
?>