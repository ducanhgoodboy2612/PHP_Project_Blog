<?php require_once('../layout/admin/head.php');?>

<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <h4>Sản Phẩm</h4>
                  </div>
                  <div class="card-body">
                    
                    <div style="margin: 10px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Thêm Sản Phẩm
                    </button></div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                      
                        <tr>
                          <th>#</th>
                          <th>Tên Sản Phẩm</th>
                          <th>Nội Dung</th>
                          <th>Giá(VND)</th>
                          <th>Ảnh</th>
                          <th>Link Download</th>
                          <th>Link Youtube</th>
                          <th>Danh Mục</th>
                          <th>Ngày Tạo</th>
                          <th>Ảnh Demo</th>
                          <th>Action</th>
                        </tr>
                       
                        <?php
                        include "../admin/action/get_controller.php";                      
                            foreach ($sanphams as $item) :
                        ?>
                        <tr>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['name']; ?></td>
                          <td><?php echo $item['content']; ?></td>                         
                          <td><?php echo number_format($item['price'], 0, ',', '.'); ?></td>     
                          <td><?php echo $item['photo']; ?></td>                  
                          <!-- <td><img src="../uploads/<?php echo $item['photo']; ?>" alt="Ảnh sản phẩm" width="100" height="50"></td> -->
                          <td><?php echo $item['link']; ?></td>       
                          <td><?php echo $item['youtube']; ?></td> 
                          <td>
                          <div class="badge badge-success badge-shadow"><?php echo $item['category_name']; ?></div> 
                          </td>   
                                         
                       
                          <td><?php echo $item['create_at']; ?></td>
                          <td><?php echo $item['photo_demo']; ?></td> 
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

<!-- Thêm Sản Phẩm -->
<div class="modal" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thêm Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="newName">Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" id="newName" name="newName">
                    </div>
                    <div class="form-group">
                        <label for="newContent">Nội dung:</label>                       
                        <textarea class="form-control summernote" id="newContent" name="newContent"></textarea>                       
                    </div>
                    <div class="form-group">
                        <label for="newPrice">Giá:</label>
                        <input type="number" class="form-control" id="newPrice" name="newPrice">
                    </div>
                    <div class="form-group">
                        <label for="newPhoto_demo">Ảnh Demo:</label>
                        <textarea class="form-control summernote" id="newPhoto_demo" name="newPhoto_demo"></textarea>
                     
                    </div>
                    <div class="form-group">
                        <label for="newCreate_at">Ngày Tạo:</label>
                        <input type="date" class="form-control" id="newCreate_at" name="newCreate_at">
                    </div>
                    <div class="form-group">
                        <label for="newLink">Link Tải:</label>
                        <input type="text" class="form-control" id="newLink" name="newLink">
                    </div>
                    <div class="form-group">
                        <label for="newYoutube">Link Youtube:</label>
                        <input type="text" class="form-control" id="newYoutube" name="newYoutube">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc_id">Danh Mục:</label>
                        <select class="form-control" id="danhmuc_id" name="danhmuc_id">
                            <option value="">Chọn danh mục</option>
                            <?php
                            // Duyệt qua mảng danh mục và tạo các tùy chọn cho trường select
                            foreach ($danhmucs as $danhmuc) {
                                echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newPhoto">Ảnh:</label>
                        <input type="file" class="form-control" id="newPhoto" name="newPhoto">
                    </div>
                    
                    

                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addCategoryBtn">Thêm Sản Phẩm</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#addCategoryBtn').click(function() {
            var newName = $('#newName').val();
            var newPrice = $('#newPrice').val();
            var newPhoto_demo = $('#newPhoto_demo').val();
            var newCreate_at = $('#newCreate_at').val();
            var newLink = $('#newLink').val();
            var newYoutube = $('#newYoutube').val();
            var danhmuc_id = $('#danhmuc_id').val();
            var newContent = $('#newContent').val();
            var newPhoto = $('#newPhoto')[0].files[0];

            // Tạo một đối tượng FormData để chứa dữ liệu form
            var formData = new FormData();
            formData.append('action', 'add');
            formData.append('name', newName);
            formData.append('price', newPrice);
            formData.append('photo_demo', newPhoto_demo);
            formData.append('create_at', newCreate_at);
            formData.append('link', newLink);
            formData.append('youtube', newYoutube);
            formData.append('danhmuc_id', danhmuc_id);
            formData.append('content', newContent);
            formData.append('newPhoto', newPhoto);

            // Gửi dữ liệu mới lên server bằng AJAX
            $.ajax({
                url: '../admin/action/sanpham_controller.php',
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


<!-- Sửa Sản Phẩm -->
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editId" name="editId">
                    <div class="form-group">
                        <label for="editName">Tên Sản Phẩm:</label>
                        <input type="text" class="form-control" id="editName" name="editName">
                    </div>
                    <div class="form-group">
                        <label for="editContent">Nội dung:</label>
                        <textarea class="form-control summernote" id="editContent" name="editContent"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editPrice">Giá:</label>
                        <input type="number" class="form-control" id="editPrice" name="editPrice">
                    </div>
                    <div class="form-group">
                        <label for="editDanhmuc_id">Danh Mục:</label>
                        <select class="form-control" id="editDanhmuc_id" name="editDanhmuc_id">
                            <option value="">Chọn danh mục</option>
                            <?php
                            // Duyệt qua mảng danh mục và tạo các tùy chọn cho trường select
                            foreach ($danhmucs as $danhmuc) {
                                echo '<option value="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editPhoto">Ảnh:</label>
                        <input type="text" class="form-control" id="editPhoto" name="editPhoto">
                    </div>
                   
                    
                    <div class="form-group">
                        <label for="editLink">Link Tải:</label>
                        <input type="text" class="form-control" id="editLink" name="editLink">
                    </div>
                    <div class="form-group">
                        <label for="editYoutube">Link Youtube:</label>
                        <input type="text" class="form-control" id="editYoutube" name="editYoutube">
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label for="editPhoto_demo">Ảnh Demo:</label>
                        <input type="form-control summernote" class="form-control" id="editPhoto_demo" name="editPhoto_demo">
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
    function openEditModal(element) {
        var action = 'edit'; 
        var id = $(element).data('id');
        var name = $(element).closest('tr').find('td:nth-child(2)').text();
        var content = $(element).closest('tr').find('td:nth-child(3)').html();
        var price = $(element).closest('tr').find('td:nth-child(4)').text();
        var photo = $(element).closest('tr').find('td:nth-child(5)').text();
        var link = $(element).closest('tr').find('td:nth-child(6)').text();                 
        var youtube = $(element).closest('tr').find('td:nth-child(7)').text();   
        var danhmuc_id = $(element).closest('tr').find('td:nth-child(8)').text();         
        var photo_demo = $(element).closest('tr').find('td:nth-child(10)').html();             

        
        


        $('#editId').val(id);
        $('#editName').val(name);
        $('#editContent').summernote('code', content); // Set nội dung cho summernote
        $('#editPrice').val(price);
        $('#editPhoto').val(photo);
        $('#editLink').val(link);
        $('#editYoutube').val(youtube);     
        $('#editPhoto_demo').summernote('code',photo_demo);       
        $('#editDanhmuc_id').val(danhmuc_id);
      
        $('#editModal').modal('show');
    }

    
    $('#saveChangesBtn').click(function() {
        var id = $('#editId').val();
        var name = $('#editName').val();
        var content = $('#editContent').summernote('code');
        var price = $('#editPrice').val();
        var photo_demo = $('#editPhoto_demo').summernote('code');
        var link = $('#editLink').val();
        var youtube = $('#editYoutube').val();
        var danhmuc_id = $('#editDanhmuc_id').val();
        var photo = $('#editPhoto').val();
        


        // Tạo một đối tượng FormData để chứa dữ liệu form
        var formData = new FormData();
        formData.append('action', 'edit');
        formData.append('id', id);
        formData.append('name', name);
        formData.append('content', content);
        formData.append('price', price);
        formData.append('photo_demo', photo_demo);        
        formData.append('link', link);
        formData.append('youtube', youtube);
        formData.append('danhmuc_id', danhmuc_id);
        formData.append('photo', photo);

        // Gửi dữ liệu mới lên server bằng AJAX
        $.ajax({
            url: '../admin/action/sanpham_controller.php',
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
</script>


<!-- Xóa Sản Phẩm -->
<script>
$(document).ready(function() {
    // Xử lý sự kiện khi nhấn nút Xóa
    $('.delete-btn').click(function() {
        
        var id = $(this).data('id');
        if (confirm('Bạn có chắc chắn muốn xóa Sản Phẩm này không?')) {
            $.ajax({
                url: '../admin/action/sanpham_controller.php',
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

