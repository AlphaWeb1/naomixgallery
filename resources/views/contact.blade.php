@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <!-- Page Title -->
    <section class="page-title bg-dark-overlay text-center" style="background-image: url({{asset(config('app.public_prefix').'assets/img/page-title/contact.jpg')}});">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Contact</h1>
            </div>
        </div>
    </section> <!-- end page title -->

	<!-- Contact -->
    <section class="section-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
                <div class="contact">
                    <h5 class="contact__title">Melbourne Office</h5>
                    <ul class="contact__items">
                    <li class="contact__item">
                                            <span class="contact__item-label">Address:</span>
                        <address>Melbourne's GPO 350 Bourke St.<br>Melbourne VIC 3000, Australia</address>
                    </li>
                    <li class="contact__item">
                        <span class="contact__item-label">Phone: </span>
                        <a href="tel:+2347030555625">+2347030555625</a>
                    </li>
                    <li class="contact__item">
                        <span class="contact__item-label">Email: </span>
                        <a href="mailto:naomixgallery@gmail.com">naomixgallery@gmail.com</a>
                    </li>
                    </ul>
                                    
                    <h5 class="contact__title mt-40">Follow Us</h5>
                    <div class="socials">
                        <a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_blank"><i class="ui-twitter"></i></a>
                        <a href="https://www.facebook.com/Naomixgallery" class="social social-facebook" aria-label="facebook" title="facebook" target="_blank"><i class="ui-facebook"></i></a>
                        <a href="#" class="social social-youtube d-none" aria-label="youtube" title="google plus" target="_blank"><i class="ui-youtube"></i></a>
                        <a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_blank"><i class="ui-instagram"></i></a>
                    </div>
                </div>
			</div>
            <div class="col-lg-7 offset-lg-1">
                <h2 class="section-title">Get a Free Quote</h2>
                <p class="mb-40">Use the form fill below to contact us for more enquiry.</p>
                <!-- Contact Form -->
                <form id="contact-form" class="contact-form material" method="post" action="/contact">
                    @csrf()
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Name -->
                            <div class="material__form-group form-group">
                                <input type="text" name="name" id="name" class="form-input material__input" required="">
                                <label for="name" class="material__label">Name
                                    <abbr title="required" class="required">*</abbr>
                                </label>
                                <span class="material__underline"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Email -->
                            <div class="material__form-group form-group">
                                <input type="email" name="email" id="email" class="form-input material__input" required="">
                                <label for="email" class="material__label">Email
                                    <abbr title="required" class="required">*</abbr>
                                </label>
                                <span class="material__underline"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="material__form-group form-group">
                        <input type="text" name="subject" id="subject" class="form-input material__input">
                        <label for="subject" class="material__label">Subject
                        </label>
                        <span class="material__underline"></span>
                    </div>							

                    <div class="material__form-group form-group">
                        <textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
                        <label for="message" class="material__label">Message
                            <abbr title="required" class="required">*</abbr>
                        </label>
                        <span class="material__underline"></span>
                    </div>								

                    <input type="submit" class="btn btn--lg btn--color btn--button" value="Send Message" id="submit-message">
                    <div id="msg" class="message"></div>
                </form>
            </div>
          </div>
        </div>
    </section> <!-- end contact -->
    <!-- Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9679844513716!2d120.97225391411865!3d14.60089968980224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca1023917729%3A0xfb3589db486b911!2sV.%20Tytana%20St%2C%20Binondo%2C%20Manila%2C%201006%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sng!4v1611965013561!5m2!1sen!2sng" style="width: 100%; min-height: 450;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    @include('layouts.footer')
</div>
@endsection