
    
    <section class="section-wrap pt-0 pb-0">
        <a name="exhibition">&nbsp;</a>
        <div class="container">
            <div class="title-row mb-24">
                <p class="subtitle d-none">Portfolio</p>
                <h2 class="section-title">Exhibitions</h2>
            </div>
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="/exhibition/{{$exhibitions[0]->id}}">
                        <img src="{{asset( !empty($exhibitions[0]->first_item->path) ? config('app.storage_prefix').$exhibitions[0]->first_item->path : 
                        config('app.public_prefix').'assets/images/exhibition/1.jpg')}}" class="entry__img" alt="">
                    </a>
                </div>
                <div class="entry__body text-center">
                    <ul class="entry__meta">
                        <li class="entry__meta-date">
                            <span>{{$exhibitions[0]->year}}</span>
                        </li>
                        <li class="entry__meta-author">
                            <a href="#">{{$exhibitions[0]->location}}</a>
                        </li>
                    </ul>
                    <h2 class="entry__title">
                        <a href="/exhibition{{ !empty($exhibitions[0]->id) ? '/'.$exhibitions[0]->id : 's'}}">{{$exhibitions[0]->year}}, {{$exhibitions[0]->title}}, SNA October Rain Exhibition</a>
                    </h2>
                    <div class="entry__excerpt">
                        {!! $exhibitions[0]->description_decode !!}
                    </div>
                    <a href="/exhibitions" class="read-more">
                    <span class="read-more__text">Explore</span>
                    <i class="ui-arrow-right read-more__icon"></i>
                    </a>
                </div>
            </article>
        </div>
    </section>