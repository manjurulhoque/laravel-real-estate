<div class="col-md-3">
    <h2 class="bookmarked-listing__headline">Howdy, <strong>{{ $user->name }}</strong></h2>
    <div class="settings-block">
        <span class="settings-block__title">Manage Account</span>
        <ul class="settings">
            <li class="setting setting--current">
                <a href="{{ route('my.profile') }}" class="setting__link">
                    <i class="ion-ios-person-outline setting__icon"></i>My Profile
                </a>
            </li>
        </ul><!-- settings -->
    </div><!-- .settings-block -->

    <div class="settings-block">
        <span class="settings-block__title">Manage Listing</span>
        <ul class="settings">
            <li class="setting">
                <a href="{{ route('my.properties') }}" class="setting__link">
                    <i class="ion-ios-home-outline setting__icon"></i>My Property</a>
            </li>
            <li class="setting">
                <a href="{{ route('my.properties.create') }}" class="setting__link">
                    <i class="ion-ios-upload-outline setting__icon"></i>Submit New Property
                </a>
            </li>
        </ul><!-- settings -->
    </div><!-- .settings-block -->

    <div class="settings-block">
        <ul class="settings">
            <li class="setting">
                <a href="{{ route('my.profile.change.password') }}" class="setting__link">
                    <i class="ion-ios-unlocked-outline setting__icon"></i>Change Password</a>
            </li>
            <li class="setting">
                <a class="setting__link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ion-ios-undo-outline setting__icon"></i>Log Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul><!-- settings -->
    </div><!-- .settings-block -->
</div><!-- .col -->