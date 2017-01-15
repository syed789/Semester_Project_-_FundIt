<!DOCTYPE html>
<html lang="en">
<?php require(VIEW_PATH."head.html"); ?>

    <body class="shop home-page">

        <!-- Side Navigation Menu -->
        <?php require(VIEW_PATH."sidebar.html"); ?>
            <!-- Side Navigation Menu End -->

            <div class="wrapper">
                <div class="wrapper-inner">

                    <!--- HEADER -->
                    <?php require(VIEW_PATH."header.html"); ?>
                        <!-- /HEADER -->

                        <!-- Content -->
                        <div class="content clearfix">

                            <!-- Fullscreen Slider Section -->
                            <section id="home" class="section-block featured-media tm-slider-parallax-container">
                                <div class="tm-slider-container full-width-slider" data-featured-slider data-parallax data-scale-under="960">
                                    <ul class="tms-slides">
                                        <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#000000" data-overlay-bkg-opacity="0.5">
                                            <div class="tms-content">
                                                <div class="tms-content-inner center v-align-middle">
                                                    <div class="row">
                                                        <div class="column width-12">
                                                            <h1 class="tms-caption mb-30 color-white font-alt-2 title-large weight-light" data-animate-in="preset:slideInUpShort;duration:900ms;delay:100ms;" data-no-scale>FundIt, is a platform for human goodness.</h1>
                                                            <div class="clear"></div>
                                                            <div class="tms-caption mb-10 color-white">
                                                                <a data-content="inline" data-toolbar="" data-aux-classes="tml-contact-modal tml-exit-light" data-modal-mode data-modal-width="700" data-lightbox-animation="fadeIn" href="#contact-modal" class="lightbox-link button medium pill scroll-link border-white bkg-hover-theme color-white color-hover-white">Read our Mission Statement!</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img data-src="public/images/slider/slide-3-page-intro.jpg" data-retina src="public/images/slide-3-page-intro@2x.jpg" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!-- Fullscreen Slider Section End -->

                            <!-- Content -->
                            <div class="section-block replicable-content">
                                <div class="row center">
                                    <div class="column width-9">
                                        <h4>
FundIt is a fundraising community built for educational causes.<br/>
Here's why you should choose us.
 </h4>

                                    </div>
                                    <div class="column width-3">
                                        <a href="#" class="button pill large bkg-theme border-hover-theme color-white color-hover-theme">
											Start a Fundraiser!
										</a>
                                    </div>
                                    <hr class="mb-60">
                                </div>
                                <div class="row flex">
                                    <div class="column width-4">
                                        <div class="feature-column medium left">
                                            <span class="feature-icon icon-line-graph large color-theme mb-20"></span>
                                            <div class="feature-text color-grey">
                                                <h4>FundIt is about compassion—not fees.</h4>
                                                <p class="mb-30 mb-mobile-50">The FundIt community is free of the fees common to most fundraising platforms, which means you keep more money for your causes..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="feature-column medium left">
                                            <span class="feature-icon icon-time-slot large color-theme mb-20"></span>
                                            <div class="feature-text color-grey">
                                                <h4>A crisis doesn’t wait. So we help you act fast.</h4>
                                                <p class="mb-30 mb-mobile-50">At FundIt, fundraising is a snap. It takes only minutes to launch a campaign and share your story with friends, family—and we disburse your funds quickly and securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="feature-column medium left">
                                            <span class="feature-icon icon-facebook large color-theme mb-20"></span>
                                            <div class="feature-text color-grey">
                                                <h4>The tools to tell your story far and wide.</h4>
                                                <p>Automated promotion. Social integrations. On-the-go administration. Our suite of powerful but easy-to-use fundraiser tools can be tailored to your own needs for maximum effect. Tell your story and tell it loud.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->

                            <!-- Portfolio Grid -->
                            <div class="section-block replicable-content pb-60 bkg-grey-ultralight">
                                <div class="row">
                                    <div class="column width-12 center">
                                        <h2 class="mb-30">Popular fundraisers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="section-block team-2 bkg-grey-ultralight" >
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="row grid content-grid-3">
                                            <?php for ($i = 0; $i < 6 &&  isset($Campaigns[$i]); $i++) {?>
                                                <div class="grid-item horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;" data-threshold="0.3" style="backface-visibility: hidden; transition-property: -moz-transform, opacity; transition-duration: 1000ms; transition-timing-function: cubic-bezier(0.11, 0.69, 0.66, 1.01); transition-delay: 0s; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                                                    <a href="#">
                                                    <h4 class="mb-5"><?php if (isset($Campaigns[$i][7])) echo($Campaigns[$i][1]) ?></h4>
                                                    <h4 class="occupation">Required Amount: <?php if (isset($Campaigns[$i][4])) echo($Campaigns[$i][4]) ?></h4>
                                                    <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                                        <img src="public/images/<?php if (isset($Campaigns[$i][7])) echo($Campaigns[$i][7]) ?>" alt="" style="transition-duration: 500ms;" width="760" height="500">
                                                    </div>
                                                    </a>
                                                    <div class="team-content-info">
                                                        <p><?php if (isset($Campaigns[$i][2])) echo($Campaigns[$i][2]) ?></p>
                                                        <ul class="social-list list-horizontal">
                                                            <li><a href="#"><span class="icon-facebook-with-circle medium"></span></a></li>
                                                            <li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
                                                            <li><a href="#"><span class="icon-dribbble-with-circle medium"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Grid End -->
                            <!-- More -->
                            <div class="section-block pt-70 pb-60 bkg-grey-ultralight">
                                <div class="row flex">
                                    <div class="column width-12 center">
                                        <a href="blog.html" class="button pill medium left border-theme bkg-hover-theme color-theme color-hover-white text-uppercase fade-location">View All Fundraisers</a>
                                    </div>
                                </div>
                            </div>
                            <!-- More End -->
                            <!-- Stat Section 1 -->
                            <div class="section-block stats-1 bkg-charcoal color-white feature-column-group pt-40 pb-40 center">
                                <div class="row flex">
                                    <div class="column width-4">
                                        <div class="feature-column">
                                            <div class="stat">
                                                <div class="stat-inner">
                                                    <h4 class="mb-20 font-alt-2 weight-light"><em>Projects Completed</em></h4>
                                                    <p class="counter"><strong><span class="stat-counter" data-count-from="1100" data-count-to="1234">1,100</span>+</strong></p>
                                                    <p class="description mt-10">Since Creation in 2013</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="feature-column">
                                            <div class="stat">
                                                <div class="stat-inner">
                                                    <h4 class="mb-20 font-alt-2 weight-light"><em>Awards &amp; Mentions</em></h4>
                                                    <p class="counter"><strong><span class="stat-counter" data-count-from="1440" data-count-to="1640">1440</span>+</strong></p>
                                                    <p class="description mt-10">Best Design/Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column width-4">
                                        <div class="feature-column">
                                            <div class="stat">
                                                <div class="stat-inner">
                                                    <h4 class="mb-20 font-alt-2 weight-light"><em>Global Rank</em></h4>
                                                    <p class="counter"><strong><span class="stat-counter" data-count-from="365" data-count-to="645">640</span>K</strong></p>
                                                    <p class="description">Entrepreneur Magazine</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Stat Section 1 -->

                            <!-- Recent Posts -->
                            <div class="section-block replicable-content team-2">
                                <div class="row">
                                    <div class="column width-12">
                                        <h3 class="text-uppercase mb-0">A few of our success stories</h3>
                                        <hr class="mt-20 mb-60">
                                        <div class="tabs style-2 vertical left">
                                            <ul class="tab-nav">
                                                <li class="active">
                                                    <a href="#tabs-team-pane-1">Humans of Pakistan fans send underprivileged kids to NUST</a>
                                                </li>
                                                <li class="">
                                                    <a href="#tabs-team-pane-2">We helped Akram speak with her eyes</a>
                                                </li>
                                            </ul>
                                            <div class="tab-panes left">
                                                <div id="tabs-team-pane-1" class="animate active animate-in">
                                                    <div class="tab-content">

                                                        <!-- Team Grid -->
                                                        <div class="row content-grid-2">
                                                            <div class="grid-item">
                                                                <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                                                    <img src="public/images/team/team-member-7.jpg" alt="" style="transition-duration: 500ms;" width="760" height="500">
                                                                </div>
                                                                <div class="team-content-info">
                                                                    <h4 class="color-theme mb-5">Jason Ford</h4>
                                                                    <h4 class="occupation">Analyst</h4>
                                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                                                    <ul class="social-list list-horizontal">
                                                                        <li><a href="#"><span class="icon-linkedin-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-facebook-with-circle medium"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid-item">
                                                                <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                                                    <img src="public/images/team/team-member-6.jpg" alt="" style="transition-duration: 500ms;" width="760" height="500">
                                                                </div>
                                                                <div class="team-content-info">
                                                                    <h4 class="color-theme mb-5">Angela Andrews</h4>
                                                                    <h4 class="occupation">Portfolio Management</h4>
                                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non.</p>
                                                                    <ul class="social-list list-horizontal">
                                                                        <li><a href="#"><span class="icon-linkedin-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-vimeo-with-circle medium"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Team Grid End -->

                                                    </div>
                                                </div>
                                                <div id="tabs-team-pane-2" class="">
                                                    <div class="tab-content">

                                                        <!-- Team Grid -->
                                                        <div class="row content-grid-2">
                                                            <div class="grid-item">
                                                                <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                                                    <img src="images/team/team-member-5.jpg" alt="" style="transition-duration: 500ms;" width="760" height="500">
                                                                </div>
                                                                <div class="team-content-info">
                                                                    <h4 class="color-theme mb-5">John Henry</h4>
                                                                    <h4 class="occupation">Risk Manager</h4>
                                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                                                    <ul class="social-list list-horizontal">
                                                                        <li><a href="#"><span class="icon-linkedin-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-facebook-with-circle medium"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="grid-item">
                                                                <div class="thumbnail no-margin-bottom" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                                                                    <img src="images/team/team-member-8.jpg" alt="" style="transition-duration: 500ms;" width="760" height="500">
                                                                </div>
                                                                <div class="team-content-info">
                                                                    <h4 class="color-theme mb-5">Michael Andrews</h4>
                                                                    <h4 class="occupation">Investment Management</h4>
                                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non.</p>
                                                                    <ul class="social-list list-horizontal">
                                                                        <li><a href="#"><span class="icon-linkedin-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-twitter-with-circle medium"></span></a></li>
                                                                        <li><a href="#"><span class="icon-vimeo-with-circle medium"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Team Grid End -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Posts End -->
                            <!-- Feature Column Section -->
                            <div class="section-block feature-column-group no-padding">
                                <div class="row full-width collapse flex">
                                    <div class="column width-6 v-align-middle bkg-grey-ultralight">
                                        <div class="feature-column small center pt-80 pb-80 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;" data-threshold="0.5">
                                            <h1 class="font-alt-2 weight-light color-theme pu-20 mb-10">How FundIt works?</h1>
                                            <br/>
                                            <h5 class="weight-thin tex-large pu-20 mb-mobile-50 tex" style="text-align:centre">FundIt is the only socially conscious fundraising platform that’s free, fast, and open, giving individuals and organizations the power to improve lives everywhere.</h5>
                                            <a href="#" class="button pill large bkg-theme border-hover-theme color-white color-hover-theme">
											Learn More
										</a>
                                        </div>
                                    </div>
                                    <div class="column width-6 bkg-theme color-white">
                                        <div class="feature-column">
                                            <div class="testimonial-slider tm-slider-container">
                                                <ul class="tms-slides">
                                                    <li class="tms-slide" data-image>
                                                        <div class="tms-content-scalable">
                                                            <div class="row">
                                                                <div class="column width-12">
                                                                    <blockquote class="xlarge">
                                                                        <p>Incredible work! Best creative experience ever; timely, well executed and one hell of the result. Would recommend Nietszche to anyone who is looking to revamp their identity.
                                                                            <cite>John K. Riley - Harvest Goods.</cite>
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tms-slide" data-image>
                                                        <div class="tms-content-scalable">
                                                            <div class="row">
                                                                <div class="column width-12">
                                                                    <blockquote class="xlarge">
                                                                        <p>A five star agency without doubt. Hire them!
                                                                            <cite>John A. Adams - Repetition</cite>
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tms-slide" data-image>
                                                        <div class="tms-content-scalable">
                                                            <div class="row">
                                                                <div class="column width-12">
                                                                    <blockquote class="xlarge">
                                                                        <p>Creativity redefined. These guys offer a unique approach to every aspect of design and the result is simply stunning.
                                                                            <cite>Jane Lariken - MUD Clothing.</cite>
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="tms-slide" data-image>
                                                        <div class="tms-content-scalable">
                                                            <div class="row">
                                                                <div class="column width-12">
                                                                    <blockquote class="xlarge">
                                                                        <p>Design, design and redesign is their motto. Warhol won't stop until they have the perfect match between functionality and esthetic.
                                                                            <cite>Jack Tromso - Orcha Co.</cite>
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Column Section End -->


                            <!-- Logo 1 Section -->
                            <div class="section-block logos-1">
                                <div class="row">
                                    <div class="column width-12">
                                        <div class="row content-grid-6">
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/meat-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/rosco-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/wicked-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/repetition-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/macaw-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                            <div class="grid-item">
                                                <a href="#">
                                                    <img src="public/images/logos/adventure-logo-grid.svg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Logo 1 Section End -->
                            <!-- Contact Advanced Modal End -->
                            <div id="contact-modal" class="section-block pt-0 pb-30 background-none hide">

                                <!-- Intro Title Section 2 -->
                                <div class="section-block intro-title-2-1 xsmall bkg-grey-ultralight">
                                    <div class="media-overlay bkg-black opacity-03"></div>
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="title-container">
                                                <div class="title-container-inner center color-white">
                                                    <h1 class="title-medium mb-0">Mission Statement</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Intro Title Section 2 End -->
                                <!-- Form -->
                                <div class="section-block pt-60 pb-0">
                                    <div class="row">
                                        <div class="column width-10 offset-1">
                                            <p style="text-align:justify;">
                                                Inspired by the seemingly boundless compassion and creative spirit of our users, we challenged ourselves to do more—this time for the very people and causes that often need help the most. The ones that fall through the cracks. The ones that need a second chance. The ones on the brink.
                                                <br/>
                                                <br/>We built Fundit to give users a new community for showing and sharing their compassion through personal fundraising. Generosity helps cancer patients with bills and students with tuition. Generosity boosts humanitarian efforts into new countries and helps nonprofits move quickly with their causes. Generosity fills the gap at the end of a tough month and supports the village after the storm.
                                            </p>
                                            <a href="#" class="btn btn-block pill large bkg-theme border-hover-theme color-white color-hover-theme">
											Start a Fundraiser!
										      </a>
                                            <br/>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form End -->
                            </div>


                            <!-- Search Modal End -->
                            <div id="search-modal" class="hide">
                                <div class="row">
                                    <div class="column width-12 center">
                                        <div class="search-form-container site-search">
                                            <form action="#" method="get" novalidate>
                                                <div class="row">
                                                    <div class="column width-12">
                                                        <div class="field-wrapper">
                                                            <input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
                                                            <span class="border"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="form-response"></div>
                                        </div>
                                        <a href="#" class="tml-aux-exit">Close</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Search Modal End -->

                        </div>
                        <!-- Content End -->

                        <!-- Footer -->
                        <?php require(VIEW_PATH."footer.html"); ?>
                            <!-- Footer End -->

                </div>
            </div>

            <!-- Js -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="public/js/bootstrap.min.js"></script>
            <script src="public/js/timber.master.min.js"></script>
    </body>

</html>