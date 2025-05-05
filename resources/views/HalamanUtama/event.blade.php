
@extends('HalamanUtama.index')

@section('content')
<!-- Events Section -->
<section id="events" class="events section">
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 1
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">
                <div
                    class="swiper-slide event-item d-flex flex-column justify-content-end"
                    style="background-image: url(assets/img/events-1.jpg)"
                >
                    <h3>Custom Parties</h3>
                    <div class="price align-self-start">$99</div>
                    <p class="description">
                        Quo corporis voluptas ea ad. Consectetur inventore
                        sapiente ipsum voluptas eos omnis facere. Enim facilis
                        veritatis id est rem repudiandae nulla expedita quas.
                    </p>
                </div>
                <!-- End Event item -->

                <div
                    class="swiper-slide event-item d-flex flex-column justify-content-end"
                    style="background-image: url(assets/img/events-2.jpg)"
                >
                    <h3>Private Parties</h3>
                    <div class="price align-self-start">$289</div>
                    <p class="description">
                        In delectus sint qui et enim. Et ab repudiandae
                        inventore quaerat doloribus. Facere nemo vero est ut
                        dolores ea assumenda et. Delectus saepe accusamus
                        aspernatur.
                    </p>
                </div>
                <!-- End Event item -->

                <div
                    class="swiper-slide event-item d-flex flex-column justify-content-end"
                    style="background-image: url(assets/img/events-3.jpg)"
                >
                    <h3>Birthday Parties</h3>
                    <div class="price align-self-start">$499</div>
                    <p class="description">
                        Laborum aperiam atque omnis minus omnis est qui
                        assumenda quos. Quis id sit quibusdam. Esse quisquam
                        ducimus officia ipsum ut quibusdam maxime. Non enim
                        perspiciatis.
                    </p>
                </div>
                <!-- End Event item -->

                <div
                    class="swiper-slide event-item d-flex flex-column justify-content-end"
                    style="background-image: url(assets/img/events-4.jpg)"
                >
                    <h3>Wedding Parties</h3>
                    <div class="price align-self-start">$899</div>
                    <p class="description">
                        Laborum aperiam atque omnis minus omnis est qui
                        assumenda quos. Quis id sit quibusdam. Esse quisquam
                        ducimus officia ipsum ut quibusdam maxime. Non enim
                        perspiciatis.
                    </p>
                </div>
                <!-- End Event item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- /Events Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>
            What Are They <span class="description-title">Saying About Us</span>
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                }
            </script>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i
                                            class="bi bi-quote quote-icon-left"
                                        ></i>
                                        <span
                                            >Proin iaculis purus consequat sem
                                            cure digni ssim donec porttitora
                                            entum suscipit rhoncus. Accusantium
                                            quam, ultricies eget id, aliquam
                                            eget nibh et. Maecen aliquam, risus
                                            at semper.</span
                                        >
                                        <i
                                            class="bi bi-quote quote-icon-right"
                                        ></i>
                                    </p>
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img
                                    src="assets/img/testimonials/testimonials-1.jpg"
                                    class="img-fluid testimonial-img"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i
                                            class="bi bi-quote quote-icon-left"
                                        ></i>
                                        <span
                                            >Export tempor illum tamen malis
                                            malis eram quae irure esse labore
                                            quem cillum quid cillum eram malis
                                            quorum velit fore eram velit sunt
                                            aliqua noster fugiat irure amet
                                            legam anim culpa.</span
                                        >
                                        <i
                                            class="bi bi-quote quote-icon-right"
                                        ></i>
                                    </p>
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img
                                    src="assets/img/testimonials/testimonials-2.jpg"
                                    class="img-fluid testimonial-img"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i
                                            class="bi bi-quote quote-icon-left"
                                        ></i>
                                        <span
                                            >Enim nisi quem export duis labore
                                            cillum quae magna enim sint quorum
                                            nulla quem veniam duis minim tempor
                                            labore quem eram duis noster aute
                                            amet eram fore quis sint
                                            minim.</span
                                        >
                                        <i
                                            class="bi bi-quote quote-icon-right"
                                        ></i>
                                    </p>
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img
                                    src="assets/img/testimonials/testimonials-3.jpg"
                                    class="img-fluid testimonial-img"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i
                                            class="bi bi-quote quote-icon-left"
                                        ></i>
                                        <span
                                            >Fugiat enim eram quae cillum dolore
                                            dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor
                                            enim duis veniam ipsum anim magna
                                            sunt elit fore quem dolore labore
                                            illum veniam.</span
                                        >
                                        <i
                                            class="bi bi-quote quote-icon-right"
                                        ></i>
                                    </p>
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i
                                        ><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img
                                    src="assets/img/testimonials/testimonials-4.jpg"
                                    class="img-fluid testimonial-img"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- /Testimonials Section -->
@endsection