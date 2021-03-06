@extends('layouts.app')

@section('title', 'Portfolio | DARSW')

@section('meta_description', '')

@section('content')
<div id="wrapper">
    <!-- content-holder  -->	
    <div class="content-holder scroll-content" data-pagetitle="Portofolio Single">
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
                                <a href="#" class=" act-link">Portfolio</a>
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
        <!-- hero-slider-wrap --> 
        <div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
            <div class="media-container" data-scrollax="properties: { translateY: '30%' }">
                <div class="bg mob-bg" style="background-image: url(images/bg/1.jpg)"></div>
                <!--div class="video-container">
                    <video autoplay  loop muted  class="bgvid">
                        <source src="video/2.mp4" type="video/mp4">
                    </video>
                </div-->
                <!--  
                    Vimeo code
                     <div  class="background-vimeo" data-vim="97871257"> </div> --> 
 
                <div  class="background-youtube-wrapper" data-vid="ce6UaS4XMRY" data-mv="1"> </div>
                <div class="overlay"></div>
            </div>
            <div class="half-hero-wrap">
                <div class="pr-bg"></div>
                <div class="rotate_text">
                    <div>25 may 2019</div>
                </div>
                <h1>Lokomotive Studio <br> Video <span> design </span><br>  project</h1>
                <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                <div class="clearfix"></div>
                <a href="#sec2" class="btn fl-btn custom-scroll-link  color-bg">View More Details</a>
            </div>
            <div class="hero-border hb-top"></div>
            <div class="hero-border hb-bottom"></div>
            <div class="hero-border hb-right"></div>
            <div class="hero-corner"></div>
            <div class="hero-corner2"></div>
            <div class="hero-corner3"></div>
            <div class="scroll-down-wrap sdw_hero">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll down  to discover</span>
            </div>
        </div>
        <!-- hero-slider-wrap  end--> 
        <!--content -->
        <div class="content">
            <!--section -->
            <section id="sec2">
                <div class="col-wc_dec"></div>
                <div class="container">
                    <!-- text-block --> 
                    <div class="text-block fl-wrap no-mar-top">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="pr-subtitle"> {{ $project->name }} </h3>
                                {!! $project->description !!}
                                <h3 class="pr-subtitle  mar-top"> Gallery</h3>
                                <!-- portfolio start -->
                                <div class="gallery-items min-pad  lightgallery   fl-wrap  ">
                                    <!-- gallery-item-->
                                    <div class="gallery-item  web branding">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/folio/1.jpg"    alt="">
                                            <a href="images/folio/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        </div>
                                        <div class="pr-bg"></div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item  branding ">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/folio/1.jpg"    alt="">
                                            <a href="images/folio/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        </div>
                                        <div class="pr-bg"></div>
                                    </div>
                                    <!-- gallery-item end-->
                                    <!-- gallery-item-->
                                    <div class="gallery-item web branding">
                                        <div class="grid-item-holder hov_zoom">
                                            <img  src="images/folio/1.jpg"    alt="">
                                            <a href="images/folio/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        </div>
                                        <div class="pr-bg"></div>
                                    </div>
                                    <!-- gallery-item end-->
                                </div>
                                <!-- portfolio end --> 
                                <h3 class="pr-subtitle mar-top"> The Brief</h3>
                                <!-- accordion-->                            
                                <div class="accordion mar-top">
                                    <a class="toggle act-accordion" href="#"> Details option   <span></span></a>
                                    <div class="accordion-inner visible">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                    </div>
                                    <a class="toggle" href="#"> Details option 2  <span></span></a>
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                    </div>
                                    <a class="toggle" href="#"> Details option 3  <span></span></a>
                                    <div class="accordion-inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                                    </div>
                                </div>
                                <!-- accordion end -->                                                        
                            </div>
                            <div class="col-md-4">
                                <div class="project-details fl-wrap">
                                    <ul>
                                        <li><span>Date :</span> 26.05.2019 </li>
                                        <li><span>Client :</span> Envato</li>
                                        <li><span>Category : </span>Design</li>
                                        <li><span>Online : </span>  <a href="#" target="_blank">themeforest.net </a></li>
                                    </ul>
                                    <a href="#" class="btn color-bg fl-wrap">View Project</a>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box2 fl-wrap"></div>
                        <!--content-nav_holder-->            
                        <div class="content-nav_holder fl-wrap blog-nav">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="content-nav">
                                <ul>
                                    <li>
                                        <a href="portfolio-single2.html" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span>Prev - Project Title</span></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="images/bg/1.jpg"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="portfolio-single3.html" class="rn ajax"><span >Next - Project Title</span> <i class="fal fa-long-arrow-right"></i></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="images/bg/1.jpg"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--content-nav_holder end -->                         
                    </div>
                    <!-- text-block end --> 
                </div>
                <div class="sec-lines"></div>
                <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
            </section>
            <!--section end -->
        </div>
        <!--content  end -->
        <div class="limit-box fl-wrap"></div>
        <!--footer-->
        <div class="height-emulator fl-wrap"></div>
        <footer class="main-footer fixed-footer">
            <div class="container">
                <div class="footer-inner fl-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-box fl-wrap">
                                <div class="footer-title fl-wrap">
                                    <span>001.</span>
                                    Last Twits
                                </div>
                                <div class="footer-box-item fl-wrap">
                                    <div class="twitter-swiper-container fl-wrap" id="twitts-container"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-title fl-wrap">
                                <span>002.</span>
                                Subscribe / Contacts
                            </div>
                            <div class="footer-box-item fl-wrap">
                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                <div class="subcribe-form fl-wrap">
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button color-bg">  Send </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                                <!-- footer-contacts-->
                                <div class="footer-contacts fl-wrap">
                                    <ul>
                                        <li><i class="fal fa-phone"></i><span>Phone :</span><a href="#">+489756412322</a></li>
                                        <li><i class="fal fa-envelope"></i><span>Email :</span><a href="#">nastik@domain.com</a></li>
                                        <li><i class="fal fa-map-marker"></i><span>Address</span><a href="#">USA 27TH Brooklyn NY</a></li>
                                    </ul>
                                </div>
                                <!-- footer end -->                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subfooter fl-wrap">
                    <!-- policy-box-->
                    <div class="policy-box">
                        <span>&#169; Nastik 2019  /  All rights reserved. </span>
                    </div>
                    <!-- policy-box end-->                     
                    <div class="to-top to-top-btn color-bg"><span>To top</span></div>
                </div>
            </div>
            <div class="sec-lines"></div>
            <div class="footer-canvas">
                <div class="dots gallery__dots" data-dots=""></div>
            </div>
        </footer>
        <!--footer  end -->
    </div>
    <!-- content-holder end -->
</div>
@endsection