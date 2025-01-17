
<?php require_once ('../layout/admin/header.php'); ?>

    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  

            <div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <a href="dashboard.html"><img src="/assets/images/logo.png" alt="logo"></a>
                </div>
                <div class="content-right pull-right">
                    <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <img src="/assets/images/comment.jpg" alt="">   
                                </div>
                                <div class="dash-content">
                                    <h4>Loural Teak</h4>
                                    <span>Post Manager</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li>
                            <li><a href="#"><i class="sl sl-icon-user"></i>Profile</a></li>
                            <li><a href="#"><i class="sl sl-icon-lock"></i>Change Password</a></li>
                            <li><a href="#"><i class="sl sl-icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-envelope-open"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                        <h4> 23 Messages</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="all-noti"><a href="#">See all messages</a></p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 599 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="/assets/images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="/assets/images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="/assets/images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <p class="all-noti"><a href="#">See all notifications</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li class="active"><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                        <li><a href="dashboard-addtour.html"><i class="sl sl-icon-plus"></i> Add Post</a></li>
                        <li>
                            <a href="blogs.php"><i class="sl sl-icon-layers"></i> Post Listing</a>
                            <ul>
                                <li><a href="dashboard-list.html">Active <span class="nav-tag green">6</span></a></li>
                                <li><a href="dashboard-list.html">Pending <span class="nav-tag yellow">1</span></a></li>
                                <li><a href="dashboard-list.html">Expired <span class="nav-tag red">2</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Post List</a></li>
                        <li><a href="dashboard-history.html"><i class="sl sl-icon-folder"></i> History</a></li>
                        <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li>
                        <li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="dashboard-content">
                <div class="row">

                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-1">
                            <div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                            <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-2">
                            <div class="dashboard-stat-content"><h4>726</h4> <span>Total Posts</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                            <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                        </div>
                    </div>


                    <!-- Item -->
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-3">
                            <div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                            <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="dashboard-stat color-4">
                            <div class="dashboard-stat-content"><h4>126</h4> <span>Bookmarks</span></div>
                            <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                            <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Recent Posts</h4>
                            <div class="table-box">
                                <table class="basic-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Post ID</th>
                                            <th>Title</th>
                                            <th>No of Post</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C001</td>
                                            <td>Dubai</td>
                                            <td>5</td>
                                            <td>245</td>
                                        </tr>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C081</td>
                                            <td>Grece - Zakynthos</td>
                                            <td>5</td>
                                            <td>245</td>
                                        </tr>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C001</td>
                                            <td>Bulgary - Sunny Beach</td>
                                            <td>5</td>
                                            <td>245</td>
                                        </tr>
                                        <tr>
                                            <td>01/01/2017</td>
                                            <td class="t-id">C001</td>
                                            <td>France - Paris</td>
                                            <td>5</td>
                                            <td>245</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">      
                    <!-- Recent Activity -->
                    <div class="col-lg-7 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box with-icons margin-top-20">
                            <h4 class="gray">Recent Activities</h4>
                            <ul>
                                <li>
                                    <i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li>

                                <li>
                                    <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="5.0"></div> on <strong><a href="#">Burger House</a></strong>
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li>

                                <li>
                                    <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li>

                                <li>
                                    <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="3.0"></div> on <strong><a href="#">Airport</a></strong>
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li>

                                <li>
                                    <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                    <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-xs-12 traffic">
                        <div class="dashboard-list-box margin-top-20 user-list">
                            <h4 class="gray">User List</h4>
                            <ul>
                                <li>
                                    <div class="user-list-item">
                                        <div class="user-list-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="user-list-content">
                                            <h4>Loural Teak</h4>
                                            <span>Post Manager</span>
                                        </div>
                                        <div class="user-btns">
                                            <a href="#" class="button">View</a>
                                            <a href="#" class="button">Edit</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-list-item">
                                        <div class="user-list-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="user-list-content">
                                            <h4>Jim Gordon</h4>
                                            <span>Post Manager</span>
                                        </div>
                                        <div class="user-btns">
                                            <a href="#" class="button">View</a>
                                            <a href="#" class="button">Edit</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-list-item">
                                        <div class="user-list-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="user-list-content">
                                            <h4>Loural Teak</h4>
                                            <span>Post Manager</span>
                                        </div>
                                        <div class="user-btns">
                                            <a href="#" class="button">View</a>
                                            <a href="#" class="button">Edit</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-list-item">
                                        <div class="user-list-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="user-list-content">
                                            <h4>Loural Teak</h4>
                                            <span>Post Manager</span>
                                        </div>
                                        <div class="user-btns">
                                            <a href="#" class="button">View</a>
                                            <a href="#" class="button">Edit</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="user-list-item">
                                        <div class="user-list-image">
                                            <img src="/assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="user-list-content">
                                            <h4>Joseph Dean</h4>
                                            <span>Post Manager</span>
                                        </div>
                                        <div class="user-btns">
                                            <a href="#" class="button">View</a>
                                            <a href="#" class="button">Edit</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- site traffic -->
                    <div class="col-lg-4 col-md-4 mar-b-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Site Traffic</h4>
                            <div id="chartContainer" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 mar-b-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Bar Chart</h4>
                            <div id="barchart" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Search Engine</h4>
                            <div id="piechart" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
                <p>2019 <i class="fa fa-copyright" aria-hidden="true"></i> Suchana by <a href="https://www.cyclonethemes.com/" target="_blank">Cyclone Themes</a></p>
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
<?php require_once ('../layout/admin/footer.php'); ?>