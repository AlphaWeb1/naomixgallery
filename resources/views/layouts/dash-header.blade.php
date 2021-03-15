<!-- Navigation -->
<header class="nav nav--side bg-white nav--side-sticky-left">
    <div class="nav__holder">
        <div class="nav__container container">

            <div class="flex-parent">

                <div class="nav__header">
                    <!-- Logo -->
                    <a href="/home" class="logo-container flex-child">
                        <img class="logo header-logo" src="{{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}}" 
                        srcset="{{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}} 1x, {{asset(config('app.public_prefix').'assets/images/logo/logo-colored-new.png')}} 2x" alt="NaomixGallery">
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
                        <li class="active"><a href="/home">Home Page</a></li>
                        <li class="nav__dropdown">
                            <a href="/root/exhibitions" aria-haspopup="true">Exhibitions</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/root/exhibitions">Exibitions</a></li><!--cruid,manage hide, show-->
                                <li class="d-none"><a href="/root/exhibition-new">Add New Exhibition</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="/root/gallery" aria-haspopup="true">Gallery</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/root/gallery">All Gallery</a></li>
                                <li><a href="/root/gallery?type=abstract">Abstract</a></li>
                                <li><a href="/root/gallery?type=miniature">Miniature</a></li>
                                <li><a href="/root/gallery?type=portrait">Portraits</a></li>
                                <li><a href="/root/gallery?type=collection">Gallery Collection</a></li>
                                <li class="d-none"><a href="/root/gallery-new">Add New Gallery</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="/root/murals" aria-haspopup="true">Murals</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/root/murals">Murals</a></li>
                                <li class="d-none"><a href="/root/mural-new">Add New Mural</a></li>
                            </ul>
                        </li>
                        <li class="nav__dropdown">
                            <a href="/root/store" aria-haspopup="true">Naomix Store</a>
                            <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                            <ul class="nav__dropdown-menu">
                                <li><a href="/root/store">Products</a></li>
                                <li class="d-none"><a href="/root/store-new">Add New Product</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin-logout">Logout</a></li>
                    </ul> <!-- end menu -->

                    <!-- Mobile Search -->
                    <div class="nav__search-mobile d-lg-none d-none">                            
                        <form role="search" method="get" class="search-form relative">
                            <input type="search" class="search-input" placeholder="Search" value="" name="s">
                            <button type="submit" class="search-button" aria-label="Search button"><i class="ui-search search-icon"></i></button>
                        </form>
                    </div>
                </nav> <!-- end nav-wrap -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>
<!-- end navigation -->