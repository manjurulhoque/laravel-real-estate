@extends('app')

@section('content')

    <section class="item-grid" style="padding: 0; margin-top: 20px">
        <div class="container">
            <div class="row">
                <h1 class="text-center" style="text-align: center; margin-bottom: 20px">Search result</h1>
                @foreach($properties as $property)
                    <div class="col-md-6 item-grid__container">
                        <div class="listing">
                            <div class="item-grid__image-container">
                                <a href="{{ route('feed.properties.single', $property->id) }}">
                                    <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                    <img style="height: 300px; width: 100%"
                                         src="{{ asset('/images/uploads/'.$property->get_featured_image()->location) }}"
                                         alt="Real House Luxury Villa"
                                         class="listing__img">
                                    <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                </a>
                            </div><!-- .item-grid__image-container -->

                            <div class="item-grid__content-container">
                                <div class="listing__content">
                                    <div class="listing__header">
                                        <div class="listing__header-primary">
                                            <h3 class="listing__title">
                                                <a href="{{ route('feed.properties.single', $property->id) }}">{{ $property->title }}</a>
                                            </h3>
                                            <p class="listing__location">
                                                <span class="ion-ios-location-outline listing__location-icon"></span>
                                                {{ $property->address }}
                                            </p>
                                        </div><!-- .listing__header-primary -->
                                        <p class="listing__price">{{ $property->price }} Tk</p>
                                    </div><!-- .listing__header -->
                                    <div class="listing__details">
                                        @if($property->type == "Flat")
                                            <ul class="listing__stats">
                                                <li><span class="listing__figure">{{ $property->bedrooms }}<sup>&plus;</sup></span> Beds</li>
                                                <li><span class="listing__figure">{{ $property->bathrooms }}</span> Baths</li>
                                                <li><span class="listing__figure">{{ $property->space }}</span> sq.ft</li>
                                            </ul><!-- .listing__stats -->
                                        @endif
                                        <a href="{{ route('feed.properties.single', $property->id) }}" class="listing__btn">Details
                                            <span class="listing__btn-icon">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                        </a>
                                    </div><!-- .listing__details -->
                                </div><!-- .listing-content -->
                            </div><!-- .item-grid__content-container -->
                        </div><!-- .listing -->
                    </div><!-- .col -->
                @endforeach
            </div><!-- .row -->

            {{--<div class="item-grid--centered">--}}
            {{--<a href="#" class="item-grid__load-more">Load More</a>--}}
            {{--</div>--}}
        </div><!-- .container -->
    </section>

@endsection