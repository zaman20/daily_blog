<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
    <?php wp_head();?>
</head>
<body>
    <section id="header">
        <div class="container-fluid header-bg gx-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-area">
                            <div class="header-content">
                                <div class="header-logo">
                                    <i class="fa-solid fa-bars mobile-bar"></i>
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri();?>/img/Health_and_Fitness__2_-removebg-preview.png" alt="logo img">
                                    </a>
                                </div>
                                <div class="header-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="">Home</a></li>
                                                <li><a href="">Blogs</a></li>
                                                <li><a href="">Privacy Policy</a></li>
                                                <li><a href="">Terms & Conditions</a></li>
                                            </ul>
                                        </nav>
                                </div>
                                <div class="header-search">
                                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                                    <i class="fa-solid fa-xmark close-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="search-box">
                            <form action="" class="search-content">
                                <input type="text" class="search-text" placeholder="Search Here">
                                <input type="submit"  value="Search" class="search-btn">
                            </form>
                        </div>
                    </div>
                </div>

        </div>
       
    </section>
    
    <section id="main-content">
        <div class="main-website">
           <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <a href="single.html">
                    <div class="entry-post" style="background: url('<?php echo get_template_directory_uri();?>/img/auto-2179220.webp') no-repeat;">
                        <h2>The Titel</h2>
                        <p>Date:30 June 2023</p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="entry-two">
                        <div class="entry-box">
                            <img src="<?php echo get_template_directory_uri();?>/img/house-3963987.webp" alt="">
                            <a href="single.html"><h2>
                                Don’t Get Caught Unprotected: Learn About Property Insurance
                            </h2></a>
                        </div>
                        <div class="entry-box">
                            <img src="<?php echo get_template_directory_uri();?>/img/key-2323278.webp" alt="">
                            <a href="single.html"><h2>
                                Protect Your Assets: Get the Right Property Insurance
                            </h2></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- list post area -->
            <div class="row my-5">
                <div class="col-lg-8 col-md-12 col-sm-12 post-box">
                    <h3 class="title">Read More</h3>
                    <div class="box">
                        <div class="box-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/auto-2179220.webp" alt="">
                        </div>
                        <div class="box-content">
                            <a href="single.html">
                            <h2>Having car insurance is a necessity in many states and can be a …</h2>
                            </a>
                            <p>Having car insurance is a necessity in many states and can be a …</p>
                            <p><b>Daily Years- </b>30 June 2023</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/auto-2179220.webp" alt="">
                        </div>
                        <div class="box-content">
                            <h2>Having car insurance is a necessity in many states and can be a …</h2>
                            <p>Having car insurance is a necessity in many states and can be a …</p>
                            <p><b>Daily Years- </b>30 June 2023</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-img">
                            <img src="<?php echo get_template_directory_uri();?>/img/auto-2179220.webp" alt="">
                        </div>
                        <div class="box-content">
                            <h2>Having car insurance is a necessity in many states and can be a …</h2>
                            <p>Having car insurance is a necessity in many states and can be a …</p>
                            <p><b>Daily Years- </b>30 June 2023</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar">
                        <div class="sidebar-box">
                            <h3>About Me</h3>
                        </div>
                        <div class="sidebar-box">
                            <h3>Featured Post</h3>
                        </div>
                        <div class="sidebar-box">
                            <h3>Search this blog</h3>
                        </div>

                        <div class="sidebar-box">
                            <h3>Archived</h3>
                        </div>
                    </div>
                </div>
            </div>

           </div>
        </div>
    </section>

    <!-- footer -->
    <section id="footer-section">
        <div class="main-website">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 footer-content">
                       <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri();?>/img/Health_and_Fitness__2_-removebg-preview.png" alt="">
                       </div>
                       <div class="footer-text px-3">
                            <h2>About Us</h2>
                            <p>Enjoy our blogs</p>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-9 col-md-8 col-sm-8">
                        <div class="copyright">
                            <p>&copy;copyright 2023 | All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="dev-text">
                            <p>Developed By-<a href="">ZA SOFT</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mobile-menu">
        <div class="header-part">
            <img src="<?php echo get_template_directory_uri();?>/img/Health_and_Fitness__2_-removebg-preview.png" alt="logo img">
            <i class="fa-regular fa-circle-xmark menu-close"></i>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
        </ul>
    </div>

    <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.6.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/myscript.js"></script>
    <?php wp_footer();?>
</body>
</html>