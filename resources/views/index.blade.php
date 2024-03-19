@extends('layout.masterindex')

@section('content')
    {{-- hero --}}
    <div class="container-xxl py-5 hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam
                        ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                        duo justo magna dolore erat amet</p>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/hero/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

    {{-- information --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="text-decoration-none" href="">
                        <div class="information-item rounded pt-3">
                            <div class="p-4">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/outlet.png') }}" alt=""width="70px"
                                        height="70px">&nbsp; <b>Outlet</b></h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="text-decoration-none" href="">
                        <div class="information-item rounded pt-3">
                            <div class="p-4">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/gofood.png') }}" alt=""width="70px"
                                        height="70px">&nbsp;<b>Go Food</b></h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="text-decoration-none" href="">
                        <div class="information-item rounded pt-3">
                            <div class="p-4">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/grabfood.png') }}"
                                        alt=""width="70px" height="70px">&nbsp;<b>Grab Food</b></h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <a class="text-decoration-none" href="">
                        <div class="information-item rounded pt-3">
                            <div class="p-4">
                                <h5><img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ asset('assets/images/information/shopee.png') }}" alt=""width="70px"
                                        height="70px">&nbsp;<b>Shopee Food</b></h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- information end --}}

    {{-- about --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('assets/images/about/about-1.png') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('assets/images/about/about-2.png') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('assets/images/about/about-3.png') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('assets/images/about/about-4.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h3>
                    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    {{-- about end --}}

    {{-- inform --}}
    <div class="container-xxl py-5 px-0 wow fadeInUp inform" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h3 class="section-title ff-secondary text-start text-primary fw-normal">Information</h3>
                    <h1 class="text-white mb-4">Let's Join Us!</h1>
                    <h2 class="text-center">We Are Hiring</h2>
                    <center>
                        <h1 class="badge text-bg-primary text-center text-wrap" style="font-size: 2em; padding:10px 20px">
                            Booth <br> Crew</h1>
                    </center>
                    <div class="col-12">
                        <div class="container">
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Laki-laki</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Usia Max 28 Tahun</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Berpengalaman di dapur</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Lulusan SMA/Mahasiswa tigkat akhir</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Bisa bekerja dalam tekanan</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Teliti, jujur, dan tanggung jawab</h5><br>
                            <h5><i class="bi bi-check-square-fill"></i>&nbsp;Domisili Malang</h5><br>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="image">
                    <img src="{{ asset('assets/images/information/inform.png') }}" alt=""
                        style="height: 100%; width:100%">
                </div>
            </div>
        </div>
    </div>
    {{-- inform end --}}

    {{-- tranding menu --}}
    <section id="tranding">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h3>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="container tranding-container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-1.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Special Pizza
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-2.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Meat Ball
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-3.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Burger
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-4.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Frish Curry
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-5.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Pane Cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-6.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Vanilla cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('assets/images/tranding-menu/tranding-menu-7.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">
                                    Straw Cake
                                </h2>
                                <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <i class="bi bi-arrow-left" style="font-size: 15"></i>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <i class="bi bi-arrow-right" style="font-size: 15"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>
    {{-- tranding menu end --}}

    {{-- testimonial --}}
    <section class="container-testimonial">
        <div class="testimonial mySwiper">
            <div class="testi-content swiper-wrapper">
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bi bi-quote"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- testimonial end --}}

    {{-- contact --}}
    <section id="contact" style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h3>
                        <h1 class="mb-5">Most Popular Items</h1>
                    </div>
                </div>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4894405374253!2d112.62180907443569!3d-7.948266579182089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629d96cb83ab3%3A0xaf7f420d67935f0c!2sJl.%20Dewandaru%20No.7%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1709088591891!5m2!1sid!2sid"
                    width="100%" height="270px" style="border:0; border-radius: 6px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Dewandaru No.7 Malang</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>cimalcimoool@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 898-3550-049</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>
    {{-- contact end --}}

@section('scripts')
@endsection
