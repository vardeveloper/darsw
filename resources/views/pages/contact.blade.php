@extends('layouts.app')

@section('title', 'Contact | DARSW')

@section('meta_description', '')

@section('content')
<div id="wrapper">
    <!-- content-holder  -->	
    <div class="content-holder scroll-content" data-pagetitle="Contacts">
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
                            <li><a href="contacts.html" class="ajax act-link">Contacts</a></li>
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
                <div class="bg"  data-bg="images/bg/long/1.jpg"></div>
                <div class="overlay"></div>
                <div class="column-image-anim"></div>
            </div>
            <div class="fcw-dec"></div>
            <div class="fixed-column-tilte fcw-title"><span>Contacts</span></div>
        </div>
        <!-- fixed-column-wrap end -->
        <!-- column-wrap -->
        <div class="column-wrap  ">
            <!--content -->
            <div class="content">
                <!-- fixed-top-panel -->
                <div class="fixed-top-panel fl-wrap">
                    <div class="sp-fix-header fl-wrap">
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down  to discover</span>
                        </div>
                        <a href="index.html" class="ajax back-to-home-btn"><span>Back to home</span></a>
                    </div>
                </div>
                <!-- fixed-top-panel end -->
                <!--section -->
                <section   class="hidden-section bot-element">
                    <div class="col-wc_dec"></div>
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h3>Contact details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                        </div>
                        <!--process-wrap  -->
                        <div class="contacts-wrap fl-wrap">
                            <ul>
                                <li>
                                    <i class="fal fa-mobile-android"></i>
                                    <h4>Phone Number</h4>
                                    <div class="clearfix"></div>
                                    <a href="#" class="contact-link">+1 (419) 601-9041</a>
                                </li>
                                <li>
                                    <i class="fal fa-compass"></i>
                                    <h4>Office Location</h4>
                                    <div class="clearfix"></div>
                                    <a href="#" class="contact-link">Lima, Perú</a>
                                </li>
                                <li>
                                    <i class="fal fa-envelope-open"></i>
                                    <h4>My e-mail</h4>
                                    <div class="clearfix"></div>
                                    <a href="#" class="contact-link">darvin.alcantara@darsw.com</a>
                                </li>
                            </ul>
                        </div>
                        <!--process-wrap   end-->       
                        <div class="map-container fl-wrap">
                            <div id="map-single" class="map" data-latlog="[40.714 , -74.005]" data-popuptext="My Location in New York ."></div>
                        </div>
                        <div class="sec-number">01.</div>
                    </div>
                </section>
                <!--section end -->
                <div class="section-separator"><span class="fl-wrap bot-element"></span></div>
                <!--section-->
                <section   class="hidden-section bot-element">
                    <div class="container">
                        <div class="section-title fl-wrap">
                            <h3>Get in Touch</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                        </div>
                        <div id="contact-form" class="cf-wrap">
                            <div id="message"></div>
                            <form  class="custom-form" action="{{ route('send') }}" name="contactform" id="contactform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><i class="fal fa-user"></i></label>
                                            <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-envelope"></i> </label>
                                            <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                        </div>
                                    </div>
                                    <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn color-bg" id="submit">Send Message</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="sec-number">02.</div>
                    </div>
                    <div class="col-wc_dec col-wc_dec2 col-wc_dec3"></div>
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
@endsection