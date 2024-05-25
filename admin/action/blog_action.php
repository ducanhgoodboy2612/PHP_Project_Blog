<?php
require ("blog_controller.php");

$controller = new admin_blog_controller();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'edit') {
    $id = $_POST['editId'];
    $image = $_POST['editImage'];
    $title = $_POST['editTitle'];
    $author = $_POST['editAuthor'];
    $updated_at = $_POST['editUpdatedAt'];  
    $content = $_POST['editContent'];

    echo "Params: ";
    echo $id;
    echo $image;
    echo $title;
    echo $author;
    echo $updated_at;
    echo $content;


    $result = $controller->updateBlog($id, $image, $title, $author, $updated_at, $content);

    if ($result) {
        // Cập nhật blog thành công, chuyển hướng về trang blog.php với thông báo thành công
        header("Location: ../blogs.php?status=success");
        exit();
    } else {
        // Cập nhật blog thất bại, chuyển hướng về trang blog.php với thông báo thất bại
        header("Location: ../blog.php?status=error");
        exit();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'add') {
    $title = $_POST['newTitle'];
    $content = $_POST['newContent'];
    $author = $_POST['newAuthor'];
    $image = $_POST['newImage'];
    // $created_at = $_POST['newCreated_at']; // Không cần thiết nếu bạn không có trường này

    echo "nmbt";
    echo $title;
    echo $content;
    echo $author;

    // Xử lý upload file
    // $imagePath = '';
    // if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    //     $targetDir = "uploads/";
    //     $targetFile = $targetDir . basename($_FILES['image']['name']);
    //     if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
    //         $imagePath = $targetFile;
    //     }
    // }

    $result = $controller->insertBlog($image, $title, $author, $content);

    if ($result) {
        header("Location: ../blogs.php?status=success");

    } else {
        header("Location: ../blogs.php?status=error");

    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteId'])) {
    $id = $_POST['deleteId'];

    echo "Deleting ID: " . $id;

    $result = $controller->deleteBlog($id);

    if ($result) {
        echo "del";
        // Nếu xóa thành công, chuyển hướng về trang blogs.php với trạng thái thành công
        header("Location: ../blogs.php?status=success");
        exit();
    } else {
        // Nếu xóa thất bại, chuyển hướng về trang blogs.php với trạng thái lỗi
        header("Location: ../blogs.php?status=error");
        exit();
    }
}


// if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['deleteID'])) {
//     $id = $_GET['deleteID'];

//     echo "Deleting ID: " . $id;

//     $result = $controller->deleteBlog($id);

//     if ($result) {
//         echo "del";
        
//     } else {
        
//         header("Location: ../blogs.php?status=error");
//         exit();
//     }
// }
?>


<h1>nmbt</h1>