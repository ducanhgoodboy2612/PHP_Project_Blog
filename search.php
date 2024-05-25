<?php
require ("action/home_post.php");
$db = new home_controller();

$result = [];
if (isset($_GET['query'])) {
  
  try {
    $query = $_GET['query'];
    $result = $db->searchBlogs($query);

    // if ($results) {
    //     foreach ($results as $result) {
    //         echo '<div>' . $result['title'] . '</div>';
    //     }
    // } else {
    //     echo 'No results found.';
    // }
  } catch (Exception $e) {
    echo 'Có lỗi xảy ra: ' . $e->getMessage();
  }
}


// if (isset($_POST['cmd'])) {
//   try {
//     $keyword = $_POST['keyword'];
//     $results = $db->searchBlogs($keyword);

//     echo '<script>alert("Sản phẩm đã được cập nhật thành công!");</script>';
//   } catch (Exception $e) {
//     echo '<script>alert("Có lỗi xảy ra: ' . $e->getMessage() . '");</script>';
//   }
//   $dir_url = 'http://' . $_SERVER['HTTP_HOST'] . '/index.php';

//   header('Location: ' . $dir_url);
// }



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

//     $controller = new home_controller();
//     $results = $controller->searchBlogs($keyword);

//     if (empty($results)) {
//         echo "<p>No results found for '" . htmlspecialchars($keyword) . "'</p>";
//     } 
// } else {
//     echo "<p>No search keyword provided.</p>";
// }

?>






<?php require_once ('layout/client/header.php'); ?>
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
                          <li><a href="danhmuc.php?cate_id=<?= $sp['id'] ?>"><?= $sp["name"] ?></a></li>
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

<?php require_once ('layout/client/footer.php'); ?>