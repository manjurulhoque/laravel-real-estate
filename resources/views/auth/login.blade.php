@extends('app')

@section('content')
    <section class="sign-up">
        <div class="container">

            <div class="sign-up__container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="sign-up__header">
                            <h1 class="sign-up__textcontent"><a href="#log-in" class="sign-up__tab is-active">Sign
                                    In</a>
                                <span>or</span> <a href="#sign-up" class="sign-up__tab">Sign Up</a></h1>
                        </div><!-- .sign-up__header -->

                        <div class="sign-up__main">
                            <form method="POST" action="{{ route('login') }}" class="sign-up__form is-visible"
                                  id="log-in">
                                @csrf
                                <label for="log-in-email" class="sign-up__label">Email</label>
                                <input type="email" name="email" class="sign-up__field" id="log-in-email"
                                       placeholder="Your e-mail goes here">
                                <label for="log-in-password" class="sign-up__label">Password</label>
                                <input type="password" name="password" class="sign-up__field" id="log-in-password"
                                       placeholder="******">
                                <button type="submit" class="sign-up__submit">Sign In</button>
                                <a href="#" class="sign-up__link" style="margin-left: 10px;">Forgot Password?</a>
                            </form><!-- .sign-up__form -->

                            <form action="{{ route('register') }}" class="sign-up__form" id="sign-up" method="POST">
                                @csrf
                                <label for="sign-up-name" class="sign-up__label">Name</label>
                                <input type="text" required name="name" class="sign-up__field" id="sign-up-name"
                                       placeholder="Enter your full name">
                                <label for="sign-up-email" class="sign-up__label">Email</label>
                                <input type="email" required name="email" class="sign-up__field" id="sign-up-email"
                                       placeholder="Your email goes here">
                                <label for="sign-up-password" class="sign-up__label">Password</label>
                                <input type="password" required name="password" class="sign-up__field"
                                       id="sign-up-password"
                                       placeholder="******">
                                <label for="sign-up-password" class="sign-up__label">Confirm Password</label>
                                <input type="password" required name="password_confirmation" class="sign-up__field"
                                       id="sign-up-password"
                                       placeholder="******">
                                <div class="sign-up__wrapper">
                                    <input type="checkbox" for="sign-up-term" class="sign-up__checkbox">
                                    <label for="sign-up-term" class="sign-up__desc">I agree all statements in <a
                                                href="#">Terms
                                            of Service</a></label>
                                </div>

                                <button type="submit" class="sign-up__submit">Sign Up</button>
                            </form><!-- .sign-up__form -->
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .sign-up__container -->
        </div><!-- .container -->
    </section><!-- .sign-up -->
@endsection