<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>

        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">

        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap color-bg">
            <div class="loader-bg"></div>
            <div class="loader-inner">
                <div class="loader"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            @include('includes.header')
            <!-- header end -->

            <!-- wrapper -->
            <div id="wrapper">
                <!-- content-holder  -->	
                <div class="content-holder scroll-content" data-pagetitle="portfolio grid">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <a href="index.html" class="ajax logo_menu"><img src="images/logo2.png" alt=""></a>
                            <div class="nav-container fl-wrap">
                                <!-- nav -->
                                <nav class="nav-inner" id="menu">
                                    <ul>
                                        <li>
                                            <a href="#">Home</a>
                                            <!--level 2 -->
                                            <ul>
                                                <li><a href="index.html" class="ajax">Slider</a></li>
                                                <li><a href="index2.html" class="ajax">Carousel</a></li>
                                                <li><a href="index3.html" class="ajax">Impulse Image</a></li>
                                                <li><a href="index4.html" class="ajax">Slideshow</a></li>
                                                <li><a href="index5.html" class="ajax">Video</a></li>
                                                <li><a href="index6.html" class="ajax">Parallax Image</a></li>
                                            </ul>
                                            <!--level 2 end -->
                                        </li>
                                        <li>
                                            <a href="#" class="act-link">Portfolio</a>
                                            <!--level 2 -->
                                            <ul>
                                                <li><a href="portfolio.html" class="ajax">Fullscreen Grid</a></li>
                                                <li><a href="portfolio3.html" class="ajax">Fullscreen Grid 2</a></li>
                                                <li><a href="portfolio2.html" class="ajax">Column Grid</a></li>
                                                <li><a href="portfolio4.html" class="ajax">Column Grid 2</a></li>
                                                <li><a href="portfolio5.html" class="ajax">Boxed Grid</a></li>
                                                <li>
                                                    <a href="#">Single</a>
                                                    <!--level 3 -->
                                                    <ul>
                                                        <li><a href="portfolio-single.html" class="ajax">Style 1</a></li>
                                                        <li><a href="portfolio-single2.html" class="ajax">Style 2</a></li>
                                                        <li><a href="portfolio-single3.html" class="ajax">Style 3</a></li>
                                                        <li><a href="portfolio-single4.html" class="ajax">Style 4</a></li>
                                                        <li><a href="portfolio-single5.html" class="ajax">Style 5</a></li>
                                                        <li><a href="portfolio-single6.html" class="ajax">Style 6</a></li>
                                                    </ul>
                                                    <!--level 3 end -->
                                                </li>
                                            </ul>
                                            <!--level 2 end -->
                                        </li>
                                        <li><a href="contacts.html" class="ajax">Contacts</a></li>
                                        <li><a href="blog.html" class="ajax">Blog</a></li>
                                        <li>
                                            <a href="#">Pages</a>
                                            <!--level 2 -->
                                            <ul>
                                                <li><a href="team.html" class="ajax">Team</a></li>
                                                <li><a href="blog-single.html" class="ajax">Blog Single</a></li>
                                                <li><a href="404.html" class="ajax">404</a></li>
                                            </ul>
                                            <!--level 2 end -->
                                        </li>
                                    </ul>
                                </nav>
                                <!-- nav end-->
                            </div>
                        </div>
                        <div class="share-wrapper">
                            <span class="share-title">Share : </span>
                            <div class="share-container"></div>
                        </div>
                        <div class="nav-holder-line"></div>
                    </div>
                    <div class="nav-holder-dec color-bg"></div>
                    <div class="nav-overlay"></div>
                    <!-- nav-holder end -->  
                    <!--content -->
                    <div class="content dark-content portf-wrap">
                        <!--fixed-top-panel-->
                        <div class="fixed-top-panel filter-panel fl-wrap">
                            <div class="fixed-filter-panel_title color-bg">
                                Works Filter <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <div class="gallery-filters inline-dark-filters">
                                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All projects</a>
                                <a href="#" class="gallery-filter" data-filter=".web">Web Design</a>
                                <a href="#" class="gallery-filter" data-filter=".photography">Photo</a>
                                <a href="#" class="gallery-filter" data-filter=".branding">Branding</a>
                                <a href="#" class="gallery-filter" data-filter=".uides">Ui Design</a>
                            </div>
                            <div class="folio-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>
                        </div>
                        <!--fixed-top-panel end -->
                        <!-- portfolio start -->
                        <div class="gallery-items min-pad  four-column   fl-wrap  ">
                            <!-- gallery-item-->
                            <div class="gallery-item  web branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Design  </a> <a href="#"> Branding</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Kent Brant Concept<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item photography">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#"> Photography  </a> <a href="#"> Development</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Old Cars on Street<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item gallery-item-second branding ">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development </a>  <a href="#"> Branding</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Mobile ui Interface<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Video  </a> <a href="#"> Branding</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Video Project<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web branding">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Photography  </a> <a href="#"> Web </a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Barbershop Website<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item photography">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Photography  </a> <a href="#"> Ui</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Man in Old Town<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="https://www.youtube.com/watch?v=Hg5iNVSp2z8" class="box-media-zoom   image-popup"><i class="fal fa-play"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Video  </a><a href="#"> Web design</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Youtube Video Project<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item uides photography">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development  </a> <a href="#">Ui</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Mobile ui Interface<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web photography">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="https://vimeo.com/6698875" class="box-media-zoom   image-popup"><i class="fal fa-play"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development  </a>  <a href="#"> Video</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Project Vimeo<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item interior houses ">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Architecture</a> <a href="#">Design</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Architecture Agensy<i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web uides">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development   </a> <a href="#"> Wed Design</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item web uides">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development   </a> <a href="#"> Wed Design</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->                                                        
                            <!-- gallery-item-->
                            <div class="gallery-item web uides">
                                <div class="grid-item-holder hov_zoom">
                                    <img  src="images/folio/1.jpg"    alt="">
                                    <a href="images/folio/1.jpg" class="box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
                                    <div class="grid-det">
                                        <div class="grid-det_category"><a href="#">Development   </a> <a href="#"> Wed Design</a></div>
                                        <div class="grid-det-item">
                                            <a href="portfolio-single.html" class="ajax grid-det_link">Pen Tower <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->                                                       
                        </div>
                        <!-- portfolio end -->
                    </div>
                    <!--content  end -->
                    <div class="limit-box fl-wrap"></div>

                    <!--footer-->
                    @include('includes.footer')
                    <!--footer  end -->
                </div>
                <!-- content-holder end -->
            </div>
            <!--wrapper end -->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->          
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>      
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>