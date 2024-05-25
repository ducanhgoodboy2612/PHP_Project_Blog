<?php 
    require_once('action/check_login.php');
    require_once('action/checkout_post.php');
    require_once('layout/client/head.php');
?>
    <main class="main">
        <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success text-center"><?php echo htmlspecialchars($_GET['success']); ?></div>
        <?php endif; ?>
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-danger text-center"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Thanh toán<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="giohang">Giỏ hàng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="action/checkout_post.php" method="POST">
                        <input type="hidden" name="action" value="checkout">    
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="checkout-title">Thông tin người dùng</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Tài khoản</label>
                                        <input type="text" class="form-control" name="" value="<?php echo $user_info['username']; ?>" readonly>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Tên<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $user_info['name']; ?>" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $user_info['email']; ?>" required>

                                <label>Số điện thoại<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="sdt" value="<?php echo $user_info['sdt']; ?>" required>
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Đơn hàng của bạn</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Giá</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                    foreach($_SESSION['cart'] as $item) {
                                                        ?>
                                                            <tr>
                                                                <td><a href="chitiet?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></td>
                                                                <td><?php echo number_format($item["price"], 0, ',', '.') . ' đ'; ?></td>
                                                            </tr>
                                                        <?php
                                                    }
                                                } 
                                            ?>
                                        
                                            <tr class="summary-subtotal">
                                                <td>Tổng:</td>
                                                <td>
                                                    <?php
                                                        $totalPrice = 0;

                                                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                                            foreach($_SESSION['cart'] as $item) {
                                                                $totalPrice += $item['price']; // Cộng dồn giá của từng sản phẩm vào tổng giá
                                                            }
                                                        }

                                                        // Hiển thị tổng giá
                                                        echo '$' . number_format($totalPrice, 0, ',', '.') . ' đ'; '';
                                                    ?>
                                                </td>
                                            </tr><!-- End .summary-subtotal -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Thanh toán</span>
                                        <span class="btn-hover-text">Chấp nhận thanh toán</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
<?php require_once('layout/client/footer.php');?>  