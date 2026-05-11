@extends('frontend.master')

@section('content')
  


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        {{-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Booking End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Bookopa</span></h1>
                <p class="mb-4">
                    Bookopa is your trusted hotel and reservation platform designed to make travel easier, faster, and more comfortable. 
                    We help guests discover the best hotels, resorts, and vacation stays with seamless online booking and secure reservation management. 
                    Whether you are planning a business trip, family vacation, or weekend getaway, Bookopa ensures a smooth and reliable booking experience.
                </p>

                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">500</h2>
                                <p class="mb-0">Hotels</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">120</h2>
                                <p class="mb-0">Team Members</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-toggle="counter-up">1500</h2>
                                <p class="mb-0">Happy Guests</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                    </div>

                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                    </div>

                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                    </div>

                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


 <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">
                Our Team
            </h6>

            <h1 class="mb-5">
                Meet Our <span class="text-primary text-uppercase">Professional Staff</span>
            </h1>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded shadow overflow-hidden">

                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">

                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Rakib Hasan</h5>
                        <small>Hotel Manager</small>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded shadow overflow-hidden">

                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">

                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0"> Jahan Ali</h5>
                        <small>Front Desk Officer</small>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="rounded shadow overflow-hidden">

                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">

                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Sajid Khan</h5>
                        <small>Reservation Specialist</small>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="rounded shadow overflow-hidden">

                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">

                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0">Mehedi Hasan</h5>
                        <small>Customer Support</small>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Team End -->

        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" id="newsletterBtn" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->


@endsection