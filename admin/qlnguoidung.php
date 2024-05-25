<?php require_once('../layout/admin/head.php');?>

<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <h4>Người Dùng</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                      
                        <tr>
                          <th>#</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Active</th>
                          <th>BAN</th>
                          <th>Email</th>
                          <th>SDT</th>
                          <th>VND</th>
                          <th>Tổng Nạp</th>
                          <th>Action</th>
                        </tr>
                       
                        <?php
                        include "../admin/action/get_controller.php";
                            foreach ($nguoidungs as $item) :
                        ?>
                        <tr>
                          <td><?php echo $item['id']; ?></td>
                          <td><?php echo $item['username']; ?></td>
                          <td><?php echo $item['name']; ?></td>
                          <td><?php echo $item['active']; ?></td>
                          <td><?php echo $item['ban']; ?></td>
                          <td><?php echo $item['email']; ?></td>
                          <td><?php echo $item['sdt']; ?></td>
                          <td><?php echo $item['vnd']; ?></td>
                          <td><?php echo $item['tongnap']; ?></td>
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
<!-- Update người dùng -->
<!-- Modal Edit -->
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa người dùng</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editId" name="editId">
                    <div class="form-group">
                        <label for="editUsername">Username:</label>
                        <input type="text" class="form-control" id="editUsername" name="editUsername">
                    </div>
                    <div class="form-group">
                        <label for="editName">Name:</label>
                        <input type="text" class="form-control" id="editName" name="editName">
                    </div>
                    <div class="form-group">
                        <label for="editActive">Active:</label>
                        <input type="text" class="form-control" id="editActive" name="editActive">
                    </div>
                    <div class="form-group">
                        <label for="editBan">BAN:</label>
                        <input type="text" class="form-control" id="editBan" name="editBan">
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email:</label>
                        <input type="email" class="form-control" id="editEmail" name="editEmail">
                    </div>
                    <div class="form-group">
                        <label for="editSdt">SDT:</label>
                        <input type="text" class="form-control" id="editSdt" name="editSdt">
                    </div>
                    <div class="form-group">
                        <label for="editVnd">VND:</label>
                        <input type="text" class="form-control" id="editVnd" name="editVnd">
                    </div>
                    <div class="form-group">
                        <label for="editTongnap">Tổng Nạp:</label>
                        <input type="text" class="form-control" id="editTongnap" name="editTongnap">
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
        var username = $(element).closest('tr').find('td:nth-child(2)').text();
        var name = $(element).closest('tr').find('td:nth-child(3)').text();
        var active = $(element).closest('tr').find('td:nth-child(4)').text();
        var ban = $(element).closest('tr').find('td:nth-child(5)').text();
        var email = $(element).closest('tr').find('td:nth-child(6)').text();
        var sdt = $(element).closest('tr').find('td:nth-child(7)').text();
        var vnd = $(element).closest('tr').find('td:nth-child(8)').text();
        var tongnap = $(element).closest('tr').find('td:nth-child(9)').text();
        
        // Set values in the modal fields
        $('#editId').val(id);
        $('#editUsername').val(username);
        $('#editName').val(name);
        $('#editActive').val(active);
        $('#editBan').val(ban);
        $('#editEmail').val(email);
        $('#editSdt').val(sdt);
        $('#editVnd').val(vnd);
        $('#editTongnap').val(tongnap);

        // Show the modal
        $('#editModal').modal('show');
    }

    
    $('#saveChangesBtn').click(function() {
        var id = $('#editId').val();
        var username = $('#editUsername').val();
        var name = $('#editName').val();
        var active = $('#editActive').val();
        var ban = $('#editBan').val();
        var email = $('#editEmail').val();
        var sdt = $('#editSdt').val();
        var vnd = $('#editVnd').val();
        var tongnap = $('#editTongnap').val();

        // Send data to server using AJAX
        $.ajax({
            url: '../admin/action/user_controller.php',
            method: 'post',
            data: {
                action: 'edit',
                id: id,
                username: username,
                name: name,
                active: active,
                ban: ban,
                email: email,
                sdt: sdt,
                vnd: vnd,
                tongnap: tongnap
            },
            success: function(response) {
                console.log(response);
                $('#editModal').modal('hide');
                location.reload(); // Reload the page to reflect changes
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred. Please try again later.');
            }
        });
    });

</script>


<!-- Xóa người dùng -->
<script>
$(document).ready(function() {
    // Xử lý sự kiện khi nhấn nút Xóa
    $('.delete-btn').click(function() {
        
        var id = $(this).data('id');
        if (confirm('Bạn có chắc chắn muốn xóa người dùng này không?')) {
            $.ajax({
                url: '../admin/action/user_controller.php',
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

