
		<!-- Navigation -->
		<header class="nav">
			<div class="nav__holder nav--sticky">
				<div class="container-fluid nav__container nav__container--side-padding">
					<div class="flex-parent">

						<div class="nav__header">
							<!-- Logo -->
							<a href="/home" class="logo-container flex-child">
								<img class="logo header-logo" src="{{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}}" 
                                srcset="{{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}} 1x, 
                                {{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}} 2x" alt="Naomix Gallery">
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
                                <li class="active"><a href="/home">Home</a></li>
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
                                <li><a href="/contact">Contact</a></li>
                            </ul> <!-- end menu -->
                            
							<div class="nav__phone nav__phone--mobile d-lg-none">
								<a href="tel:+2347030555625" target="__top"><span class="nav__phone-text social-phone" aria-label="phone" title="Call Us"><i class="ui-phone"></i></span> </a>
								<a href="tel:+2347030555625" target="__top" class="nav__phone-number _large_screen_only">+2347030555625</a>
							</div>

							<div class="nav__socials nav__socials--mobile d-lg-none">
								<div class="socials">
									<a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
									<a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
									<a href="https://wa.me/+2347030555625" class="social social-whatsapp" aria-label="whatsapp" title="whatsapp" target="_blank"><i class="ui-whatsapp"></i></a>
									<a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
								</div>
							</div>
						</nav> <!-- end nav-wrap -->

						<div class="nav__phone nav--align-right d-none d-lg-flex">
						<a href="tel:+2347030555625" target="__top"><span class="nav__phone-text social-phone" aria-label="phone" title="Call Us"><i class="ui-phone"></i></span> </a>
							<a href="tel:+2347030555625" target="__top" class="nav__phone-number _large_screen_only">+2347030555625</a>
						</div>

						<div class="nav__socials d-none d-lg-block">
							<div class="socials">
								<a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_top"><i class="ui-twitter"></i></a>
								<a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_top"><i class="ui-facebook"></i></a>
								<a href="https://wa.me/+2347030555625" class="social social-whatsapp" aria-label="whatsapp" title="whatsapp" target="_top"><i class="ui-whatsapp"></i></a>
								<a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_top"><i class="ui-instagram"></i></a>
							</div>
						</div>

					</div> <!-- end flex-parent -->
				</div> <!-- end container -->

			</div>
		</header> <!-- end navigation -->