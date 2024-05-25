<?php
require ("action/home_post.php");
$db = new home_controller();

$result = $db->getBlogs();
$cates = $db->getAllCate();


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- suchana/index.html  22 Nov 2019 04:08:03 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Suchana is an online blog, news & magazine dedicated to different categories html template">

    <title>Suchana - Blog, News & Magazine HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="assets/css/default.css" rel="stylesheet" type="text/css">   -->

    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="assets/css/plugin.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="home-default">

    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--*Header*-->
    <header id="inner-navigation">



        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <h1><a href="index.html"><img src="images/logo.png"></a></h1>
                </div>

                <div id="navbar" class="navbar-nav-wrapper text-center">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li class="active"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="#">Home List View</a>
                                    <ul>
                                        <li><a href="index-1.html">Home RightSidebar</a></li>
                                        <li><a href="index-2.html">Home Fullwidth</a></li>
                                        <li><a href="index-3.html">Home LeftSidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Home Grid View</a>
                                    <ul>
                                        <li><a href="index-4.html">Home RightSidebar</a></li>
                                        <li><a href="index.html">Home Fullwidth</a></li>
                                        <li><a href="index-5.html">Home LeftSidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="mag.html">Magazine</a>
                                    <ul>
                                        <li><a href="mag.html">Default Magazine</a></li>
                                        <li><a href="mag-food.html">Food Magazine</a></li>
                                        <li><a href="mag-fashion.html">Fashion Magazine</a></li>
                                        <li><a href="mag-travel.html">Travel Magazine</a></li>
                                        <li><a href="mag-tech.html">Tech Magazine</a></li>
                                        <li><a href="mag-photo.html">Photography Magazine</a></li>
                                        <li><a href="mag-fitness.html">Fitness Magazine</a></li>
                                        <li><a href="mag-sports.html">Sports Magazine</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="error.html">Error Page</a></li>
                                <li><a href="#">Detail Page</a>
                                    <ul>
                                        <li><a href="blog-details.html">Detail 1</a></li>
                                        <li><a href="blog-details1.html">Detail 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="author.html">Author Page</a></li>
                                <li><a href="#">Category</a>
                                    <ul>
                                        <li><a href="category.html">Category Lists</a></li>
                                        <li><a href="category-detail.html">Category Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Tags</a>
                                    <ul>
                                        <li><a href="tag.html">Tag Lists</a></li>
                                        <li><a href="tag-detail.html">Tag Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Dashboard <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="dashboard-my-profile.html">Dashboard Profile</a></li>
                                <li><a href="dashboard-booking.html">Dashboard Bookings</a></li>
                                <li><a href="dashboard-history.html">Dashboard History</a></li>
                                <li><a href="dashboard-list.html">Dashboard Listing</a></li>
                                <li><a href="dashboard-addtour.html">Dashboard Add Tour</a></li>
                                <li><a href="dashboard-reviews.html">Dashboard Reviews</a></li>
                            </ul>
                        </li>

                        <li><a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <li><a href="shop.html">Shop List</a></li>
                                <li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="#search" class="mt_search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>

            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->

    <!-- Slider -->
    <section id="mt_banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg2.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Every Next Level of Your Life Will Demand a Different You</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg1.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">The creation of beauty is art to break rules and barriers</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg3.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Get Scary With This Vegan Spooky Spider Crackle Cake!</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </section>
    <!-- End Slider -->

    <!--* Blog*-->
    <section id="mt_blog" class="light-bg">
        <div class="container">
            <div class="blog_post_sec blog_post_inner">
                <div class="row">

                    <?php
                    $i = 1;
                    foreach ($result as $sp) {
                        ?>
                        <div class="col-md-4 col-sm-12 mar-bottom-30">
                            <div class="blog-post_wrapper image-wrapper">
                                <div class="blog-post-image">
                                    <img src="<?= htmlspecialchars($sp['image']) ?>" alt="image"
                                        class="img-responsive center-block post_img" />
                                </div>
                                <div class="post-content">
                                    <div class="post-category">
                                        <ul>
                                            <li class="cat-yellow"><a href="#" class="white">Populor</a></li>
                                            <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="post-date">
                                        <p><a href="#"><?= $sp["updated_at"] ?></a></p>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="blog-details.php?proid=<?= $sp['id'] ?>" class="white"
                                            style="color: white"><?= $sp["title"] ?></a>
                                    </h2>
                                    <div class="item-meta white">
                                        <span>by</span>
                                        <a class="author-name white" href="author.html"
                                            style="color: white"><?= $sp["author"] ?></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_102.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow mar-0"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">Adjusting to Your Home is no Different than a
                                        New Country</a>
                                </h2>

                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper front-wrapper bg-green">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Thought My Glasses Made Me
                                        Unattractive</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 mar-bottom-30">
                        <!--* ads*-->
                        <div class="ads-banner-img text-center">
                            <img src="images/ads.jpg" alt="ads">
                        </div>
                        <!--* End ads*-->
                    </div>

                    <div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_13.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Moved Across the Country and Never
                                        Looked Back</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_101.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green mar-0"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">I Thought My Glasses Made Me Unattractive</a>
                                </h2>

                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper front-wrapper bg-orange">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Should Have Said to Your Weight Loss</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_18.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an
                                        End? </a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_07.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Look at life with the eyes of a child</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_103.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue mar-0"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">Slice of Tokyo: How Japan Became a Pizza
                                        Hotspot</a>
                                </h2>

                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_08.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Sports</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">How to Find Hidden Cameras in Your Airbnb,
                                        and Anywhere
                                        Else</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_13.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an
                                        End?</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="images/blog-listing/blog_15.jpg" alt="image"
                                    class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Beauty is Gene Deep but give me those
                                        little imperfections
                                        Going</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="blog-button text-center">
                            <button class="btn-blog">Load More <i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_12.jpg" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div>
    </div>

    <!--*Footer*-->
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
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg"
                                            alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg"
                                            alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg"
                                            alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg"
                                            alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg"
                                            alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg"
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
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title=""
        data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>

    <!-- search popup -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!--*Scripts*-->
    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/custom-nav.js"></script>
    <script src="js/main.js"></script> -->
</body>


<!-- suchana/index.html  22 Nov 2019 04:08:35 GMT -->

</html>