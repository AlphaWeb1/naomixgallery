
    <!-- Services -->
    <section class="section-wrap pt-0 pb-0">
        <a name="offer">&nbsp;</a>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="{{asset( !empty($exhibitions[0]->first_item->path) ? config('app.storage_prefix').$exhibitions[0]->first_item->path : 
                                config('app.public_prefix').'assets/images/exhibition/2.jpg') }}" class="service-1__img" alt="">
                        </a>								
                        <div class="service-1__info">
                            <h3 class="service-1__title">Exhibitions</h3>
                            <ul class="service-1__features">
                                @forelse($exhibitions as $exhibition)
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">{{ $exhibition->year }}, {{ $exhibition->title }}...</span>
                                </li>
                                @empty
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, When Thought Becomes Reality, SNA October Rain Exhibition...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, Gift of Blood, A Multi-Art Exhibition, Kulture Kode Arthub...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, Uncovered Female Nigerian Artists, British Club British Village Inn, Abuja.</span>
                                </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="{{asset( !empty($galleries->collection->path) ? config('app.storage_prefix').$galleries->collection->path : 
                            config('app.public_prefix').'assets/images/gallery/collections/2.jpg' )}}" class="service-1__img" alt="">
                        </a>								
                        <div class="service-1__info">
                            <h3 class="service-1__title">Gallery</h3>
                            <ul class="service-1__features">
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Gallery Collection</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Miniature</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Portraits</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">Abstract</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service-1">
                        <a href="#" class="service-1__url hover-scale">
                            <img src="{{asset( !empty($murals[0]->path) ? config('app.storage_prefix').$murals[0]->path : 
                                config('app.public_prefix').'assets/images/mural/1.jpg' )}}" class="service-1__img" alt="">
                        </a>								
                        <div class="service-1__info">
                            <h3 class="service-1__title">Mural</h3>
                            <ul class="service-1__features">
                                @forelse($murals as $mural)
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">{{ $mural->year }}, {{ $mural->title }}...</span>
                                </li>
                                @empty
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2019, Creation of fashion illustrations on the walls...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2018, Creation of the Guinness harp logo with crown corks...</span>
                                </li>
                                <li class="service-1__feature">
                                    <i class="ui-check service-1__feature-icon"></i>
                                    <span class="service-1__feature-text">2017, Participation in the creation of the Ojodu-Berger Bridge mural...</span>
                                </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- end services -->