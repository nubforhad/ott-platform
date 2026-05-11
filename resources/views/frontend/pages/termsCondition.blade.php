@extends('frontend.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Terms & Conditions</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Terms & Conditions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Terms & Conditions Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Legal</h6>
                <h1 class="mb-2">Terms & <span class="text-primary text-uppercase">Conditions</span></h1>
                <p class="text-muted mb-5">Last updated: {{ date('F d, Y') }}</p>
            </div>

            <!-- Intro Banner -->
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12">
                    <a class="service-item rounded d-block" style="pointer-events: none;">
                        <div class="d-flex align-items-start gap-4 flex-wrap">
                            <div class="service-icon bg-transparent border rounded p-1 flex-shrink-0">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-file-text fa-2x text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-3">Welcome to Bookopa</h5>
                                <p class="text-body mb-0">These Terms & Conditions govern your use of the <strong>Bookopa</strong> website and all hotel booking, travel reservation, and related services we provide. By accessing our website, creating an account, or completing a booking, you confirm that you have read, understood, and agreed to be bound by these terms. If you do not agree, please refrain from using our services. We reserve the right to update these terms at any time, and your continued use of our platform constitutes acceptance of any changes.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="row g-4">

                <!-- Acceptance of Terms -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-check-circle fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Acceptance of Terms</h5>
                        <p class="text-body mb-0">By using Bookopa, you confirm that you are at least 18 years of age and legally capable of entering into binding contracts. You accept full responsibility for all activities conducted through your account. If you are booking on behalf of others, you confirm you have their authorization and agree to these terms on their behalf as well.</p>
                    </a>
                </div>

                <!-- Booking & Reservations -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Booking & Reservations</h5>
                        <p class="text-body mb-2">When making a booking through Bookopa:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1">All bookings are subject to availability and hotel confirmation.</li>
                            <li class="mb-1">A booking is only confirmed once you receive a confirmation email.</li>
                            <li class="mb-1">Prices displayed are per room per night unless stated otherwise.</li>
                            <li>Bookopa acts as an intermediary between you and the hotel.</li>
                        </ul>
                    </a>
                </div>

                <!-- Payments & Pricing -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-credit-card fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Payments & Pricing</h5>
                        <p class="text-body mb-2">All transactions on Bookopa are subject to the following:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1">Prices are displayed in the selected currency and may vary by date.</li>
                            <li class="mb-1">Payment is processed securely via PCI-compliant third-party gateways.</li>
                            <li class="mb-1">Taxes and service fees may apply and will be shown at checkout.</li>
                            <li>Bookopa is not responsible for currency conversion charges by your bank.</li>
                        </ul>
                    </a>
                </div>

                <!-- Cancellation & Refunds -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-times-circle fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Cancellation & Refunds</h5>
                        <p class="text-body mb-2">Cancellation policies vary by hotel and rate type:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1">Each booking's cancellation policy is shown before confirmation.</li>
                            <li class="mb-1">Free cancellation is available only where explicitly stated.</li>
                            <li class="mb-1">Non-refundable rates cannot be cancelled or amended.</li>
                            <li>Refunds, where applicable, are processed within 7–14 business days.</li>
                        </ul>
                    </a>
                </div>

                <!-- Check-in & Check-out -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Check-in & Check-out</h5>
                        <p class="text-body mb-0">Check-in and check-out times are set by the individual hotel and will be communicated in your booking confirmation. Early check-in or late check-out may be available upon request and is subject to the hotel's availability and possible additional charges. Guests must present a valid government-issued ID and the payment card used at booking upon check-in.</p>
                    </a>
                </div>

                <!-- User Responsibilities -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-user fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">User Responsibilities</h5>
                        <p class="text-body mb-2">As a Bookopa user, you agree to:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1">Provide accurate and truthful information during booking.</li>
                            <li class="mb-1">Keep your account credentials secure and confidential.</li>
                            <li class="mb-1">Not use the platform for any fraudulent or unlawful purpose.</li>
                            <li>Comply with all hotel policies, rules, and local regulations during your stay.</li>
                        </ul>
                    </a>
                </div>

                <!-- Intellectual Property -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-copyright fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Intellectual Property</h5>
                        <p class="text-body mb-0">All content on the Bookopa website — including logos, text, images, graphics, and software — is the exclusive property of Bookopa and is protected by applicable copyright and intellectual property laws. You may not copy, reproduce, distribute, or use any content from this site without prior written permission from Bookopa, except for personal, non-commercial use.</p>
                    </a>
                </div>

                <!-- Limitation of Liability -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-exclamation-triangle fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Limitation of Liability</h5>
                        <p class="text-body mb-0">Bookopa acts solely as an intermediary between travelers and hotels. We are not liable for any issues arising from your stay, including but not limited to hotel service quality, overbooking, property damage, injury, or loss of belongings. To the fullest extent permitted by law, Bookopa's liability is limited to the total amount paid for the specific booking in question.</p>
                    </a>
                </div>

                <!-- Governing Law & Contact -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-balance-scale fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Governing Law & Contact</h5>
                        <p class="text-body mb-3">These Terms & Conditions are governed by applicable laws. Disputes will first be addressed through good-faith negotiation. For any legal inquiries or questions about these terms, please reach out to us:</p>
                        <p class="text-body mb-1"><i class="fa fa-envelope text-primary me-2"></i> legal@bookopa.com</p>
                        <p class="text-body mb-1"><i class="fa fa-phone text-primary me-2"></i> +1 (800) BOOKOPA</p>
                        <p class="text-body mb-0"><i class="fa fa-clock-o text-primary me-2"></i> Response within 3–5 business days</p>
                    </a>
                </div>

            </div>
            <!-- End Row -->

            <!-- Bottom Buttons -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-muted mb-4">By using Bookopa, you acknowledge that you have read, understood, and agreed to these Terms & Conditions.</p>
                <a class="btn btn-primary py-3 px-5 me-3" href="{{ route('frontend.home') }}">Back to Home</a>
                <a class="btn btn-outline-primary py-3 px-5" href="{{ route('frontend.contact') }}">Contact Us</a>
            </div>

        </div>
    </div>
    <!-- Terms & Conditions End -->

    <!-- Testimonial Start -->
    <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Bookopa's booking process was smooth and transparent. The terms were clear and everything went exactly as promised. Will book again!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Had to cancel my reservation and the refund process was exactly as described in the terms. Fast, fair, and professional service!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Trustworthy and reliable. Bookopa handled everything from booking to check-in perfectly. Highly recommend to all travelers!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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
    <!-- Newsletter End -->

@endsection