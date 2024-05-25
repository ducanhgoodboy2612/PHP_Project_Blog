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
                <h1 class="page-title">Chi tiết 
                    <?php
                        include "action/detail_post.php";
                        if(isset($sanpham)) {
                            echo '<span>' . $sanpham['name'] . '</span>';
                        } else {
                            echo " không tồn tại.";
                        }
                    ?>
                </h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <?php
            include "action/detail_post.php";
                if($sanpham){
                    ?>
                    <div class="page-content">
                        <div class="container">
                            <div class="product-details-top mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-gallery">
                                            <figure class="product-main-image">
                                                <img id="product-zoom" src="uploads/<?php echo $sanpham['photo']; ?>" alt="product image">
                                            </figure><!-- End .product-main-image -->

                                            <!-- <div id="product-zoom-gallery" class="product-image-gallery">
                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/extended/1.jpg" data-zoom-image="assets/images/products/single/extended/1-big.jpg">
                                                    <img src="assets/images/products/single/extended/1-small.jpg" alt="product side">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/extended/2.jpg" data-zoom-image="assets/images/products/single/extended/2-big.jpg">
                                                    <img src="assets/images/products/single/extended/2-small.jpg" alt="product cross">
                                                </a>

                                                <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/extended/3.jpg" data-zoom-image="assets/images/products/single/extended/3-big.jpg">
                                                    <img src="assets/images/products/single/extended/3-small.jpg" alt="product with model">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/extended/4.jpg" data-zoom-image="assets/images/products/single/extended/4-big.jpg">
                                                    <img src="assets/images/products/single/extended/4-small.jpg" alt="product back">
                                                </a>

                                            </div> -->

                                            <!-- End .product-image-gallery -->
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="product-details">
                                            <h1 class="product-title"><?php echo $sanpham['name']; ?></h1><!-- End .product-title -->

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                            </div><!-- End .rating-container -->

                                            <div class="product-price">
                                                <?php echo number_format($sanpham["price"], 0, ',', '.') . ' đ'; ?>
                                            </div><!-- End .product-price -->

                                            <div class="product-content">
                                                <p><?php echo $sanpham['content']; ?></p>
                                            </div><!-- End .product-content -->

                                            <div class="details-filter-row details-row-size">
                                                <label>Loại:</label>

                                                <div class="product-nav">
                                                    <a href="danhmuc?id=<?php echo $sanpham['MaLoai']; ?>">
                                                        <?php echo $sanpham['TenLoai']; ?>
                                                    </a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .details-filter-row -->

                                            <div class="details-filter-row details-row-size">
                                                <label>Ngày đăng:</label>

                                                <div class="product-nav">
                                                    <?php echo $sanpham['create_at']; ?>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .details-filter-row -->                                           

                                            <div class="product-details-action">
                                                <a href="action/detail_post?action=addtocart&sanpham_id=<?php echo $sanpham['id']; ?>" class="btn-product btn-cart" title="Add to cart">
                                                    <span>Thêm vào giỏ</span>
                                                </a>                                      
                                            </div><!-- End .product-details-action -->                                      
                                        </div><!-- End .product-details -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .product-details-top -->
                        </div><!-- End .container -->

                        <div class="product-details-tab product-details-extended">
                            <div class="container">
                                <ul class="nav nav-pills justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Mô tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Đánh giá</a>
                                    </li>
                                </ul>
                            </div><!-- End .container -->

                            <div class="tab-content">    

                                <div class="tab-pane fade show active" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                    <div class="product-desc-content">
                                        <div class="container">
                                            <h3>Chi tiết</h3>
                                            <p><?php echo $sanpham['content']; ?></p>
                                        </div><!-- End .container -->
                                    </div><!-- End .product-desc-content -->
                                </div><!-- .End .tab-pane -->
                                
                                <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                    <div class="reviews">
                                        <div class="container">
                                            <h3>Đánh giá (2)</h3>

                                            <div class="review">
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <h4><a href="#">Samanta J.</a></h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .rating-container -->
                                                        <span class="review-date">6 days ago</span>
                                                    </div><!-- End .col -->
                                                    <div class="col">
                                                        <h4>Good, perfect size</h4>

                                                        <div class="review-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                                        </div><!-- End .review-content -->

                                                        <div class="review-action">
                                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                        </div><!-- End .review-action -->
                                                    </div><!-- End .col-auto -->
                                                </div><!-- End .row -->
                                            </div><!-- End .review -->

                                        </div><!-- End .container -->
                                    </div><!-- End .reviews -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .product-details-tab -->

                        <div class="container">
                            <h2 class="title text-center mb-4">Code tương tự</h2><!-- End .title text-center -->
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                <?php
                                    include "action/index_post.php";

                                    foreach ($sanphamsCungDanhMuc as $item) {
                                    ?>
                                    <div class="product product-7">
                                        <figure class="product-media">
                                            <span class="product-label label-new">New</span>
                                            <a href="chitiet?id=<?php echo $item['id']; ?>">
                                                <img src="uploads/<?php echo $sanpham['photo']; ?>" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>Thêm vào giỏ</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="danhmuc?id=<?php echo $item['MaLoai']; ?>"><?php echo $item["TenLoai"]; ?></a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="chitiet?id=<?php echo $item['id']; ?>"><?php echo $item["name"]; ?></a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price"><?php echo number_format($item["price"], 0, ',', '.') . ' đ'; ?></span>
                                                <!-- <span class="old-price">Was $349.99</span> -->
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 2 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->

                                    </div><!-- End .product -->
                                    <?php
                                    }
                                ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .container -->
                    </div><!-- End .page-content -->
                    <?php
                }
        ?>
    </main><!-- End .main -->

<?php require_once('layout/client/footer.php');?>  