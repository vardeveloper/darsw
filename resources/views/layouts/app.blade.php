<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DARVIN ALCANTARA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
        <link rel="shortcut icon" href="{{ asset('') }}images/favicon.ico">
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
                <div class="content-holder scroll-content" data-pagetitle="home video">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <a href="/" class="ajax logo_menu"><img src="{{ asset('images/logo2.png') }}" alt=""></a>
                            <div class="nav-container fl-wrap">
                                <!-- nav -->
                                <nav class="nav-inner" id="menu">
                                    <ul>
                                        <li>
                                            <a href="#" class="act-link">Home</a>
                                            <!--level 2 -->
                                            <ul>
                                                <li><a href="/" class="ajax">Slider</a></li>
                                                <li><a href="index2.html" class="ajax">Carousel</a></li>
                                                <li><a href="index3.html" class="ajax">Impulse Image</a></li>
                                                <li><a href="index4.html" class="ajax">Slideshow</a></li>
                                                <li><a href="index5.html" class="ajax">Video</a></li>
                                                <li><a href="index6.html" class="ajax">Parallax Image</a></li>
                                            </ul>
                                            <!--level 2 end -->
                                        </li>
                                        <li>
                                            <a href="#">Portfolio</a>
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
                                        <li><a href="/contact" class="ajax">Contacts</a></li>
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
                    <!-- fixed-column-wrap --> 					
                    <div class="fixed-column-wrap">
                        <div class="progress-bar-wrap">
                            <div class="progress-bar color-bg"></div>
                        </div>
                        <div class="column-image fl-wrap full-height">
                            <div class="bg bg-scroll"  data-bg="images/bg/long/1.jpg"></div>
                            <div class="overlay"></div>
                            <div class="column-image-anim"></div>
                        </div>
                        <div class="fcw-dec"></div>
                        <div class="fixed-column-tilte fdct fcw-title"><span  id="quote">About me</span></div>
                    </div>
                    <!-- fixed-column-wrap end-->
                    <!-- hero-wrap--> 
                    <div class="hero-wrap fl-wrap full-height scroll-con-sec hidden-section" id="sec1" data-scrollax-parent="true">
                        <div class="media-container" data-scrollax="properties: { translateY: '30%' }">
                            <div class="bg mob-bg" style="background-image: url(images/bg/1.jpg)"></div>
                            <div class="video-container">
                                <video autoplay  loop muted  class="bgvid">
                                    <source src="{{ asset('video/2.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                            <!--  
                                Vimeo code
                                
                                 <div  class="background-vimeo" data-vim="97871257"> </div> --> 
                            <!--  
                                Youtube code 
                                
                                 <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                            <div class="overlay"></div>
                        </div>
                        <div class="half-hero-wrap">
                            <div class="pr-bg"></div>
                            <div class="rotate_text hero-decor-let">
                                <div>COMMERCIAL DESIGN</div>
                                <div><span>RESIDENTIAL DESIGN</span></div>
                                <div>INTERIOR DESIGN</div>
                            </div>
                            <h1><span>DAR</span>SW <br> Darvin Alcantara <span>Studio Workshop</span> <br> <span>TECHNICAL DRAFTER</span> AND DESIGNER </h1>
                            <!--h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4-->
                            <div class="clearfix"></div>
                            <a href="#sec2" class="btn fl-btn custom-scroll-link  color-bg">View More Details</a>
                        </div>
                        <!-- hero  elements  --> 
                        <div class="hero-border hb-top"></div>
                        <div class="hero-border hb-bottom"></div>
                        <div class="hero-border hb-right"></div>
                        <div class="hero-corner hiddec-anim"></div>
                        <div class="hero-corner2 hiddec-anim"></div>
                        <div class="hero-corner3 hiddec-anim"></div>
                        <div class="scroll-down-wrap sdw_hero hiddec-anim">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down  to discover</span>
                        </div>
                        <!-- hero  elements end--> 
                    </div>
                    <!-- hero-wrap end--> 
                    <!-- column-wrap --> 
                    <div class="column-wrap">
                        <!--content -->
                        <div class="content">
                            <!--page-scroll-nav-->
                            <div class="page-scroll-nav fl-wrap">
                                <nav class="scroll-init color2-bg">
                                    <ul class="no-list-style">
                                        <li><a class="scroll-link fbgs" href="#sec2" data-bgscr="images/bg/long/1.jpg" data-bgtex="about"><span>About</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec3" data-bgscr="images/bg/long/1.jpg" data-bgtex="services"><span>Services</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec4" data-bgscr="images/bg/long/1.jpg" data-bgtex="skills"><span>Skills</span></a></li>
                                        <li><a class="scroll-link fbgs" href="#sec5" data-bgscr="images/bg/long/1.jpg" data-bgtex="resume"><span>Resume</span></a></li>
                                    </ul>
                                </nav>
                                <div class="arrowpagenav"></div>
                            </div>
                            <!--page-scroll-nav end-->
                            
                            <!--section -->
                            <section id="sec2" class="hidden-section scroll-con-sec bot-element">
                                <div class="col-wc_dec"></div>
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>About me</h3>
                                        <!--p>Alcantara is the founder and CEO of DARSW, an individual project leading in innovation and creativity that provides full design services and consultancy services including but not limited to interior design services, urban design services, and landscape design services.  </p-->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dec-img   fl-wrap">
                                                <img src="{{ asset('images/about.jpg') }}" class="respimg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="main-about fl-wrap">
                                                <!--h5>Curabitur convallis fringilla diam</h5-->
                                                <!--h2>Innovative solutions<br>to boost <span> your creative </span>  projects</h2-->
                                                <p>Alcantara is the founder and CEO of DARSW, an individual project leading in innovation and creativity that provides full design services and consultancy services including but not limited to interior design services, urban design services, and landscape design services.  </p>
                                                <p>Darvin Alcantara holds a Master of Architecture from Bowling Green State University, a Bachelor of Science in Architecture from University of Michigan, and an Associate in Fine Arts from Monroe County Community College. From 2015-2017, he has worked as an intern for Davison Smith Certo Architects, specialized in office, industrial and healthcare projects. </p>
                                                <p>As a graduate student, Alcantara participated in Latino Student Union meetings where social issues were discussed within the Latino community. </p>
                                                <p>When not designing or drawing, Alcantara enjoys Kayaking, biking and taking long runs to encourage self-endurance of the body. </p>
                                                <!--div class="dec-list fl-wrap">
                                                    <ul>
                                                        <li>Leverage agile frameworks to provide a robust synopsis.</li>
                                                        <li>Iterative approaches to corporate strategy foster.</li>
                                                        <li>Bring to the table win-win survival strategies.</li>
                                                        <li>Scalable gun control breakthroughs social movement.</li>
                                                    </ul>
                                                </div-->
                                                <a href="portfolio.html" class="btn ajax  fl-btn color-bg">My Portfolio</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-number">01.</div>
                                </div>
                            </section>
                            <!--section end -->
                            <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                            
                            <!--section  --> 
                            <section id="sec3" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>Services</h3>
                                        <p>Design drawing, Technical construction documents, permit assistance. </p>
                                    </div>
                                    <div class="cards-wrap fl-wrap">
                                        <div class="row">
                                            <!--card item --> 
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg "  data-bg="images/services/1.jpg"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>COMMERCIAL DESIGN</h2>
                                                                <ul>
                                                                    <li>Concept</li>
                                                                    <li>Design</li>
                                                                    <li>3D Modeling</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon">
                                                                    <i class="fal fa-desktop"></i>
                                                                </div>
                                                                <p>Commercial office, Restaurant, Retail store.</p>
                                                                <div class="serv-price-wrap"><span>Price</span>by project basis</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->
                                            <!--card item --> 
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg "  data-bg="images/services/1.jpg"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>RESIDENTIAL DESIGN</h2>
                                                                <ul>
                                                                    <li>Concept</li>
                                                                    <li>Design</li>
                                                                    <li>3D Modeling</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon">
                                                                    <i class="fab fa-pagelines"></i>
                                                                </div>
                                                                <p>House, Outbuilding, Condominium, Apartment or Townhouse.</p>
                                                                <div class="serv-price-wrap"><span>Price</span>by project basis</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->
                                            <!--card item --> 
                                            <div class="col-md-4">
                                                <div class="content-inner fl-wrap">
                                                    <div class="content-front">
                                                        <div class="cf-inner">
                                                            <div class="bg "  data-bg="images/services/1.jpg"></div>
                                                            <div class="overlay"></div>
                                                            <div class="inner">
                                                                <h2>INTERIOR DESIGN</h2>
                                                                <ul>
                                                                    <li>Concept</li>
                                                                    <li>Design</li>
                                                                    <li>3D Modeling</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-back">
                                                        <div class="cf-inner">
                                                            <div class="inner">
                                                                <div class="dec-icon">
                                                                    <i class="fal fa-mobile-android"></i>
                                                                </div>
                                                                <p>Interior remodel.</p>
                                                                <div class="serv-price-wrap"><span>Price</span>by project basis</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--card item end -->                                                 
                                        </div>
                                        <div class="srv-link-text fl-wrap">
                                            <h4>Ready to order your project ? Visit my contacts page :  </h4>
                                            <a href="/contact" class="btn float-btn ajax  color-bg">Contacts</a>
                                        </div>
                                    </div>
                                    <div class="sec-number"  >02.</div>
                                </div>
                            </section>
                            <!--section end -->
                            <div class="section-separator bot-element"><span class="fl-wrap"></span></div>
                            
                            <!--section  -->    
                            <section id="sec4" class="scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>My Skills</h3>
                                        <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fl-wrap small-section-title">
                                                <h3>CORE COMPETENCIES</h3>
                                            </div>
                                            <div class="piechart-holder animaper" data-skcolor="#F68338">
                                                <!-- 1  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Programming & Analysis</h4>
                                                </div>
                                                <!-- 1 end -->
                                                <!-- 2  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Planning & Design</h4>
                                                </div>
                                                <!-- 2 end  -->
                                                <!-- 3  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Project Documentation</h4>
                                                </div>
                                                <!-- 3  end-->
                                                <!-- 3  -->
                                                <div class="piechart">
                                                    <span class="chart" data-percent="95">
                                                    <span class="percent"></span>
                                                    </span>
                                                    <div class="clearfix"></div>
                                                    <h4>Construction & Evaluation</h4>
                                                </div>
                                                <!-- 3  end-->                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fl-wrap small-section-title">
                                                <h3>TECHNICAL QUALIFICATION</h3>
                                            </div>
                                            <div class="skillbar-box animaper">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <!-- skill 1-->
                                                <div class="custom-skillbar-title"><span>AUTOCAD</span></div>
                                                <div class="skill-bar-percent">95%</div>
                                                <div class="skillbar-bg" data-percent="95%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 2-->
                                                <div class="custom-skillbar-title"><span>REVIT</span></div>
                                                <div class="skill-bar-percent">90%</div>
                                                <div class="skillbar-bg" data-percent="90%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 3-->
                                                <div class="custom-skillbar-title"><span>SKETCH-UP</span></div>
                                                <div class="skill-bar-percent">90%</div>
                                                <div class="skillbar-bg" data-percent="90%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 4-->
                                                <div class="custom-skillbar-title"><span>RHINOCEROS</span></div>
                                                <div class="skill-bar-percent">85%</div>
                                                <div class="skillbar-bg" data-percent="85%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 5-->
                                                <div class="custom-skillbar-title"><span>ADOBE CREATIVE SUITE</span></div>
                                                <div class="skill-bar-percent">95%</div>
                                                <div class="skillbar-bg" data-percent="95%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <!-- skill 6-->
                                                <div class="custom-skillbar-title"><span>LUMION</span></div>
                                                <div class="skill-bar-percent">95%</div>
                                                <div class="skillbar-bg" data-percent="95%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sec-number"  >03.</div>
                                </div>
                                <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
                            </section>
                            <!--section end -->
                            
                            <!--section  -->
                            <section class="dark-bg bot-element">
                                <div class="container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="video-box dec-img fl-wrap">
                                                    <img src="{{ asset('images/all/1.jpg') }}" alt="" class="respimg">
                                                    <a class="video-box-btn image-popup" href="https://vimeo.com/34741214"><i class="fas fa-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="video-promo-text fl-wrap mar-top">
                                                    <h3>My Video Presentation  </h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. </p>
                                                    <a href="#" class="btn fl-btn    color-bg">My Youtube Chanel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-corner"></div>
                            </section>
                            <!--section end -->
                            
                            <!--section  -->
                            <section id="sec5" class="hidden-section scroll-con-sec bot-element">
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        <h3>Resume</h3>
                                        <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p-->
                                    </div>
                                    <div class="custom-inner-holder">
                                        <!--2 -->	
                                        <div class="custom-inner ncmb">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="resum-header workres">
                                                        <i class="fa fa-briefcase"></i>
                                                        <h3> Davison Smith Certo Architects </h3>
                                                        <span>  2015 - 2017 </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="resum-content fl-wrap">
                                                        <h4> INTERN / DRAFTER </h4>
                                                        <p>Assisted in preparation of Architectural, Plumbing, Mechanical, and Electrical construction documents for Residential and Commercial projects.  </p>
                                                        <div class="dec-list fl-wrap">
                                                            <ul>
                                                                <li>Created preliminary building designs and plans for Client’s presentation.  </li>
                                                                <li>Prepared field measurements on existing site jobs prior to new construction or renovation/alteration. </li>
                                                                <li>Handled various administrative duties as assigned.  </li>
                                                                <li>Provided support to staff member as needed. </li>
                                                            </ul>
                                                        </div>
                                                        <p></p>
                                                    </div>
                                                    <a href="#" class="btn color-bg  fl-btn  ">Download resume</a>      
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 end -->
                                    </div>
                                    <div class="sec-number" >04.</div>
                                </div>
                            </section>
                            <!--section end -->

                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </div>
                    <!--content  end -->

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

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>