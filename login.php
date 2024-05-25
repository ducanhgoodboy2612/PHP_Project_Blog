<?php require_once ('layout/client/header.php'); ?>
<!--* End Header*-->




<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center bg-orange">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Login/Register Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login/Register Page</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- BreadCrumb Ends -->

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-form">
                    <form id="loginForm" action="test_login.php" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-title">
                                    <h2>Login</h2>
                                    <p>Register if you don't have an account.</p>
                                </div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"
                                    placeholder="Enter username or email id">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter correct password">
                            </div>

                            <div class="col-xs-12">
                                <div class="comment-btn mar-bottom-20">
                                    <button type="button" id="loginButton" class="btn-blog">Login</button>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox-outer pull-left">
                                    <input type="checkbox" name="remember_me" value="1"> Remember Me?
                                </div>
                                <div class="login-accounts pull-right">
                                    <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-6">
                <div class="register-form">
                    <form id="registerForm" action="" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-title">
                                    <h2>Register</h2>
                                    <p>Enter your details to be a member.</p>
                                </div>
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" id="Name" placeholder="Enter full name">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="abc@xyz.com">
                            </div>
                            <div class="form-group col-xs-12">
                                <label>Phone Number:</label>
                                <input type="text" class="form-control" name="phone_number" id="date1" placeholder="Select Date">
                            </div>
                             <div class="form-group col-xs-12">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="username" id="date1" placeholder="Select Date">
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Select Password :</label>
                                <input type="password" class="form-control" name="password" id="date" placeholder="Enter Password">
                            </div>
                            <div class="form-group col-xs-6 col-left-padding">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" name="confirm_password" id="phnumber"
                                    placeholder="Re-enter Password">
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms
                                        and conditions.</a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="comment-btn mar-top-30">
                                    <button type="button" id="registerButton" class="btn-blog">Login</button>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div id="registerMessage" style="margin-top: 20px;"></div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mt_instagram mar-bottom-20">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_01.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_02.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_03.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_04.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_05.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_06.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_07.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_08.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_09.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_10.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_11.jpg" alt="Image"></a>
            </div>
            <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_12.jpg" alt="Image"></a>
            </div>
        </div>
        <div class="sectio-title">
            <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
        </div>
    </div>
</div>

<!--*Footer*-->
<?php require_once ('layout/client/footer.php'); ?>