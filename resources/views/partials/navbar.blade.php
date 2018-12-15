<header class="header header--blue">
    <div class="container">

        <div class="header__main">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <h1 class="screen-reader-text">Realand</h1>
                    <img src="images/uploads/logo.png" alt="Realand">
                </a>
            </div><!-- .header__main -->

            <div class="nav-mobile">
                <a href="#" class="nav-toggle">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->

            <div class="header__menu header__menu--v1">
                <ul class="header__nav">
                    <li class="header__nav-item">
                        <a href="{{ route('home') }}" class="header__nav-link">Home</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('feed') }}" class="header__nav-link">Feed</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('about.us') }}" class="header__nav-link">About Us</a>
                    </li>
                </ul><!-- .header__nav -->

                @auth
                <div class="header__user">
                    <div class="header__user-inner">
                        @if(Auth::user()->profile->avatar == null)
                            <img src="{{ asset('/images/default.png') }}" height="30" width="20" class="header__user-avatar" alt="Tristina Avelon">
                        @else
                            <img src="{{ asset('/images/uploads/avatar/'. Auth::user()->profile->avatar) }}"
                                 alt="" class="header__user-avatar" height="30" width="20">
                        @endif
                        <span class="header__user-name">Hi, {{ Auth::user()->name }}!</span>

                        <ul class="header__user-menu">
                            <li class="setting">
                                <a href="{{ route('my.profile') }}" class="setting__link">
                                    <i class="ion-ios-person-outline setting__icon"></i>My Profile</a>
                            </li>
                            <li class="setting">
                                <a href="{{ route('my.properties') }}" class="setting__link">
                                    <i class="ion-ios-home-outline setting__icon"></i>My Property</a>
                            </li>
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
                        </ul>
                    </div><!-- .header__user-inner -->
                </div><!-- .header__user -->
                @endauth

                @guest
                <ul class="topbar__user" style="display: inherit">
                    <li><a href="{{ route('login') }}" class="topbar__link">Sign In</a></li>
                    <li><a href="{{ route('register') }}" class="topbar__link">Join</a></li>
                </ul>
                @endguest

            </div><!-- .header__menu -->

            <a href="{{ route('my.properties.create') }}" class="header__cta">&plus; Submit Property</a>
        </div><!-- .header__main -->
    </div><!-- .container -->
</header><!-- .header -->