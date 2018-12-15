@extends('app')

@section('content')
    <section class="about-us">
        <div class="container">
            <div class="about-us__main">
                <div class="row">
                    <main class="col-md-8 col-md-main">
                        <div class="about-us__img">
                            <img src="images/uploads/about_us.jpg" alt="About us">
                        </div><!-- .about-us__img -->
                        <h1 class="about-us__title">We are ReaLand</h1>
                        <p>
                            Our mission is to redefine real estate in the customer's favor.
                        </p>
                        <p>
                            ReaLand got its start inventing map-based search. Everyone told us the easy money was in
                            running ads for traditional brokers, but we couldn't stop thinking about how different real
                            estate would be if it were designed from the ground up, using technology and totally
                            different values, to put customers first. So we joined forces with agents who wanted to be
                            customer advocates, not salesmen.
                        </p>
                        <p>
                            Since these were our own agents, we could survey each customer on our service and pay a
                            bonus based on the review. We deepened our technology beyond the initial search to make the
                            home tour, the listing debut, the escrow process, the whole process, faster, easier and
                            worry-free. And we gave customers more value, not just by saving each thousands in fees, but
                            by investing in every home we sell, by measuring our performance and improving constantly.
                        </p>

                        <p>
                            This is how real estate would be if it were designed just for you, because, well, it was.
                        </p>
                    </main><!-- .col -->
                    <aside class="col-md-4 col-md-sidebar">
                        <section class="widget">
                            <form class="contact-form contact-form--bordered contact-form--wild-sand">
                                <div class="contact-form__header">
                                    <h3 class="contact-form__title">Drop Us a Line</h3>
                                </div><!-- .contact-form__header -->

                                <div class="contact-form__body">
                                    <input type="text" class="contact-form__field" placeholder="Name" name="name"
                                           required>
                                    <input type="email" class="contact-form__field" placeholder="Email" name="email"
                                           required>
                                    <input type="tel" class="contact-form__field" placeholder="Phone number"
                                           name="phone number">
                                    <textarea class="contact-form__field contact-form__comment" cols="30" rows="4"
                                              placeholder="Comment" name="comment" required></textarea>
                                </div><!-- .contact-form__body -->

                                <div class="contact-form__footer">
                                    <input type="submit" class="contact-form__submit" name="submit"
                                           value="Send Message">
                                </div><!-- .contact-form__footer -->
                            </form><!-- .contact-form -->
                        </section><!-- .widget -->

                        <section class="widget widget--wild-sand widget--padding-20 widget__news">
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
                </div><!-- .row -->
            </div><!-- .about-us__main -->
        </div><!-- .container -->
    </section><!-- .about-us -->
@endsection