@extends('layouts.app')

@section('content')
    <div class="container">
    <section class=" content slide slideright ">     <!--   Add "slideRight" class to items that move right when viewing Nav Drawer  -->
        <div class="responsive">
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <div class="tile is-child">
                        <div id="slider" class="nivoSlider" style="height: 400px">
                            @foreach($sliders as $image)
                            <img src="{{ Storage::url($image->image) }}" alt="" title="{{ $image->caption }}">
                            @endforeach

                        </div>
                    </div>
                </div>
                
                <div class="tile is-4 is-vertical is-parent details">
                    <div class="slider-right-title">जोखिम मा परेका / जोखिम अवस्था मा फेला बालबालिका विवरण :</div>
                    <div class="pointers">
                        <div class="option option-1" id="pointers">
                        <h5 class="tile is-child">
                         <a href="">हराएका बालबालिका विवरण </a></h5>
                    </div>
                    <div class="option option-1">
                        <h5 class="tile is-child"> <a href="">बेवारिसे फेला विवरण </a></h5>
                    </div>

                    <div class="option option-1">
                        <h5 class="tile is-child"><a href="">सडक बालबालिका उद्वार  </a></h5>
                    </div>
    
                    </div>
                </div>

            </div>
        </div>
    </section>

 
 <!-- middle section -->

 <div class="tile is-ancestor columns pb-4">

    <!-- Left Tile -->
    <div class=" is-2 column side-pictures">
        <div class=" is-parent is-vertical">
            <div class="is-child tile">
                <figure class=" is-image is-square photo">
                    <img src="https://www.nepalpolice.gov.np/images/final-igp-sarbendra-khanal-2075-01-09.jpg" alt="">
                    <div class="caption">IGP Sarbendra Khanal</div>
                </figure>

                <figure class=" is-image is-square photo">
                    <img src="https://nepalpolice.gov.np/images/spokesperson-2076-03-12.jpg" alt="">
                    <div class="caption">IGP Sarbendra Khanal</div>
                </figure>
            </div>

            <div class=" quick-links">
                <div class="title">Quick links</div>
                <ul class="links">
                    @foreach($quick_links as $link)
                    <li class="link"><a href="{{ $link->url }}"> {{ $link->title }} </a></li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div>


    <!-- middle Tiles -->
    <div class="tile is-6 column">
        <div class=" is-vertical">
            <section class="section tile is-child light-border-on-right" id="about-us">
                <div class="title">@lang('menu.about')</div>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit sed perspiciatis libero iste, fuga saepe totam omnis quod magnam deleniti debitis officia laboriosam quam ratione molestiae quos ut, maxime ullam! Adipisci porro impedit voluptas, laborum quos molestiae reiciendis nostrum accusamus nam error amet, vitae, unde soluta! Quam aliquam obcaecati nesciunt iusto cupiditate, rem. Illo inventore quam, ullam suscipit assumenda molestiae praesentium, dolorum quod eos necessitatibus, laboriosam qui similique consequatur. Quaerat accusamus qui suscipit ratione maiores cum asperiores in veritatis. At porro aperiam sequi enim sit explicabo asperiores eos, veniam nam expedita voluptate unde maxime iste. Quas nisi placeat, maxime nam!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam tempora necessitatibus obcaecati ab modi. Nihil fugit ipsam est in sed. Id at quam tempora blanditiis vero inventore praesentium dolorum dolor mollitia ipsum deleniti corrupti molestias, aut fugit dignissimos perferendis molestiae.
                </p>
            </section>

            <section class="section  light-border-on-right" id="press-release">
                <div class="title">Press Release</div>
                <p class="description">
                    <article class="media press">
                        <figure class="media-left">
                            <p class="image is-64x64">
                                <img src="assets/images/press/1.jpg" alt="">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="titles">Press Release sample 1</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad sint recusandae, consequuntur laborum assumenda impedit possimus voluptatibus quod dolores dolore!</div>
                            <a href="" class="read-more">Read More +</a>

                        </div>
                    </article>

                    <article class="media press">
                        <figure class="media-left">
                            <p class="image is-64x64">
                                <img src="assets/images/press/1.jpg" alt="">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="titles">Press Release sample 2</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad sint recusandae, consequuntur laborum assumenda impedit possimus voluptatibus quod dolores dolore!</div>
                            <a href="" class="read-more">Read More +</a>

                        </div>
                    </article>

                    <article class="media press">
                        <figure class="media-left">
                            <p class="image is-64x64">
                                <img src="assets/images/press/1.jpg" alt="">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="titles">Press Release sample 3</div>
                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad sint recusandae, consequuntur laborum assumenda impedit possimus voluptatibus quod dolores dolore!</div>
                            <a href="" class="read-more">Read More +</a>

                        </div>
                    </article>
                </p>
            </section>
        </div>  
    </div>  

    <!-- Right Tile -->
    <div class=" is-4 column">
        <div class="tile is-parent is-vertical">
            <section class="section tile is-child" id="events">
                @if(sizeof($five_news))
                <div class="title">News & Updates</div>
                <ul class="events-list">
                    @foreach($five_news as $news)
                    <li class="event">
                        <a class="title" href="{{ route('single-news',['id' => $news->id]) }}"> {{ $news->title }}</a>
                        <p class="description">
                            {!! $news->shortDescription(140) !!}
                        </p>
                        <a href="" class="read-more">Read More +</a>
                    </li>
                    @endforeach
                </ul>
                @endif
                                <a class="twitter-timeline" data-height="600" href="https://twitter.com/PM_Nepal?ref_src=twsrc%5Etfw">Tweets by PM_Nepal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
            </section>

        </div>
    </div>


 </div>


<!-- end of content tiles -->


</div>


@endsection