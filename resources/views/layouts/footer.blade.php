<!-- Footer -->
<footer class="footer bg-dark-overlay" style="background-image: url({{ asset(config('app.public_prefix').'assets/img/footer/1.jpg)') }};">
    <div class="container-fluid">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="widget widget-about-us">
                        <!-- Logo -->
                        <a href="/home" class="logo-container flex-child">
                            <img class="logo" src="{{asset(config('app.public_prefix').'assets/images/logo/logo-white.svg')}}" 
                            srcset="{{asset(config('app.public_prefix').'assets/images/logo/logo-white.svg')}} 1x, 
                            {{asset(config('app.public_prefix').'assets/images/logo/logo-white.svg')}} 2x" alt="logo">
                        </a>
                    </div>
                </div> <!-- end logo -->

                <div class="col-lg-2 col-md-3">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="/about">Naomix Gallery Ltd</a></li>
                            <li><a href="/exhibitions">Exhibitions</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/store">Store</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3">
                    <div class="widget widget_nav_menu">
                        <ul>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/terms">Terms &amp; Conditions</a></li>
                            <li><a href="/faq">F.A.Q.</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-lg-offset-1 col-md-3">
                    <div class="widget">
                        <div class="socials mb-8 pull-left float-left">
                            <span class="">Call us:</span>
                            <a href="tel:+2347030555625" aria-label="contact-tel" title="contact-tel" target="_top"><i class="fa fa-telephone"></i> +2347030555625</a>
                        </div>
                        <div class="socials mb-8 pull-left float-left">
                            <span>Email us:</span>
                            <a href="mailto:naomixgallery@gmail.com" aria-label="contact-mail" title="contact-mail" target="_top">naomixgallery@gmail.com</a>
                        </div>
                        <div class="socials text-lg-center">
                            <a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter font-27"></i></a>
                            <a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook font-27"></i></a>
                            <a href="https://wa.me/2347030555625" class="social social-whatsapp d-none" aria-label="youtube" title="whatsapp" target="_blank"><i class="ui-whatsapp font-27"></i></a>
                            <a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram font-27"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end container -->

    <div class="footer__bottom">
        <div class="container-fluid text-right text-md-center">
            <span class="copyright">
                &copy; 2021 {{config('app.name')}}, Developed by <a href="https://minderstech.com" target="__blank">Minderstech</a>
            </span>
        </div>
    </div> <!-- end footer bottom -->
</footer> <!-- end footer -->

<div id="back-to-top">
    <a href="#top"><i class="ui-arrow-up"></i></a>
</div>