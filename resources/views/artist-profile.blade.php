@extends('layouts.app')

@section('header')
    @include('layouts.header2')
@endsection
@section('content')
<div class="content-wrapper content-wrapper--boxed oh">
    <!-- Page Title -->
    <section class="page-title page-title--tall blog-featured-img bg-dark-overlay text-center" 
        style="background-image: url({{asset(config('app.public_prefix').'assets/images/artist-profile/naomi-oyeniyi.jpg)')}};">
        <div class="container">
            <div class="page-title__holder">
                <h1 class="page-title__title">Artist's Profile</h1>
            </div>
        </div>
    </section> <!-- end page title -->
    <!-- Single Post -->
    <section class="section-wrap pt-40 pb-48">
        
        <div class="box-offset-container">
            <div class="blog__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <!-- Article -->
                            <article class="entry mb-0">
                                <div class="entry__article-wrap">
                            
                                    <!-- Share -->
                                    <div class="entry__share">
                                        <div class="sticky-col">
                                            <div class="socials socials--rounded socials--base">
                                                <a class="social social-facebook" href="https://www.facebook.com/Naomixgallery" title="facebook" target="_top" aria-label="facebook">
                                                    <i class="ui-facebook"></i>
                                                </a>
                                                <a class="social social-twitter" href="https://twitter.com/NaomixGallery?s=09" title="twitter" target="_top" aria-label="twitter">
                                                    <i class="ui-twitter"></i>
                                                </a>
                                                <a class="social social-instagram" href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" title="instagram" target="_top" aria-label="instagram">
                                                    <i class="ui-instagram"></i>
                                                </a>
                                                <a class="social social-whatsapp" href="https://wa.me/+2347030555625" title="whatsapp" target="_top" aria-label="whatsapp">
                                                    <i class="ui-whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- end share -->
                            
                                    <div class="entry__article">
                                        <p><a href="#"><strong>Naomi Oyenyi</strong></a> is a contemporary Nigerian artist who obtained her B.A honours from the 
                                            Department of Fine and Applied Arts, Obafemi Awolowo University, Ile-Ife with a specialization in painting.
                                        </p>
                                        <p>
                                            She has participated in art workshops and has a record of participating in art exhibitions within Nigeria. 
                                            Naomi has worked on some murals which includes the creation of the Guinness logo on a painted wall for the Guinness Flavour Rooms Event and 
                                            participation in the creation of the Ojodu-Berger Bridge mural commissioned by Governor Akinwunmi Ambode, just to mention a few. 
                                            She has also worked with an organization called Teach for Nigeria as a Fellow to teach in Nigeria’s underserved schools in low communities. 
                                            She is a member of the Society of Nigerian Artists (SNA) and also a member of the Female Artists Association of Nigeria (FEAAN). 
                                            In 2020, she was awarded the winner in the Visual Art Category from Nigeria of the African Union Feminist programme.
                                        </p>
                                        <p>
                                            Naomi’s projections in the nearest future is to establish an identity that could be reckoned with and also establish a platform on which young 
                                            artists can engage themselves creatively.
                                        </p>
                                        <ul class="list-no-bullet">	
                                            <li>
                                                <a href="mailto:naomixgallery@gmail.com" class="social social-email" aria-label="email" title="Mail Us" target="_top"><i class="ui-email"></i>: naomixgallery@gmail.com</a>
                                            </li>
                                            <li>
                                                <a href="tel:+2347030555625" class="social social-phone" aria-label="phone" title="Call Us" target="_top"><i class="ui-phone"></i>: +2347030555625</a>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/2347030555625" class="social social-whatsapp" aria-label="whatsapp" title="whatsapp" target="_top"><i class="ui-whatsapp"></i>: +2347030555625</a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/naomixgallery?igshid=1va7oeih9xm11" class="social social-instagram" aria-label="instagram" title="instagram" target="_top"><i class="ui-instagram"></i>: @naomixgallery</a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/NaomixGallery?s=09" class="social social-twitter" aria-label="twitter" title="twitter" target="_top"><i class="ui-twitter"></i>: @naomixgallery</a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/Naomixgallery/" class="social social-facebook" aria-label="facebook" title="facebook" target="_top"><i class="ui-facebook"></i>: Naomix Gallery</a>
                                            </li>
                                        </ul>
                                        <a name="statement">&nbsp;</a>
                                        <blockquote class="text-justify">
                                            <p>ARTIST’S STATEMENT</p>
                                        </blockquote>
                                        <p>
                                            As a child, Naomi had been drawn to colourful things. Today, art has made her life meaningful and colourful as she delves into 
                                            creating amazing works on her canvases. With the use of palette knife to paint the impasto technique, she layers colours broken 
                                            down into numerous shades creating close fragmentation of overlapping lines to form her images. This approach could be referred to 
                                            as the impressionistic-realism. Her figurative forms are usually realistic while her colour applications are impressionistic in 
                                            nature which gives an overall realistic look when viewed from a distance. Her creative approach with the use of impasto have 
                                            distinguished her from her contemporaries as a strong emerging artist.
                                        </p>
                            
                                        <h2 class="d-none">Identify your Market</h2>
                                        <p>
                                            Her works exhibits high in-depth research and knowledge of her immediate environment. 
                                            This brings about her thematic disposition which spans from concepts captured from her environment and these are social-cultural, 
                                            political and religious in nature. She uses her art to speak on issues which arouses positive thoughts and conversations asides its 
                                            aesthetical purpose. These majorly hammers on equity; giving voice to the voiceless, societal situations with possible solutions and 
                                            also takes a peep into her personal experiences. Her dynamic abilities have enabled her to explore and experiment the use of other 
                                            materials like, pastel, watercolour, and other objects.
                                        </p>
                                        <p>
                                            She keeps evolving and exploring in her art. She takes on mural jobs and pushes herself to the limit. This open-mindedness enabled her to 
                                            successfully use crown-corks to create the Guinness logo on a painted wall for one of their events.  
                                            Naomi has her works collected both home and abroad and she is not ready to dowse it till she makes her mark and contributes positively to 
                                            her generation.
                                        </p>
                            
                                        <h4>Selected Exhibitions</h4>
                                        <ol start="i">
                                            <li>2020, Lagos Polo Club, Ikoyi Lagos.</li>
                                            <li>2019, When Thought Becomes Reality, SNA October Rain Exhibition, Freedom Park Lagos Island.</li>
                                            <li>2019, Gift of Blood, A Multi-Art Exhibition, Kulture Kode Arthub, Chocolate Mall,Wuse 2 Abuja.</li>
                                            <li>2019, Uncovered Female Nigerian Artists, British Club British Village Inn, Abuja.</li>
                                            <li>2018, Press For Progress, Women Move On, Nike Art Gallery, Ikate Lekki Lagos.</li>
                                            <li>2017, Eko Art Expo “Lagos for All”, Eko Hotel and Suites, Lagos.</li>
                                        </ol>
                            
                                        <!-- tags -->
                                        <div class="entry__tags">
                                            <i class="ui-tags"></i>
                                            <span class="entry__tags-label">Tags:</span>
                                            <a href="#" rel="tag">Art, </a>
                                            <a href="/gallery" rel="tag">Gallery, </a>
                                            <a href="/exhibitions" rel="tag">Exhibitions</a>
                                        </div>
                                        <!-- end tags -->
                            
                                    </div>
                                    <!-- end entry article -->
                                </div>
                                <!-- end entry article wrap -->
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</div>
@endsection