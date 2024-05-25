<?php require_once('layout/client/head.php');?>
    <main class="main">
        <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success text-center"><?php echo htmlspecialchars($_GET['success']); ?></div>
        <?php endif; ?>
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-danger text-center"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Giỏ hàng<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="giohang">Giỏ hàng</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                        <th>Giá</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                            foreach($_SESSION['cart'] as $item) {
                                                ?>
                                                    <tr>
                                                        <td class="product-col">
                                                            <div class="product">
                                                                <figure class="product-media">
                                                                    <a href="chitiet?id=<?php echo $item['id']; ?>">
                                                                        <img src="uploads/<?php echo $item['photo']; ?>" alt="Product image" style="height: 120px; widht: 115px">
                                                                    </a>
                                                                </figure>
                                                            </div><!-- End .product -->
                                                        </td>
                                                        <td>
                                                            <a href="chitiet?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a>
                                                        </td>
                                                        <td class="price-col"><?php echo number_format($item["price"], 0, ',', '.') . ' đ'; ?></td>
                                                        <td class="remove-col">
                                                            <form action="action/cart_post.php" method="post">
                                                                <input type="hidden" name="action" value="remove">   
                                                                <input type="hidden" name="sanpham_id" value="<?php echo $item['id']; ?>">
                                                                <button type="submit" class="btn-remove" title="Remove"><i class="icon-close"></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                        ?>
                                                <div class="alert alert-info">Giỏ hàng của bạn đang trống</div>
                                        <?php
                                        }
                                    ?>
                                </tbody>
                            </table><!-- End .table table-wishlist -->
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Tổng tiền</h3><!-- End .summary-title -->
                                <table class="table table-summary">
                                    <tbody>
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

	                			<a href="thanhtoan" class="btn btn-outline-primary-2 btn-order btn-block">THANH TOÁN</a>
                            </div><!-- End .summary -->

                            <a href="index" class="btn btn-outline-dark-2 btn-block mb-3"><span>TIẾP TỤC MUA CODE</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
<?php require_once('layout/client/footer.php');?>
