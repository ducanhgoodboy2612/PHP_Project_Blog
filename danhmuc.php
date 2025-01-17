<?php
require ("action/home_post.php");
$db = new home_controller();

$cates = $db->getAllCate();

if (isset($_GET['cate_id'])) {
    $id = $_GET['cate_id'];
    $result = $db->getProduct_Cate($id);
    //echo "$result[Product_Name]";
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">


<!-- suchana/index-1.html  22 Nov 2019 04:08:49 GMT -->

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

  <!--Default CSS-->
  <link href="assets/css/default.css" rel="stylesheet" type="text/css">

  <!--Custom CSS-->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">

  <!--Plugin CSS-->
  <link href="assets/css/plugin.css" rel="stylesheet" type="text/css">

  <!--Font Icons-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="home-1">
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
          <h1><a href="index.html"><img src="assets/images/logo.png"></a></h1>
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
                    <li><a href="index-5.html">Home Fullwidth</a></li>
                    <li><a href="index-6.html">Home LeftSidebar</a></li>
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
          <div class="slide-inner" style="background-image:url(assets/images/slider/bg2.jpg)"></div>
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
          <div class="slide-inner" style="background-image:url(assets/images/slider/bg1.jpg)"></div>
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
          <div class="slide-inner" style="background-image:url(assets/images/slider/bg3.jpg)"></div>
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
  <section id="mt_blog" class="">
    <div class="container">
      <div class="row">


        <div class="col-md-9 col-sm-12 width70">
          <div class="blog_post_sec">
            <?php

            foreach ($result as $sp) {
                ?>
                  <div class="blog-post_wrapper">
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
                        <a href="blog-details.html" class=""><?= $sp["title"] ?>
                          </a>
                      </h2>
                      <div class="item-meta">
                        <span>by</span>
                        <a class="author-name" href="author.html"><?= $sp["author"] ?></a>
                      </div>

                    </div>
                  </div>

                  <?php
            }
            ?>

            <!-- <div class="blog-post_wrapper">
                <div class="post-content post-blank">
                  <div class="post-category">
                    <ul>
                      <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                      <li class="cat-green"><a href="#" class="white">Health</a></li>
                    </ul>
                  </div>
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">The future of architecture is culture</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="post-content text-right">
                  <div class="post-category">
                    <ul>
                      <li class="cat-green"><a href="#" class="white">Health</a></li>
                    </ul>
                  </div>
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">I think it's the responsibility of a designer to try to break
                      rules and barriers</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
                <div class="blog-post-image">
                  <img src="assets/images/blog-listing/blog_02.jpg" alt="image" class="img-responsive center-block post_img" />
                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="blog-post-image">
                  <img src="assets/images/blog-listing/blog_03.jpg" alt="image" class="img-responsive center-block post_img" />
                </div>
                <div class="post-content">
                  <div class="post-category">
                    <ul>
                      <li class="cat-yellow"><a href="#" class="white">Populor</a></li>
                      <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                    </ul>
                  </div>
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">I'm passionate about food, the tradition of it, cooking it,
                      sharing it</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>

                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="post-content post-blank text-right">
                  <div class="post-category">
                    <ul>
                      <li class="cat-yellow"><a href="#" class="white">Populor</a></li>
                      <li class="cat-green"><a href="#" class="white">Health</a></li>
                    </ul>
                  </div>
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">That evening at bali beach was wounderful then any other
                      evening</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="post-content text-right">
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
                    <a href="blog-details.html" class="">I'm passionate about food, the tradition of it, cooking it,
                      sharing it</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
                <div class="blog-post-image">
                  <img src="assets/images/blog-listing/blog_05.jpg" alt="image" class="img-responsive center-block post_img" />
                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="blog-post-image">
                  <img src="assets/images/blog-listing/blog_04.jpg" alt="image" class="img-responsive center-block post_img" />
                </div>
                <div class="post-content">
                  <div class="post-category">
                    <ul>
                      <li class="cat-green"><a href="#" class="white">Health</a></li>
                      <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                    </ul>
                  </div>
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">Look at life with the eyes of a child</a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
              </div>

              <div class="blog-post_wrapper">
                <div class="post-content text-right">
                  <div class="post-date">
                    <p><a href="#">15th August 2019</a></p>
                  </div>
                  <h2 class="entry-title">
                    <a href="blog-details.html" class="">I'm passionate about food, the tradition of it, </a>
                  </h2>
                  <div class="item-meta">
                    <span>by</span>
                    <a class="author-name" href="author.html">Admin Jackson</a>
                  </div>
                </div>
                <div class="blog-post-image">
                  <img src="assets/images/blog-listing/blog_06.jpg" alt="image" class="img-responsive center-block post_img" />
                </div>
              </div> -->

            <div class="pagination__wrapper">
              <ul class="pagination">
                <li><button class="prev" title="previous page">&#10094;</button></li>
                <li><button title="first page - page 1">1</button></li>
                <li><button class="active" title="current page">2</button></li>
                <li><button>3</button></li>
                <li><button class="next" title="next page">&#10095;</button></li>
              </ul>
            </div>
          </div>
        </div>



        <div class="col-md-3 col-sm-12 width30">
          <div class="sidebar">

            <!-- widget author -->
            <div class="widget widget-author text-center">
              <div class="widget-image">
                <img src="assets/images/blog/author.png" alt="...">
              </div>
              <div class="widget-author-content">
                <div class="widget-author mar-bottom-15">
                  <h3 class="mar-bottom-5">Blork Lewson</h3>
                  <span class="author-profession">Author Blogger</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <div class="follow_us mar-bottom-15">
                  <ul class="social_icons">
                    <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
                <div class="widget-author-signature">
                  <img src="assets/images/blog/signature.png" alt="...">
                </div>
              </div>
            </div>

            <!-- widget category -->
            <div class="widget widget-category">
              <div class="widget-content">
                <div class="widget-title">
                  <h3 class="white">Category</h3>
                </div>
                <div class="widget-category-main">
                  <ul class="widget-category-list">
                    <?php

                    foreach ($cates as $sp) {
                        ?>
                          <li><a href="index.php?cate_id=<?= $sp['id'] ?>"><?= $sp["name"] ?></a></li>
                          <!-- <li><a href="#">Health</a></li>
                      <li><a href="#">Article</a></li>
                      <li><a href="#">Travel</a></li>
                      <li><a href="#">Uncategorised</a></li>
                      <li><a href="#">Popular</a></li>
                      <li><a href="#">World</a></li>
                      <li><a href="#">Stylish</a></li> -->
                        <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>

            <!-- widget popular post -->
            <div class="widget widget-popular-post">
              <div class="widget-content">
                <div class="widget-title">
                  <h3 class="white">Popular Posts</h3>
                </div>
                <div class="widget-popular-post-main">
                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-1.jpg" alt=".....">   
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">That Evening At Bali Beach Was Wounderful</a></h4>
                    </div>
                  </div>

                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-2.jpg" alt=".....">
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">5 Reasons Why Ladies Prefer To Have Brown Hair</a></h4>
                    </div>
                  </div>

                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-3.jpg" alt=".....">
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">This post has just gone viral with many views</a></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- widget tags -->
            <div class="widget widget-tags">
              <div class="widget-content">
                <div class="widget-title">
                  <h3 class="white">Trending Tags</h3>
                </div>
                <div class="widget-tags-main">
                  <a href="#" class="">Beach</a>
                  <a href="#" class="">Dress</a>
                  <a href="#" class="">Food</a>
                  <a href="#" class="">Fashion</a>
                  <a href="#" class="">Gadget</a>
                  <a href="#" class="">Holiday</a>
                  <a href="#" class="">Nature</a>
                  <a href="#" class="">Photography</a>
                  <a href="#" class="">Tips</a>
                  <a href="#" class="">Travel</a>
                </div>
              </div>
            </div>
            <!-- widget popular post -->
            <div class="widget widget-popular-post">
              <div class="widget-content">
                <div class="widget-title">
                  <h3 class="white">Trending Posts</h3>
                </div>
                <div class="widget-popular-post-main">
                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-1.jpg" alt=".....">
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">Is It Safe to Have These Things Listening to Us?</a></h4>
                    </div>
                  </div>

                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-2.jpg" alt=".....">
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">8 Most Awesome Gadgets For 2019</a></h4>
                    </div>
                  </div>

                  <div class="widget-posts">
                    <div class="post-thumb">
                      <img src="assets/images/blog/r-post-3.jpg" alt=".....">
                    </div>
                    <div class="post-title">
                      <div class="widget-cats">
                        <a href="#">Technology</a>
                        <a href="#">Travel</a>
                      </div>
                      <h4><a href="#">Top 15 Social Network App You Need To Travel</a></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="widget widget-advertisement">
              <div class="widget-content">
                <div class="widget-title">
                  <h3 class="white">Advertisement</h3>
                </div>
                <div class="widget-ads-image text-center">
                  <img src="assets/images/blog-listing/blog_07.jpg" alt="ads">
                </div>
              </div>
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
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_01.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_02.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_03.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_04.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_05.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_06.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_07.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_08.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_09.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_10.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_11.jpg" alt="Image"></a></div>
        <div class="col-sm-2 col-xs-6"><a href="#"><img src="assets/images/insta/insta_12.jpg" alt="Image"></a></div>
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
                <form target="_self" method="post" action="https://cyclonethemes.com/demo/html/suchana/email"
                  novalidate="">
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
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-4 col-xs-6"><a href="#"><img src="assets/images/insta/insta_06.jpg" alt="Image"></a></div>
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
    <button type="button" class="close">×</button>
    <form>
      <input type="search" value="" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>

  <!--*Scripts*-->
  <!-- Latest jquery -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <!-- Plugin Jquery -->
  <script src="assets/js/plugin.js"></script>
  <!-- custom nav jquery -->
  <script src="assets/js/custom-nav.js"></script>
  <!-- main default Jquery -->
  <script src="assets/js/main.js"></script>
</body>


<!-- suchana/index-1.html  22 Nov 2019 04:10:47 GMT -->

</html>