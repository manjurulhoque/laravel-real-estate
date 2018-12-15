@extends('app')

@section('content')
    <section class="property">
        <div class="property__header">
            <div class="container">
                <div class="property__header-container">
                    <ul class="property__main">
                        <li class="property__title property__main-item">
                            <div class="property__meta">
                                <span class="property__offer">For {{ $property->offer }}</span>
                                <span class="property__type">{{ $property->type }}</span>
                            </div><!-- .property__meta -->
                            <h2 class="property__name">{{ $property->title }}</h2>
                            <span class="property__address">
                                <i class="ion-ios-location-outline property__address-icon"></i>{{ $property->address }}
                            </span>
                        </li>
                        @if($property->type == "Flat")
                            <li class="property__details property__main-item">
                                <ul class="property__stats">
                                <li class="property__stat"><span class="property__figure">{{ $property->bedrooms }}<sup>&plus;</sup></span>
                                        Beds
                                    </li>
                                <li class="property__stat"><span class="property__figure">{{ $property->bathrooms }}</span> Baths</li>
                                    <li class="property__stat"><span class="property__figure">{{ $property->space }}</span> sq.ft</li>
                                </ul>
                            </li>
                        @endif
                        <li class="property__price property__main-item">
                            <h4 class="property__price-primary">{{ $property->price }} Tk</h4>
                            @if($property->type == "Flat")
                                <span class="property__price-secondary">{{ $property->space }} sq.ft</span>
                            @endif
                        </li>
                    </ul>

                    <div class="property__list" style="font-weight: bold; color: green">
                        Availble From : {{ $property->date }}
                    </ul>
                </div>
            </div>
        </div>

        <div class="property__slider">
            <div class="container">
                <div class="property__slider-container property__slider-container--vertical">
                    <ul class="property__slider-nav property__slider-nav--vertical">
                        @foreach($property->photos as $photo)
                            <li class="property__slider-item">
                                <img src="{{ asset('/images/uploads/'. $photo->location) }}"
                                     alt="Image {{ $photo->id }}">
                            </li>
                        @endforeach
                    </ul><!-- .property__slider-nav -->

                    <div class="property__slider-main property__slider-main--vertical">
                        <div class="property__slider-images">
                            @foreach($property->photos as $photo)
                                <div class="property__slider-image">
                                    <img src="{{ asset('/images/uploads/'. $photo->location) }}"
                                         alt="Image {{ $photo->id }}">
                                </div><!-- .property__slider-image -->
                            @endforeach
                        </div><!-- .property__slider-images -->

                        <ul class="image-navigation">
                            <li class="image-navigation__prev">
                                <span class="ion-ios-arrow-left"></span>
                            </li>
                            <li class="image-navigation__next">
                                <span class="ion-ios-arrow-right"></span>
                            </li>
                        </ul>

                        <span class="property__slider-info">
                            <i class="ion-android-camera"></i>
                            <span class="sliderInfo"></span>
                        </span>
                    </div><!-- .property__slider-main -->
                </div><!-- .property__slider-container -->
            </div><!-- .container -->
        </div><!-- .property__slider -->

        <div class="property__container">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget__container">
                            <section class="widget">
                                <form class="contact-form contact-form--white" method="post"
                                      action="{{ route('contact.agent') }}">
                                    @csrf
                                    <div class="contact-form__header">
                                        <div class="contact-form__header-container">
                                            @if($property->user->profile->avatar == null)
                                                <img src="{{ asset('/images/default.png') }}" height="100" width="100"
                                                     alt="Tristina Avelon">
                                            @else
                                                <img src="{{ asset('/images/uploads/avatar/'. $property->user->profile->avatar) }}"
                                                     alt="">
                                            @endif
                                            <div class="contact-info">
                                                <span class="contact-company">Real State</span>
                                                <h3 class="contact-name"><a href="#">{{ $property->user->name }}</a>
                                                </h3>
                                                <a href="tel:+8002883991"
                                                   class="contact-number">Call: {{ $property->user->profile->phone }}</a>
                                            </div><!-- .contact-info -->
                                        </div><!-- .contact-form__header-container -->
                                    </div><!-- .contact-form__header -->

                                    <div class="contact-form__body">
                                        <input type="text" class="contact-form__field" placeholder="Name" name="name"
                                               required>
                                        <input type="hidden" class="contact-form__field"
                                               value="{{ $property->user->email }}" name="owner_email">
                                        <input type="email" class="contact-form__field" placeholder="Email" name="email"
                                               required>
                                        <input type="tel" class="contact-form__field" placeholder="Phone number"
                                               name="phone_number">
                                        <textarea class="contact-form__field contact-form__comment" cols="30" rows="5"
                                                  placeholder="Comment" name="comment" required></textarea>
                                    </div><!-- .contact-form__body -->

                                    <div class="contact-form__footer">
                                        <input type="submit" class="contact-form__submit" name="submit"
                                               value="Contact Agent">
                                    </div><!-- .contact-form__footer -->
                                </form><!-- .contact-form -->
                            </section><!-- .widget -->

                            <section class="widget widget--white widget--padding-20">
                                <h3 class="widget__title">Similar Homes</h3>
                                <div class="similar-home">
                                    <a href="single_property_1.html">
                                        <div class="similar-home__image">
                                            <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                                            <img src="images/uploads/residia_nishi_azabu.jpg" alt="Residia Nishi Azabu">
                                            <span class="similar-home__favorite"><i class="fa fa-heart-o"
                                                                                    aria-hidden="true"></i></span>
                                        </div>
                                        <div class="similar-home__content">
                                            <h3 class="similar-home__title">Residia Nishi Azabu</h3>
                                            <span class="similar-home__price">$2,185,000</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="similar-home">
                                    <a href="single_property_1.html">
                                        <div class="similar-home__image">
                                            <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                                            <img src="images/uploads/dream_house_take_away.jpg"
                                                 alt="Dream House Take Away">
                                            <span class="similar-home__favorite"><i class="fa fa-heart-o"
                                                                                    aria-hidden="true"></i></span>
                                        </div><!-- .similar-home__image -->
                                        <div class="similar-home__content">
                                            <h3 class="similar-home__title">Dream House Take Away</h3>
                                            <span class="similar-home__price">$2,185,000</span>
                                        </div><!-- .similar-home__content -->
                                    </a>
                                </div><!-- .similar-home -->

                                <div class="similar-home">
                                    <a href="single_property_1.html">
                                        <div class="similar-home__image">
                                            <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                                            <img src="images/uploads/castalia_shibakoen.jpg" alt="Castalia Shibakoen">
                                            <span class="similar-home__favorite"><i class="fa fa-heart-o"
                                                                                    aria-hidden="true"></i></span>
                                        </div><!-- .similar-home__image -->
                                        <div class="similar-home__content">
                                            <h3 class="similar-home__title">Castalia Shibakoen</h3>
                                            <span class="similar-home__price">$2,185,000</span>
                                        </div><!-- .similar-home__content -->
                                    </a>
                                </div><!-- .similar-home -->
                            </section><!-- .widget -->
                        </div><!-- .widget__container -->
                    </aside>

                    <main class="col-md-9">
                        <div class="property__feature-container">

                            <div class="property__feature">
                                <h3 class="property__feature-title property__feature-title--b-spacing">Property
                                    Description</h3>
                                <p>{!! $property->description  !!} </p>

                            </div><!-- .property__feature -->

                            <div class="property__feature">
                                <h3 class="property__feature-title property__feature-title--b-spacing">Property
                                    Details</h3>
                                <ul class="property__details-list">
                                    <li class="property__details-item">
                                        <span class="property__details-item--cat">Type:</span> {{ $property->type }}
                                    </li>
                                    @if($property->type == "Flat")
                                        <li class="property__details-item"><span class="property__details-item--cat">Year Built:</span>
                                            {{ $property->building_year }}
                                        </li>
                                        <li class="property__details-item"><span class="property__details-item--cat">Square Footage:</span>
                                            {{ $property->space }}
                                        </li>
                                    @endif
                                </ul><!-- .property__details-list -->
                            </div><!-- .property__feature -->

                            <div class="property__feature">
                                <h3 class="property__feature-title property__feature-title--b-spacing">Property
                                    Features</h3>
                                <ul class="property__features-list">
                                    @if($property->type == "Flat")
                                        @if($property->is_air_condition == 1)
                                            <li class="property__features-item">
                                                <span class="property__features-icon ion-checkmark-round"></span>Air
                                                Conditioning
                                            </li>
                                        @endif
                                    @endif
                                    <li class="property__features-item">
                                        <span class="property__features-icon ion-checkmark-round"></span>Wifi
                                    </li>
                                </ul><!-- .property__features-list -->
                            </div><!-- .property__feature -->
                        </div><!-- .property__feature-container -->
                    </main>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .property__container -->
    </section><!-- .property -->
@endsection