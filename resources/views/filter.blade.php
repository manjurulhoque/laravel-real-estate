@extends('app')

@section('content')
    <section class="main-listing">

        <div class="main-listing__main">
            <div class="container">
                <div class="row">
                    <h1 class="section__title section__title--centered section__title--b-margin-40">Filtering</h1>

                    <main class="col-md-12">
                        <section>
                            @foreach($properties as $feed)
                                <div class="item-grid__container">
                                    <div class="listing listing--v2">
                                        <div class="item-grid__image-container item-grid__image-container--v2">
                                            <a href="#">
                                                <div class="item-grid__image-overlay"></div>
                                                <!-- .item-grid__image-overlay -->
                                                <img src="{{ asset('/images/uploads/'.$feed->get_featured_image()->location) }}"
                                                     alt="{{ $feed->title }}"
                                                     class="listing__img">
                                                <span class="item__label">For {{ $feed->offer }}</span>
                                                <span class="listing__favorite listing__favorite--v2">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div><!-- .col -->

                                        <div class="item-grid__content-container item-grid__content-container--v2">
                                            <div class="listing__content--v2">
                                                <div class="listing__header">
                                                    <div class="listing__header-primary">
                                                        <span class="listing__type">{{ $feed->type }}</span>
                                                        <h3 class="listing__title">
                                                            <a href="single_property_1.html">{{ $feed->title }}</a>
                                                        </h3>
                                                        <p class="listing__location">
                                                            <span class="ion-ios-location-outline listing__location-icon"></span>
                                                            {{ $feed->address }}
                                                        </p>
                                                    </div><!-- .listing__header-primary -->
                                                    <p class="listing__price">{{ $feed->price }} Tk</p>
                                                </div><!-- .listing__header -->
                                                <div class="listing__details">
                                                    @if($feed->type == "Flat")
                                                        <ul class="listing__stats">
                                                            <li><span class="listing__figure">{{ $feed->bedrooms }}<sup>&plus;</sup></span>
                                                                Beds
                                                            </li>
                                                            <li>
                                                                <span class="listing__figure">{{ $feed->bathrooms }}</span>
                                                                Baths
                                                            </li>
                                                            <li><span class="listing__figure">{{ $feed->space }}</span>
                                                                sq.ft
                                                            </li>
                                                        </ul><!-- .listing__stats -->
                                                    @endif
                                                    <a href="{{ route('feed.properties.single', $feed->id) }}"
                                                       class="listing__btn">Details <span
                                                                class="listing__btn-icon"><i class="fa fa-angle-right"
                                                                                             aria-hidden="true"></i></span></a>
                                                </div><!-- .listing__details -->
                                            </div><!-- .listing-content -->
                                        </div><!-- .col -->
                                    </div><!-- .listing -->
                                </div><!-- .item-grid__container -->
                            @endforeach
                        </section>

                        {{--<ul class="pagination pagination--t-margin">--}}
                            {{--<li class="pagination__item">--}}
                                {{--<a href="#" class="pagination__link pagination__link_prev"><i class="fa fa-angle-left"--}}
                                                                                              {{--aria-hidden="true"></i></a>--}}
                            {{--</li>--}}
                            {{--<li class="pagination__item">--}}
                                {{--<a href="#" class="pagination__link pagination__link--selected">1</a>--}}
                            {{--</li>--}}
                            {{--<li class="pagination__item"><a href="#" class="pagination__link">2</a></li>--}}
                            {{--<li class="pagination__item"><a href="#" class="pagination__link">3</a></li>--}}
                            {{--<li class="pagination__item"><a href="#" class="pagination__link pagination__link_next"><i--}}
                                            {{--class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
                        {{--</ul><!-- pagination -->--}}
                    </main><!-- .col -->
                </div><!-- row -->
            </div><!-- .container -->
        </div><!-- .main-listing__main -->
    </section><!-- .main-listing -->
@endsection