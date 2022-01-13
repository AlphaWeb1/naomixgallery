<!-- Navigation -->
<header class="nav nav--side nav--side-sticky-left">
    <div class="nav__holder">
        <div class="nav__container container">

            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="/home" class="logo-container flex-child">
                        <img class="logo header-logo" src="{{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}}" 
                        srcset="{{asset(config('app.public_prefix').'assets/images/logo/logo.png')}} 1x, {{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}} 2x" alt="NaomixGallery">
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
                            <a href="/home" aria-haspopup="true">Home</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/home#intro">Head's Up</a></li>
                                <li><a href="/home#offer">We Render You</a></li>
                                <li><a href="/home#gallery">Gallery Sample</a></li>
                                <li><a href="/home#exhibition">Latest In Exhibitions</a></li>
                                <li><a href="/home#store">Store in Brief</a></li>
                                <li><a href="/home#testimonials">Testimonials</a></li>
                                <li><a href="/home#contact">Get in Touch</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="/about" aria-haspopup="true">Naomix Gallery Ltd</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/about#about">About Us</a></li>
                                <li><a href="/about#passion">Our Passion</a></li>
                                <li><a href="/about#goal">Our Goal</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="/artist-profile" aria-haspopup="true">Meet The Artist</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/artist-profile#profile">Artist Profile</a></li>
                                <li><a href="/artist-profile#statement">Artist Statement</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown d-none">
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
                            <a href="#" aria-haspopup="true">Collections</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/murals">Mural</a></li>
                                <li><a href="/exhibitions">Exhibitions</a></li>
                            </ul>
                        </li>
                        <li><a href="/store">Store</a></li>
                        <li class="nav__dropdown d-none">
                            <a href="/exhibitions" aria-haspopup="true">Exhibitions</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/exhibitions/2020-exhibition1">2020 Exhibition Place Holder 1</a></li>
                                <li><a href="/exhibitions/2020-exhibition2">2020 Exhibition Place Holder 2</a></li>
                                <li><a href="/exhibitions/2020-exhibition3">2020 Exhibition Place Holder 3</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul> <!-- end menu -->

                    <!-- Mobile Search -->
                    <div class="nav__search-mobile d-lg-none">                            
                        <form role="search" method="get" class="search-form relative">
                            <input type="search" class="search-input" placeholder="Search" value="" name="s">
                            <button type="submit" class="search-button" aria-label="Search button"><i class="ui-search search-icon"></i></button>
                        </form>
                    </div>

                    <!-- Mobile Phone -->
                    <div class="nav__phone nav__phone--mobile">
                        <span class="nav__phone-text">Call us:</span>
                        <a href="tel:+2347030555625" class="nav__phone-number">+2347030555625</a>
                    </div>							
                    
                    <!-- Mobile Email -->
                    <div class="nav__email nav__email--mobile">
                        <span class="nav__email-text">Email us:</span>
                        <a href="mailto:naomixgallery@gmail.com" class="nav__email-email">naomixgallery@gmail.com</a>
                    </div>
                    
                    <!-- Mobile Socials -->
                    <div class="nav__socials nav__socials--mobile d-lg-none">
                        <div class="socials">
                            <a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_top"><i class="ui-twitter"></i></a>
                            <a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_top"><i class="ui-facebook"></i></a>
                            <a href="https://wa.me/2347030555625" class="social social-whatsapp" aria-label="whatsapp" title="whatsapp" target="_top"><i class="ui-whatsapp"></i></a>
                            <a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_top"><i class="ui-instagram"></i></a>
                        </div>
                    </div>
                </nav> <!-- end nav-wrap -->

                <!-- Footer / Socials -->
                <div class="nav__footer d-lg-block d-none">
                    <div class="socials">
                        <a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_top"><i class="ui-twitter"></i></a>
                        <a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_top"><i class="ui-facebook"></i></a>
                        <a href="https://wa.me/2347030555625" class="social social-whatsapp" aria-label="whatsapp" title="whatsapp" target="_top"><i class="ui-whatsapp"></i></a>
                        <a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_top"><i class="ui-instagram"></i></a>
                    </div>

                    <span class="copyright">
                        &copy; 2021 {{config('app.name')}}, Developed by <a href="https://minderstech.com" target="__top">Minderstech</a>
                    </span>
                </div>		

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
<!-- end navigation -->