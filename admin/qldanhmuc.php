<?php require_once('../layout/admin/head.php');?>

<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <h4>Danh mục</h4>
                  </div>
                  <div class="card-body">
                   
                    <div style="margin: 10px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Thêm Danh Mục
                    </button></div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                      
                        <tr>
                          <th>#</th>
                          <th>Tên Danh Mục</th>
                          <th>Ảnh</th>
                          <th>Link</th>
                          <th>Action</th>
                        </tr>
                       
                        <?php
                        include "../admin/action/get_controller.php";
                        // foreach ($danhmucs as $item) {
                            foreach ($danhmucs as $item) :
                        ?>
                        <tr>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['name']; ?></td>
                          <td><?php echo $item['photo']; ?></td>
                          <!-- <td><img src="../uploads/<?php echo $item['photo']; ?>" alt="Ảnh sản phẩm" width="100" height="50"></td> -->
                          <td><?php echo $item['link']; ?></td>
                          <td>
                            <button class="btn btn-primary edit-btn" data-id="<?php echo $item['id']; ?>" onclick="openEditModal(this)">Edit</button>
                            <button class="btn btn-danger delete-btn" data-id="<?php echo $item['id']; ?>">Delete</button>
                            </td>
                        </tr> 
                        <?php endforeach; ?>  
                      </table>
                    </div>
                </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
        </section>

       
</div>
<!-- Update danh mục -->
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa danh mục</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editId" name="editId">
                    <div class="form-group">
                        <label for="editName">Tên Danh Mục:</label>
                        <input type="text" class="form-control" id="editName" name="editName">
                    </div>
                    <div class="form-group">
                        <label for="editPhoto">Ảnh:</label>
                        <input type="text" class="form-control" id="editPhoto" name="editPhoto">
                    </div>
                    <div class="form-group">
                        <label for="editLink">Link:</label>
                        <input type="text" class="form-control" id="editLink" name="editLink">
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function openEditModal(element) {
        var action = 'edit'; 
        var id = $(element).data('id');
        var name = $(element).closest('tr').find('td:nth-child(2)').text();
        var photo = $(element).closest('tr').find('td:nth-child(3)').text();
        var link = $(element).closest('tr').find('td:nth-child(4)').text();

        $('#editId').val(id);
        $('#editName').val(name);
        $('#editPhoto').val(photo);
        $('#editLink').val(link);

        $('#editModal').modal('show');
    }

    
    $('#saveChangesBtn').click(function() {
    var id = $('#editId').val();
    var name = $('#editName').val();
    var photo = $('#editPhoto').val();
    var link = $('#editLink').val();

        // Thực hiện xử lý AJAX để lưu các thay đổi
        $.ajax({
            url: '../admin/action/danhmuc_controller.php',
            method: 'post',
            data: {
                action: 'edit',
                id: id,
                name: name,
                photo: photo,
                link: link
            },
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

</script>

<!-- Form thêm danh mục -->
<div class="modal" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Danh Mục</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="newName">Tên Danh Mục:</label>
                        <input type="text" class="form-control" id="newName" name="newName">
                    </div>
                    <div class="form-group">
                        <label for="newPhoto">Ảnh:</label>
                        <input type="file" class="form-control" id="newPhoto" name="newPhoto">
                    </div>
                    <div class="form-group">
                        <label for="newLink">Link:</label>
                        <input type="text" class="form-control" id="newLink" name="newLink">
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addCategoryBtn">Thêm Danh Mục</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#addCategoryBtn').click(function() {
            var newName = $('#newName').val();
            var newPhoto = $('#newPhoto')[0].files[0];
            var newLink = $('#newLink').val();

            // Tạo một đối tượng FormData để chứa dữ liệu form
            var formData = new FormData();
            formData.append('action', 'add');
            formData.append('name', newName);
            formData.append('newPhoto', newPhoto);
            formData.append('link', newLink);

            // Gửi dữ liệu mới lên server bằng AJAX
            $.ajax({
                url: '../admin/action/danhmuc_controller.php',
                method: 'post',
                data: formData,
                contentType: false, // Không cần thiết khi sử dụng FormData
                processData: false, // Không cần thiết khi sử dụng FormData
                success: function(response) {
                    // Kiểm tra kết quả trả về từ máy chủ sau khi thêm thành công
                    console.log(response);
                    // Làm mới trang sau khi thêm thành công để cập nhật dữ liệu mới
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi nếu có
                    console.error(xhr.responseText);
                    alert('Đã xảy ra lỗi. Vui lòng thử lại sau.');
                }
            });
        });
    });
</script>

<!-- Xóa danh mục -->
<script>
$(document).ready(function() {
    // Xử lý sự kiện khi nhấn nút Xóa
    $('.delete-btn').click(function() {
        
        var id = $(this).data('id');
        if (confirm('Bạn có chắc chắn muốn xóa danh mục này không?')) {
            $.ajax({
                url: '../admin/action/danhmuc_controller.php',
                method: 'post',
                data: {
                    action: 'delete',
                    id: id
                },
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Đã xảy ra lỗi. Vui lòng thử lại sau.');
                }
            });
        }
    });
});
</script>

<?php require_once('../layout/admin/footer.php');?>

