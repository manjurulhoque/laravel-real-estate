@extends('app')

@section('content')
    <section class="main-listing">

        <div class="main-listing__main">
            <div class="container">
                <div class="row">
                    <h1 class="section__title section__title--centered section__title--b-margin-40">All Property</h1>
                    <aside class="col-md-3">
                        <section class="widget main-listing__widget">
                            <form class="main-listing__form" action="{{ route('filter') }}" method="get">
                                <div class="main-listing__wrapper">
                                    <label class="main-listing__form-title">Property Type</label>

                                    <div class="main-listing__form-select">
                                        <input type="radio" name="property_type" id="propertyType2"
                                               class="main-listing__form-radio" value="Single Bed">
                                        <label for="propertyType2" class="main-listing__form-label">Single Bed</label>
                                        <span class="main-listing__form-desc">({{ \App\Property::where('type', 'Single Bed')->count() }})</span>
                                    </div><!-- main-listing__form-select -->

                                    <div class="main-listing__form-select">
                                        <input type="radio" name="property_type" id="propertyType3"
                                               class="main-listing__form-radio" value="Single Room">
                                        <label for="propertyType3" class="main-listing__form-label">Single Room</label>
                                        <span class="main-listing__form-desc">({{ \App\Property::where('type', 'Single Room')->count() }})</span>
                                    </div><!-- main-listing__form-select -->

                                    <div class="main-listing__form-select">
                                        <input type="radio" name="property_type" id="propertyType4"
                                               class="main-listing__form-radio" value="Flat">
                                        <label for="propertyType4" class="main-listing__form-label">Flat</label>
                                        <span class="main-listing__form-desc">({{ \App\Property::where('type', 'Flat')->count() }})</span>
                                    </div><!-- main-listing__form-select -->
                                </div><!-- .main-listing__wrapper -->

                                <div class="main-listing__wrapper">
                                    <label for="listing-city" class="main-listing__form-title">City</label>
                                    <select name="city" id="listing-city" class="ht-field main-listing__form-field">
                                        @foreach(\App\City::all() as $city)
                                            <option value="{{ $city->name }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select><!-- .main-listing__form-field -->
                                </div><!-- .main-listing__wrapper -->

                                {{--<div class="main-listing__wrapper">--}}
                                    {{--<label for="main-listing-keyword" class="main-listing__form-title">Keyword</label>--}}
                                    {{--<input type="text" id="main-listing-keyword" class="main-listing__form-field"--}}
                                           {{--placeholder="Enter keywords...">--}}
                                {{--</div><!-- .main-listing__wrapper -->--}}

                                <div class="main-listing__wrapper">
                                    <label for="listing-bedroom" class="main-listing__form-title">Bedrooms</label>
                                    <input type="text" name="bedroom" id="main-listing-keyword" class="main-listing__form-field"
                                           placeholder="Enter number...">
                                </div><!-- .main-listing__wrapper -->

                                <div class="main-listing__wrapper">
                                    <label for="listing-bathroom" class="main-listing__form-title">Bathrooms</label>
                                    <input type="text" name="bathroom" id="main-listing-keyword" class="main-listing__form-field"
                                           placeholder="Enter number...">
                                </div><!-- .main-listing__wrapper -->

                                <div class="main-listing__wrapper">
                                    <label for="min-lot" class="main-listing__form-title">Price</label>
                                    <div class="main-listing__form-container">
                                        <input type="text" name="min_price" id="main-listing-keyword" class="main-listing__form-field"
                                               placeholder="Enter min price...">

                                        <input type="text" name="max_price" id="main-listing-keyword" class="main-listing__form-field"
                                               placeholder="Enter max price...">
                                    </div><!-- .main-listing__form-container -->
                                </div><!-- .main-listing__wrapper -->

                                {{--<a href="#" class="main-listing__form-more-filter">More Filter</a>--}}
                                {{--<div class="main-listing__form-expand">--}}
                                    {{--<div class="main-listing__wrapper">--}}
                                        {{--<label for="min-year" class="main-listing__form-title">Year Built</label>--}}
                                        {{--<div class="main-listing__form-container">--}}
                                            {{--<select name="min-year" id="min-year"--}}
                                                    {{--class="ht-field main-listing__form-field">--}}
                                                {{--<option value="0" selected>No min</option>--}}
                                                {{--<option value="2000">2000</option>--}}
                                                {{--<option value="2001">2001</option>--}}
                                                {{--<option value="2002">2002</option>--}}
                                                {{--<option value="2003">2003</option>--}}
                                                {{--<option value="2004">2004</option>--}}
                                                {{--<option value="2005">2005</option>--}}
                                                {{--<option value="2006">2006</option>--}}
                                            {{--</select><!-- .main-listing__form-field -->--}}

                                            {{--<select name="max-year" id="max-year"--}}
                                                    {{--class="ht-field main-listing__form-field">--}}
                                                {{--<option value="0" selected>No max</option>--}}
                                                {{--<option value="2006">2006</option>--}}
                                                {{--<option value="2007">2007</option>--}}
                                                {{--<option value="2008">2008</option>--}}
                                                {{--<option value="2009">2009</option>--}}
                                                {{--<option value="2010">2010</option>--}}
                                                {{--<option value="2011">2011</option>--}}
                                                {{--<option value="2012">2012</option>--}}
                                            {{--</select><!-- .main-listing__form-field -->--}}
                                        {{--</div><!-- .main-listing__form-container -->--}}
                                    {{--</div><!-- .main-listing__wrapper -->--}}
                                {{--</div><!-- .main-listing_-form-expand -->--}}

                                <button class="main-listing__form-reset" type="submit">Go</button>
                                <button class="main-listing__form-reset" type="reset">Clear Filter</button>
                            </form><!-- .main-listing__form -->
                        </section><!-- .widget -->

                        <section class="widget main-listing__widget widget__news">
                            <h3 class="widget__title">Get to Know</h3>
                            <ul class="widget__news-list">
                                <li class="widget__news-item"><a href="#">Outer Sunset Real Estate: <span>San Francisco Neighborhood Guide</span></a>
                                </li>
                                <li class="widget__news-item"><a href="#">Pacific Heights Real Estate: <span>San Francisco CA Neighborhood</span></a>
                                </li>
                                <li class="widget__news-item"><a href="#">Mission District San Francisco: <span>Authentic Community</span></a>
                                </li>
                                <li class="widget__news-item"><a href="#">Hayes Valley Real Estate: <span>San Francisco CA Neighborhood</span></a>
                                </li>
                            </ul>
                        </section><!-- .widget -->
                    </aside><!-- .col -->

                    <main class="col-md-9">
                        <section>
                            @foreach($feeds as $feed)
                                <div class="item-grid__container">
                                    <div class="listing listing--v2">
                                        <div class="item-grid__image-container item-grid__image-container--v2">
                                            <a href="single_property_1.html">
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

                        <ul class="pagination pagination--t-margin">
                            <li class="pagination__item">
                                <a href="#" class="pagination__link pagination__link_prev"><i class="fa fa-angle-left"
                                                                                              aria-hidden="true"></i></a>
                            </li>
                            <li class="pagination__item">
                                <a href="#" class="pagination__link pagination__link--selected">1</a>
                            </li>
                            <li class="pagination__item"><a href="#" class="pagination__link">2</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link">3</a></li>
                            <li class="pagination__item"><a href="#" class="pagination__link pagination__link_next"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul><!-- pagination -->
                    </main><!-- .col -->
                </div><!-- row -->
            </div><!-- .container -->
        </div><!-- .main-listing__main -->
    </section><!-- .main-listing -->
@endsection