@extends('app')

@section('content')

    <section class="my-profile">
        <div class="container">

            <div class="my-profile__container">
                <div class="row">
                    @include('partials.profile-sidebar')
                    <form action="{{ route('my.profile.change.password.update') }}" method="POST">
                        @csrf
                        <div class="col-md-9">
                            <label for="profile-current-password" class="my-profile__label">Current Password</label>
                            <input type="password" required name="current_password" class="my-profile__field" id="profile-current-password">

                            <label for="profile-new-password" class="my-profile__label">New Password</label>
                            <input type="password" required name="new_password" class="my-profile__field" id="profile-new-password">

                            <label for="profile-confirm-password" class="my-profile__label">Confirm New Password</label>
                            <input type="password" required name="confirm_new_password" class="my-profile__field" id="profile-confirm-password">

                            <button type="submit" class="my-profile__submit">Save Changes</button>
                        </div><!-- .col -->
                    </form>
                </div><!-- .row -->
            </div><!-- .my-profile__container -->
        </div><!-- .container -->
    </section><!-- .my-profile -->

@endsection