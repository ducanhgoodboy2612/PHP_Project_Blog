<?php
    require ("action/blog_controller.php");
    $db = new admin_blog_controller();

    // $result = $db->getBlogs();
    // Số lượng bài viết trên mỗi trang
    $postsPerPage = 5;

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

    // Lấy danh sách bài viết và thông tin phân trang
    $paginationResult = $db->getPaginatedBlogs($current_page, $postsPerPage);

    $blogs = $paginationResult['blogs'];
    $totalPages = $paginationResult['totalPages'];
    $current_page = $paginationResult['current_page'];

    $cates = $db->getAllCate();


?>



<?php require_once ('../layout/admin/header.php'); ?>

    
<!--PRELOADER-->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- start Container Wrapper -->
<div id="container-wrapper">
    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        <div class="dashboard-sticky-nav">
            <div class="content-left pull-left">
                <a href="dashboard.html"><img src="/assets/images/logo.png" alt="logo"></a>
            </div>
            <div class="content-right pull-right">
                <div class="search-bar">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Search Now">
                            <a href="#"><span class="search_btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></span></a>
                        </div>
                    </form>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <div class="profile-sec">
                            <div class="dash-image">
                                <img src="/assets/images/comment.jpg" alt="">
                            </div>
                            <div class="dash-content">
                                <h4>Loural Teak</h4>
                                <span>Post Manager</span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li>
                        <li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
                        <li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>
                        <li><a href="#"><i class="sl sl-icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <div class="dropdown-item">
                            <i class="sl sl-icon-envelope-open"></i>
                            <span class="notify">3</span>
                        </div>
                    </a>
                    <div class="dropdown-menu notification-menu">
                        <h4> 23 Messages</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="all-noti"><a href="#">See all messages</a></p>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <div class="dropdown-item">
                            <i class="sl sl-icon-bell"></i>
                            <span class="notify">3</span>
                        </div>
                    </a>
                    <div class="dropdown-menu notification-menu">
                        <h4> 599 Notifications</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours
                                                ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="all-noti"><a href="#">See all notifications</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">
                <ul>
                    <li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                    <li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                    <li><a href="dashboard-addtour.html"><i class="sl sl-icon-plus"></i> Add Post</a></li>
                    <li>
                        <a><i class="sl sl-icon-layers"></i> Post Listing</a>
                        <ul>
                            <li><a href="dashboard-list.html">Active <span class="nav-tag green">6</span></a></li>
                            <li><a href="dashboard-list.html">Pending <span class="nav-tag yellow">1</span></a></li>
                            <li><a href="dashboard-list.html">Expired <span class="nav-tag red">2</span></a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Post
                            List</a></li>
                    <li><a href="dashboard-history.html"><i class="sl sl-icon-folder"></i> History</a></li>
                    <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
                    <li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>



        <div class="dashboard-content">
            <div style="margin: 10px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Thêm mới Blog
                    </button></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="dashboard-list-box">
                        <h4 class="gray">All Blogs</h4>
                        <div class="table-box">
                            <table class="basic-table booking-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th style="display: none">Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($blogs as $sp): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($sp['id']) ?></td>
                                            <td>
                                                <img src="/<?= ltrim($sp['image'], '/') ?>" alt="image"
                                                    class="img-responsive center-block post_img" width="100" />
                                            </td>
                                            <td><?= htmlspecialchars($sp['title']) ?></td>
                                            <td><?= htmlspecialchars($sp['author']) ?></td>
                                            <td><?= htmlspecialchars($sp['updated_at']) ?></td>
                                            <td style="display: none"><?= htmlspecialchars($sp['content']) ?></td>
                                            <td>
                                                <!-- <a href="edit.php?id=<?= $sp['id'] ?>" class="button gray"><i
                                                        class="sl sl-icon-pencil"></i></a> -->

                                                <button class="button gray" data-id="<?php echo $sp['id']; ?>"
                                                    onclick="openEditModal(this)">Edit</button>

                                                <!-- <a href="delete.php?id=<?= $sp['id'] ?>" class="button gray"><i
                                                        class="sl sl-icon-close"></i></a> -->

                                                <button class="btn btn-danger " id="delete-btn" onclick="openDeleteModal(this)" data-id="<?php echo $sp['id']; ?>">Delete</button>
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- <div class="pagination__wrapper mar-top-30">
                        <ul class="pagination">
                            <li><button class="prev" title="previous page">&#10094;</button></li>
                            <li><button title="first page - page 1">1</button></li>
                            <li><button>2</button></li>
                            <li><button class="active" title="current page">2</button></li>
                            <li><button>3</button></li>
                            <li><button>4</button></li>
                            <li><button class="next" title="next page">&#10095;</button></li>
                        </ul>
                    </div> -->

                    <div class="pagination__wrapper mar-top-30">
                        <ul class="pagination">
                            <?php if ($current_page > 1): ?>
                                <li><a href="?page=<?= ($current_page - 1) ?>" title="previous page">&#10094;</a></li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <li class="<?= ($i == $current_page) ? 'active' : '' ?>"><a
                                        href="?page=<?= $i ?>"><?= $i ?></a></li>
                            <?php endfor; ?>
                            <?php if ($current_page < $totalPages): ?>
                                <li><a href="?page=<?= ($current_page + 1) ?>" title="next page">&#10095;</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Content / End -->
        <!-- Copyrights -->
        <div class="copyrights">
            <p>2019 <i class="fa fa-copyright" aria-hidden="true"></i> Suchana by <a
                    href="https://www.cyclonethemes.com/" target="_blank">Cyclone Themes</a></p>
        </div>
    </div>
    <!-- Dashboard / End -->
</div>
<!-- end Container Wrapper -->


<!-- Back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->

<!-- Add blog -->

<!-- Thêm Bài Viết -->
<div class="modal" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Bài Viết</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="addForm" method="post" action="../admin/action/blog_controller.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="newTitle">Title</label>
                        <input type="text" class="form-control" id="newTitle" name="newTitle">
                    </div>
                   
                    <div class="form-group">
                        <label for="newAuthor">Author:</label>
                        <input type="text" class="form-control" id="newAuthor" name="newAuthor">
                    </div>
                    <div class="form-group">
                        <label for="newImage">Image:</label>
                        <input type="text" class="form-control" id="newImage" name="newImage">
                    </div>
                    <!-- <div class="form-group">
                        <label for="newCreated_at">Created_at:</label>
                        <input type="date" class="form-control" id="newCreated_at" name="newCreated_at">
                    </div> -->

                     <div class="form-group">
                        <label for="newContent">Content:</label>                       
                        <textarea class="form-control summernote" id="newContent" name="newContent"></textarea>                       
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addBlogBtn">Thêm Bài Viết</button>
            </div>
        </div>
    </div>
</div>


<script>
    // Khởi tạo CKEditor trên textarea có id là 'editContent'
    CKEDITOR.replace('newContent');
</script>
<script>
    

    document.getElementById('addBlogBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit
        // console.log("nmbt");

        var form = document.getElementById('addForm');
        var newTitle = form.querySelector('input[name="newTitle"]').value;
        var newAuthor = form.querySelector('input[name="newAuthor"]').value;

        var newContent = CKEDITOR.instances['newContent'].getData();

        //var newImage = form.querySelector('input[name="newImage"]').files[0];
        var newImage = form.querySelector('input[name="newImage"]').value;
        //var newCreated_at = form.querySelector('input[name="newCreated_at"]').value;

        console.log(newTitle);
        console.log(newImage);

        if (newTitle.trim() === '' || newContent.trim() === '' || newAuthor.trim() === '') {
            
            alert('Vui lòng điền đầy đủ thông tin.');
            return;
        }

       
        form.action = "../admin/action/blog_action.php?action=add";

        
        form.submit();


    });
</script>

<!-- Edit blog -->
<!-- Modal for Editing Blog -->
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa Blog</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="editForm" method="post" action="../admin/action/blog_controller.php">
                    <input type="hidden" id="editId" name="editId">
                    <div class="form-group">
                        <label for="editImage">Image:</label>
                        <input type="text" class="form-control" id="editImage" name="editImage">
                    </div>
                    <div class="form-group">
                        <label for="editTitle">Title:</label>
                        <input type="text" class="form-control" id="editTitle" name="editTitle">
                    </div>
                    <div class="form-group">
                        <label for="editAuthor">Author:</label>
                        <input type="text" class="form-control" id="editAuthor" name="editAuthor">
                    </div>
                    <div class="form-group">
                        <label for="editUpdatedAt">Updated At:</label>
                        <input type="text" class="form-control" id="editUpdatedAt" name="editUpdatedAt" readonly>
                    </div>
                    <div class="form-group">
                        <label for="editContent">Content:</label>
                        <textarea type="text" class="form-control" id="editContent" name="editContent"></textarea>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">Lưu thay đổi</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Khởi tạo CKEditor trên textarea có id là 'editContent'
    CKEDITOR.replace('editContent');
</script>


<script>
    function openEditModal(element) {
        var id = $(element).data('id');
        var image = $(element).closest('tr').find('td:nth-child(2) img').attr('src');
        var title = $(element).closest('tr').find('td:nth-child(3)').text();
        var author = $(element).closest('tr').find('td:nth-child(4)').text();
        var updated_at = $(element).closest('tr').find('td:nth-child(5)').text();
        var content = $(element).closest('tr').find('td:nth-child(6)').text();

        document.getElementById('editId').value = id;
        document.getElementById('editImage').value = image;
        document.getElementById('editTitle').value = title;
        document.getElementById('editAuthor').value = author;
        document.getElementById('editUpdatedAt').value = updated_at;
        //document.getElementById('editContent').value = content;

        CKEDITOR.instances['editContent'].setData(content);

        $('#editModal').modal('show');
    }

    document.getElementById('saveChangesBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit

        var form = document.getElementById('editForm');
        var id = form.querySelector('input[name="editId"]').value;
        var image = form.querySelector('input[name="editImage"]').value;
        var title = form.querySelector('input[name="editTitle"]').value;
        var author = form.querySelector('input[name="editAuthor"]').value;
        var updated_at = form.querySelector('input[name="editUpdatedAt"]').value;
        var content = CKEDITOR.instances['editContent'].getData();

        console.log(id);
        console.log(title);

        if (title.trim() === '' || content.trim() === '' || author.trim() === '') {
            // Nếu có trường nào đó rỗng, hiển thị thông báo lỗi và ngăn việc gửi dữ liệu
            alert('Vui lòng điền đầy đủ thông tin.');
            return;
        }

        // Thiết lập action của form để gửi dữ liệu đến blog_controller.php
        form.action = "../admin/action/blog_action.php?action=edit";

        // Gửi form
        form.submit();




        <?php if (isset($_GET['status'])): ?>
            <?php if ($_GET['status'] == 'success'): ?>
                Swal.fire({
                    title: 'Thành công!',
                    text: 'Cập nhật blog thành công!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            <?php elseif ($_SESSION['status'] == 'error'): ?>
                Swal.fire({
                    title: 'Thất bại!',
                    text: 'Cập nhật blog thất bại!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            <?php endif; ?>
            <?php unset($_SESSION['status']); // Xóa thông báo sau khi hiển thị ?>
        <?php endif; ?>
            });
</script>

<!-- Xóa Blog -->

<!-- Modal Xác Nhận Xóa -->
<div class="modal" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Xác Nhận Xóa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="delForm" method="post" action="">
                <p>Bạn có chắc chắn muốn xóa bài viết này không?</p>
                <input type="text" id="deleteId" name="deleteId">
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openDeleteModal(element) {
        var id = $(element).data('id');
        $('#deleteId').val(id);
        $('#deleteModal').modal('show');
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function (event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit
         var id = $('#deleteId').val();
        var form = document.getElementById('delForm');

        console.log(id);
        form.action = "../admin/action/blog_action.php?action=delete";
        //form.method = 'GET';
        form.submit();

    });
</script>


<!-- <script>
    function openEditModal(element) {
        var id = $(element).data('id');
        var image = $(element).closest('tr').find('td:nth-child(2) img').attr('src');
        var title = $(element).closest('tr').find('td:nth-child(3)').text();
        var author = $(element).closest('tr').find('td:nth-child(4)').text();
        var updated_at = $(element).closest('tr').find('td:nth-child(5)').text();

        $('#editId').val(id);
        $('#editImage').val(image);
        $('#editTitle').val(title);
        $('#editAuthor').val(author);
        $('#editUpdatedAt').val(updated_at);

        $('#editModal').modal('show');
    }

    $('#saveChangesBtn').click(function() {
        var id = $('#editId').val();
        var image = $('#editImage').val();
        var title = $('#editTitle').val();
        var author = $('#editAuthor').val();
        var updated_at = $('#editUpdatedAt').val();

        // Tạo một đối tượng FormData để chứa dữ liệu form
        var formData = new FormData();
        formData.append('action', 'edit');
        formData.append('id', id);
        formData.append('image', image);
        formData.append('title', title);
        formData.append('author', author);
        formData.append('updated_at', updated_at);

        // Gửi dữ liệu mới lên server bằng AJAX
        $.ajax({
            url: '../admin/action/blog_controller.php',
            method: 'post',
            data: formData,
            contentType: false, // Không cần thiết khi sử dụng FormData
            processData: false, // Không cần thiết khi sử dụng FormData
            success: function(response) {
                // Kiểm tra kết quả trả về từ máy chủ sau khi cập nhật thành công
                console.log(response);
                // Ẩn modal chỉnh sửa
                $('#editModal').modal('hide');
                // Cập nhật lại dữ liệu trong bảng hoặc thực hiện các hành động cần thiết khác
                location.reload();
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error(xhr.responseText);
                alert('Đã xảy ra lỗi. Vui lòng thử lại sau.');
            }
        });
    });
</script> -->


<?php require_once ('../layout/admin/footer.php'); ?>