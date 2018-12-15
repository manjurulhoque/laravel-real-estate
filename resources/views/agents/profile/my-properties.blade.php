@extends('app')

@section('content')

    <section class="my-profile">
        <div class="container">

            <div class="my-profile__container">
                <div class="row">
                    @include('partials.profile-sidebar')
                    <div class="col-md-9">
                        <ul class="manage-list manage-list--my-property">
                            <li class="manage-list__header">
                                <span class="manage-list__title"><i class="fa fa-bookmark-o" aria-hidden="true"></i> My Property</span>
                                <span class="manage-list__title"><i class="fa fa-calendar-o" aria-hidden="true"></i> Expiration Date</span>
                            </li>
                            @foreach($properties as $property)
                                <li class="manage-list__item">
                                    <div class="manage-list__item-container">
                                        <div class="manage-list__item-img">
                                            <a href="">
                                                <img style="max-width: 50%"
                                                     src="{{ asset('/images/uploads/'.$property->get_featured_image()->location) }}"
                                                     alt="Weston Hightpointe Place" class="listing__img">
                                            </a>
                                        </div><!-- manage-list__item-img -->

                                        <div class="manage-list__item-detail">
                                            <h3 class="listing__title">
                                                <a href="">{{ $property->title }}</a>
                                            </h3>
                                            @if(!$property->pending)
                                                <a href="#" class="btn btn-success">Pending</a>
                                            @else
                                                <a href="#" class="btn btn-primary">Accepted</a>
                                            @endif
                                            <p class="listing__location"><span
                                                        class="ion-ios-location-outline listing__location-icon"></span>
                                                {{ $property->address }}</p>
                                            <p class="listing__price">{{ $property->price }} Tk</p>
                                        </div>
                                    </div><!-- .manage-list__item-container -->

                                    <div class="manage-list__expire-date">30 December, 2018</div>

                                    <div class="manage-list__action">
                                        <a href="{{ route('my.properties.edit', $property->id) }}" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i>
                                            Edit</a>
                                        <a href="{{ route('my.properties.destroy', $property->id) }}" class="remove" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();"><i class="fa fa-times" aria-hidden="true"></i> Remove</a>

                                        <form id="delete-form" action="{{ route('my.properties.destroy', $property->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            {!! method_field('delete') !!}
                                        </form>
                                    </div>
                                </li><!-- .manage-list__item" -->
                            @endforeach
                        </ul>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .my-profile__container -->
        </div><!-- .container -->
    </section><!-- .my-profile -->

@endsection