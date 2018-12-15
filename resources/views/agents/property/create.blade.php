@extends('app')

@section('content')

    <section class="my-profile">
        <div class="container">

            <div class="my-profile__container">
                <div class="row">
                    @include('partials.profile-sidebar')
                    <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-9">
                            <div class="submit-property__block">
                                <h3 class="submit-property__headline">Basic Information</h3>

                                <div class="submit-property__group">
                                    <label for="property-title" class="submit-property__label">Property Title *</label>
                                    <input type="text" name="title" class="submit-property__field" id="property-title"
                                           placeholder="Perfect House for Sale" required>
                                </div><!-- .submit-property__group -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-type" class="submit-property__label">Property Type
                                                *</label>
                                            <select class="ht-field" name="type" id="property-type" required>
                                                <option value="Single Bed">Single Bed</option>
                                                <option value="Single Room">Single Room</option>
                                                <option value="Flat">Flat</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-offer" class="submit-property__label">Offer *</label>
                                            <select class="ht-field" name="offer" id="property-offer" required>
                                                <option value="rent">For Rent</option>
                                                <option value="sale">For Sale</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    {{--<div class="col-md-4">--}}
                                    {{--<div class="submit-property__group">--}}
                                    {{--<label for="property-rental-period" class="submit-property__label">Rental--}}
                                    {{--Period *</label>--}}
                                    {{--<select class="ht-field" id="property-rental-period" required>--}}
                                    {{--<option value="monthly">Monthly</option>--}}
                                    {{--<option value="yearly">Yearly</option>--}}
                                    {{--</select>--}}
                                    {{--</div><!-- .submit-property__group -->--}}
                                    {{--</div><!-- .col -->--}}
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-price" class="submit-property__label">Property Price
                                                *</label>
                                            <input type="text" name="price" class="submit-property__field"
                                                   id="property-price"
                                                   required>
                                            <span class="submit-property__unit">Tk</span>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="submit-property__group" id="property_space">
                                            <label for="property-space" class="submit-property__label">Property Space
                                                *</label>
                                            <input type="text" name="space" class="submit-property__field"
                                                   id="property-space"
                                                   required>
                                            <span class="submit-property__unit">sq.ft</span>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-4" id="property_room">
                                        <div class="submit-property__group">
                                            <label for="property-room" class="submit-property__label">Property Room
                                                *</label>
                                            <select class="ht-field"  name="total_room" id="property-room"
                                                    required>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="more">More than 5</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                </div><!-- .row -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-address" class="submit-property__label">Address *</label>
                                            <input type="text" name="address" class="submit-property__field" id="property-address">
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-address" class="submit-property__label">Available from *</label>
                                            <input type="text" name="date" class="property__form-field property__form-date" placeholder="Monday" data-format="l, F d, Y"  data-min-year="2017"  data-max-year="2020" data-translate-mode="true" data-modal="true" data-large-mode="true" required>
                                            <span class="ion-android-calendar property__form-icon"></span>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                </div>

                                <div class="row">
                                    <div class="col-md-4" id="property_room">
                                        <div class="submit-property__group">
                                            <label for="property-room" class="submit-property__label">City
                                                *</label>
                                            <select class="ht-field" name="city" id="property-city" required>
                                                <option disabled selected hidden>Choose city</option>
                                                @foreach($cities as $city)
                                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                    <div class="col-md-4" id="property_room">
                                        <div class="submit-property__group">
                                            <label for="property-areas" class="submit-property__label">Area
                                                *</label>
                                            <input type="text" name="areas" class="submit-property__field"
                                                   id="property-areas"
                                                   required>
                                            <span class="submit-property__unit">Type your Area</span>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                    <div class="col-md-4" id="property_room">
                                        <div class="submit-property__group">
                                            <label for="property-areas" class="submit-property__label">Contact number
                                                *</label>
                                            <input type="tel" name="contact" class="submit-property__field"
                                                   id="property-areas"
                                                   required>
                                            <span class="submit-property__unit">Contact number</span>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                </div><!-- .row -->

                                <div class="submit-property__group">
                                    <label for="submit-property-wysiwyg" class="submit-property__label">Description
                                        *</label>
                                    <textarea name="description" id="submit-property-wysiwyg"></textarea>
                                </div><!-- .submit-property__group -->
                            </div><!-- .submit-property__block -->

                            <div class="submit-property__block">
                                <h3 class="submit-property__headline">Gallery</h3>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="submit-property__group">
                                            <label for="property-featured-image" class="submit-property__label">Featured
                                                Image *</label>
                                            <div class="submit-property__upload">
                                                <input type="file" name="is_featured" required>
                                                <div class="submit-property__upload-inner">
                                                    <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                    <span class="submit-property__upload-desc">Drop image here or click to upload</span>
                                                </div>
                                            </div><!-- .submit-proeprty__upload -->
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-7">
                                        <div class="submit-property__group">
                                            <label for="property-media" class="submit-property__label">All Images
                                                *</label>
                                            <div class="submit-property__upload">
                                                <input type="file" multiple required name="all_images[]">
                                                <div class="submit-property__upload-inner">
                                                    <span class="ion-ios-plus-outline submit-property__icon"></span>
                                                    <span class="submit-property__upload-desc">Drop all images here or click to upload</span>
                                                </div>
                                            </div><!-- .submit-proeprty__upload -->
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .submit-property__block -->

                            <div class="submit-property__block" id="info_flat">
                                <h3 class="submit-property__headline">Detailed Information for flat</h3>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-year" class="submit-property__label">Building Year
                                                *</label>
                                            <select id="property-year" name="building_year" class="ht-field">
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-bedrooms" class="submit-property__label">Bedrooms
                                                *</label>
                                            <select id="property-bedrooms" name="bedrooms" class="ht-field">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->

                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-bathrooms" class="submit-property__label">Bathrooms
                                                *</label>
                                            <select id="property-bathrooms" name="bathrooms" class="ht-field">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                    <div class="col-md-4">
                                        <div class="submit-property__group">
                                            <label for="property-parking" class="submit-property__label">Parking</label>
                                            <input type="text" name="parking" class="submit-property__field"
                                                   id="property-parking">
                                        </div><!-- .submit-property__group -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .submit-property__block -->

                            <div class="submit-property__block" id="info_other">
                                <h3 class="submit-property__headline">Other Features</h3>
                                <div class="submit-property__features">
                                    <div class="submit-property__group">

                                        <div class="submit-property__wrapper">
                                            <input type="checkbox" name="is_air_condition" id="air-conditioning"
                                                   class="submit-property__checkbox">
                                            <label for="air-conditioning"
                                                   class="submit-property__label submit-property__feature">Air
                                                Conditioning</label>
                                        </div>
                                    </div><!-- .submit-property__group -->
                                </div><!-- .submit-property__features -->
                            </div><!-- .submit-property__block -->

                            <button type="submit" class="submit-property__submit">Submit</button>
                        </div><!-- .col -->
                    </form>
                </div><!-- .row -->
            </div><!-- .my-profile__container -->
        </div><!-- .container -->
    </section><!-- .my-profile -->

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#property-space').attr('disabled', 'disabled');
            $('#property-room').attr('disabled', 'disabled');
            $('#property-bathrooms').attr('disabled', 'disabled');
            $('#property-bedrooms').attr('disabled', 'disabled');
            $('#property-parking').attr('disabled', 'disabled');
            $('#property-year').attr('disabled', 'disabled');
            $('#air-conditioning').attr('disabled', 'disabled');
            $('#property_room').hide();
            $('#property_space').hide();
            $('#info_flat').hide();
            $('#info_other').hide();
            $('#dk0-listbox li').on('click', function (event) {
                //console.log(event.target.innerText);
                if (event.target.innerText === "Flat") {
                    $('#property_room').show();
                    $('#property_space').show();
                    $('#info_flat').show();
                    $('#info_other').show();
                    $('#property-space').removeAttr('disabled');
                    $('#property-room').removeAttr('disabled');
                    $('#property-bathrooms').removeAttr('disabled');
                    $('#property-bedrooms').removeAttr('disabled');
                    $('#property-parking').removeAttr('disabled');
                    $('#property-year').removeAttr('disabled');
                    $('#air-conditioning').removeAttr('disabled');
                } else {
                    $('#property_room').hide();
                    $('#property_space').hide();
                    $('#info_flat').hide();
                    $('#info_other').hide();
                    $('#property-space').attr('disabled', 'disabled');
                    $('#property-room').attr('disabled', 'disabled');
                    $('#property-bathrooms').attr('disabled', 'disabled');
                    $('#property-bedrooms').attr('disabled', 'disabled');
                    $('#property-parking').attr('disabled', 'disabled');
                    $('#property-year').attr('disabled', 'disabled');
                    $('#air-conditioning').attr('disabled', 'disabled');
                }
            });
        });
    </script>
@endsection