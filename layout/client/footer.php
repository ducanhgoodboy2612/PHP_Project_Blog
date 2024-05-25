<!--*Footer*-->
<!-- <div id="search23">
    <button type="button" class="close">×</button>
    <form id="searchForm">
        <input type="search" name="keyword" value="" placeholder="type keyword(s) here" />
        <button type="submit" name="cmd" class="btn btn-primary">Search2</button>
    </form>
</div> -->
<div id="results"></div>
<footer id="mt_footer" class="mt_footer_style1">
    <div class="container">
        <div class="mt_footer_col">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="mt_footer_about">
                        <h2><a href="#">Suchana</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="mt_footer_list">
                        <h3>Quick Links</h3>
                        <ul class="footer-quick-links-4">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="mt_footer_newsletter">
                        <h3>Newsletter</h3>
                        <div class="mailpoet_form">
                            <form target="_self" method="post"
                                action="https://cyclonethemes.com/demo/html/suchana/email" novalidate="">
                                <label>Email Address:</label>
                                <input type="email" class="mailpoet_text" name="mail" title="Email"
                                    placeholder="Please specify a valid email address.">

                                <div class="blog-button">
                                    <button class="btn-blog">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="mt_footer_gallery">
                        <h3>Amazing Gallery</h3>
                        <div class="row">
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_01.jpg"
                                        alt="Image"></a></div>
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_02.jpg"
                                        alt="Image"></a></div>
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_03.jpg"
                                        alt="Image"></a></div>
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_04.jpg"
                                        alt="Image"></a></div>
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_05.jpg"
                                        alt="Image"></a></div>
                            <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_06.jpg"
                                        alt="Image"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt_footer_copy">
            <div class="copy_txt pull-left">
                <p class="mar-0"><a href="templateshub.net">Templateshub</a></p>
            </div>
            <div class="follow_us pull-right">
                <ul class="social_icons">
                    <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<!--* End Footer*-->

<!-- back to top -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
    <span class="fa fa-arrow-up"></span>
</a>

<!-- search popup -->

<div id="search">
    <button type="button" class="close"></button>
    <form id="searchForm" method="get" action="search.php">
        <input type="search" name="query" value="" placeholder="type keyword(s) here" required /> <button type="button"
            id="searchButton" class="btn btn-primary">Search</button>
    </form>
</div>
<script>
    document.getElementById('searchButton').addEventListener('click', function () {
    
        var query = document.querySelector('#searchForm input[name="query"]').value;
        // Thực hiện các thao tác tìm kiếm tại đây với biến 'query
        // Thay đổi thuộc tính action của form document.getElementById('searchForm').action
        // Gửi form

        document.getElementById('searchForm').action = "search.php?query=" + encodeURIComponent(query);
        
        document.getElementById('searchForm').submit();
    });
</script>


<script>
    document.getElementById('loginButton').addEventListener('click', function (event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit
        
        var form = document.getElementById('loginForm');
        var username = form.querySelector('input[name="username"]').value;
        var password = form.querySelector('input[name="password"]').value;

        console.log(username);
        console.log(password);  

        // Thiết lập action của form để chuyển hướng sang index.php
        form.action = "test_login.php";

        // Tạo một input ẩn để gửi username và password bằng phương thức POST
        var inputUsername = document.createElement('input');
        inputUsername.type = 'hidden';
        inputUsername.name = 'username';
        inputUsername.value = username;
        form.appendChild(inputUsername);

        var inputPassword = document.createElement('input');
        inputPassword.type = 'hidden';
        inputPassword.name = 'password';
        inputPassword.value = password;
        form.appendChild(inputPassword);

        // Gửi form
        form.submit();
    });
</script>

<script>
    document.getElementById('registerButton').addEventListener('click', function (event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit
        
        var form = document.getElementById('registerForm');
        var name = form.querySelector('input[name="name"]').value;
        var email = form.querySelector('input[name="email"]').value;
        var phoneNumber = form.querySelector('input[name="phone_number"]').value;
        var username = form.querySelector('input[name="username"]').value;
        var password = form.querySelector('input[name="password"]').value;
        var confirmPassword = form.querySelector('input[name="confirm_password"]').value;

        // Kiểm tra xác nhận mật khẩu
        if (password !== confirmPassword) {
            alert("Password and confirm password do not match.");
            return; // Dừng xử lý nếu mật khẩu không khớp
        }

        // Thiết lập action của form để gửi dữ liệu đến register.php
        form.action = "register_check.php";

        // Gửi form
        form.submit();
    });
</script>



<!--*Scripts*-->
<!-- Latest jquery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!-- Plugin Jquery -->
<script src="assets/js/plugin.js"></script>
<!-- custom nav jquery -->
<script src="assets/js/custom-nav.js"></script>
<!-- main default Jquery -->
<script src="assets/js/main.js"></script>


<script>
        document.addEventListener("DOMContentLoaded", function() {
            var messageDiv = document.getElementById("registerMessage");
            if (messageDiv.textContent.trim() !== "") {
                messageDiv.style.display = "block";
                setTimeout(function() {
                    messageDiv.style.display = "none";
                }, 3000); // 3 giây
            }
        });
    </script>

</body>


<!-- suchana/index-1.html  22 Nov 2019 04:10:47 GMT -->

</html>