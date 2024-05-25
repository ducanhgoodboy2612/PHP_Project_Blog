<?php require_once('layout/client/head.php');?>
    <main class="main">
        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-danger text-center"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
        <!-- Sign in / Register Modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" href="login" aria-controls="register" aria-selected="false">Đăng nhập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="register-tab" aria-controls="register" aria-selected="false">Đăng Ký</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">                                                         
                                <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">

                                    <form action="action/account_post.php" method="POST">  
                                        <input type="hidden" name="action" value="signup">       
                                        <div class="form-group">
                                            <label for="username">Tài khoản <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tài khoản" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Tên <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="register-password" name="password" placeholder="Nhập mật khẩu" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="confirmPassword">Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Nhập lại mật khẩu" required>
                                        </div>

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Đăng Ký</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">Tôi đồng ý với <a href="#">chính sách dev24h</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>

                                    <div class="form-choice">
                                        <p class="text-center">hoặc đăng ký bằng</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Đăng ký Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Đăng ký Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->

                                    <!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->

                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </main>
<?php require_once('layout/client/footer.php');?>  