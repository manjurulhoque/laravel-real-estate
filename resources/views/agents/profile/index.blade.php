@extends('app')

@section('content')

    <section class="my-profile">
        <div class="container">

            <div class="my-profile__container">
                <div class="row">
                    @include('partials.profile-sidebar')
                    <form action="{{ route('my.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4">
                            <label for="profile-first-name" class="my-profile__label">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="my-profile__field"
                                   id="profile-first-name">

                            <label for="profile-email" class="my-profile__label">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="my-profile__field"
                                   id="profile-email">

                            <label for="profile-number" class="my-profile__label">Phone Number</label>
                            <input type="text" name="phone" value="{{ $profile->phone }}" class="my-profile__field"
                                   id="profile-number">

                            <label for="profile-facebook" class="my-profile__label">Facebook Address</label>
                            <input type="text" name="facebook" value="{{ $profile->facebook }}"
                                   class="my-profile__field"
                                   id="profile-facebook">
                        </div><!-- .col -->

                        <div class="col-md-5">
                            <label for="profile-introduce" class="my-profile__label">About Me</label>
                            <textarea id="profile-introduce" name="about" placeholder="About me" rows="20"
                                      class="my-profile__field">{{ $profile->about }}</textarea>

                            <label for="profile-avatar" class="my-profile__label">Avatar</label>
                            <div class="my-profile__wrapper">
                                <input type="file" name="avatar">
                                <span><i class="ion-image"></i> Upload Avatar</span>
                            </div>

                            <button type="submit" class="my-profile__submit">Save Changes</button>
                        </div><!-- .col -->
                    </form>
                </div><!-- .row -->
            </div><!-- .my-profile__container -->
        </div><!-- .container -->
    </section><!-- .my-profile -->

@endsection