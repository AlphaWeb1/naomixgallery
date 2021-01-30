<!-- Navigation -->
<header class="nav nav--side nav--side-sticky-left">
    <div class="nav__holder">
        <div class="nav__container container">

            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="index.html" class="logo-container flex-child">
                        <img class="logo" src="{{asset(config('app.public_prefix').'assets/img/logo.png')}}" 
                        srcset="{{asset(config('app.public_prefix').'assets/img/logo.png')}} 1x, {{asset(config('app.public_prefix').'assets/img/logo@2x.png')}} 2x" alt="logo">
                    </a>

                    <!-- Mobile toggle -->
                    <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                        <span class="nav__icon-toggle-bar"></span>
                    </button>
                </div>

                <!-- Navbar -->
                <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                    <ul class="nav__menu">
                        <li class="nav__dropdown active">
                            <a href="index.html" aria-haspopup="true">Home</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Pages</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/about">About</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/single-service">Single Service</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Works</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-gallery.html">Portfolio Gallery</a></li>
                                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="#" aria-haspopup="true">Features</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="blog.html" aria-haspopup="true">Blog</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="blog.html">Blog Standard</a></li>
                                <li><a href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end menu -->

                    <!-- Mobile Search -->
                    <div class="nav__search-mobile d-lg-none">                            
                        <form role="search" method="get" class="search-form relative">
                            <input type="search" class="search-input" placeholder="Search" value="" name="s">
                            <button type="submit" class="search-button" aria-label="Search button"><i class="ui-search search-icon"></i></button>
                        </form>
                    </div>

                    <!-- Mobile Phone -->
                    <div class="nav__phone nav__phone--mobile d-lg-none">
                        <span class="nav__phone-text">Call us:</span>
                        <a href="tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
                    </div>							
                    
                    <!-- Mobile Email -->
                    <div class="nav__email nav__email--mobile d-lg-none">
                        <span class="nav__email-text">Email us:</span>
                        <a href="mailto:hi@sedona.com" class="nav__email-email">hi@sedona.com</a>
                    </div>
                    
                    <!-- Mobile Socials -->
                    <div class="nav__socials nav__socials--mobile d-lg-none">
                        <div class="socials">
                            <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                        </div>
                    </div>
                </nav> <!-- end nav-wrap -->

                <!-- Footer / Socials -->
                <div class="nav__footer d-lg-block d-none">
                    <div class="socials">
                        <a href="#" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                        <a href="#" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                        <a href="#" class="social social-youtube" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="#" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                    </div>

                    <span class="copyright">
                        © 2018 Sedona, Made by <a href="https://deothemes.com">DeoThemes</a>
                    </span>
                </div>		

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
<!-- end navigation -->