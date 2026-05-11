@extends('frontend.master')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Privacy Policy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Privacy Policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Privacy Policy Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Legal</h6>
                <h1 class="mb-2">Our <span class="text-primary text-uppercase">Privacy Policy</span></h1>
                <p class="text-muted mb-5">Last updated: {{ date('F d, Y') }}</p>
            </div>

            <!-- Intro Banner -->
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12">
                    <a class="service-item rounded d-block" style="pointer-events: none;">
                        <div class="d-flex align-items-start gap-4 flex-wrap">
                            <div class="service-icon bg-transparent border rounded p-1 flex-shrink-0">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-shield fa-2x text-primary"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-3">Your Privacy Is Our Priority</h5>
                                <p class="text-body mb-0">At <strong>Bookopa</strong>, we are committed to protecting your personal information and your right to privacy. This Privacy Policy explains what information we collect, how we use it, and what rights you have in relation to it when you use our hotel booking and travel reservation services. By accessing our website or making a booking, you agree to the terms of this Privacy Policy.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="row g-4">

                <!-- Information We Collect -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-database fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Information We Collect</h5>
                        <p class="text-body mb-2">We collect the following types of information:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1"><strong>Personal Info:</strong> Name, email, phone number, and billing address.</li>
                            <li class="mb-1"><strong>Booking Details:</strong> Check-in/out dates, room preferences, and guest counts.</li>
                            <li class="mb-1"><strong>Payment Data:</strong> Processed securely via third-party gateways; not stored on our servers.</li>
                            <li><strong>Usage Data:</strong> IP address, browser type, and pages visited on our site.</li>
                        </ul>
                    </a>
                </div>

                <!-- How We Use Your Info -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-cogs fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">How We Use Your Information</h5>
                        <p class="text-body mb-2">Your information is used to:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1">Process and confirm hotel and travel reservations.</li>
                            <li class="mb-1">Send booking confirmations, receipts, and reminders.</li>
                            <li class="mb-1">Provide customer support and handle complaints.</li>
                            <li class="mb-1">Personalize your experience and recommend relevant services.</li>
                            <li>Send promotional offers and newsletters (with your consent).</li>
                        </ul>
                    </a>
                </div>

                <!-- Cookies & Tracking -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-cookie fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Cookies & Tracking</h5>
                        <p class="text-body mb-2">We use cookies to enhance your browsing experience:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1"><strong>Essential Cookies:</strong> Required for booking flows and site functionality.</li>
                            <li class="mb-1"><strong>Analytics Cookies:</strong> Help us understand user behavior via tools like Google Analytics.</li>
                            <li class="mb-1"><strong>Preference Cookies:</strong> Remember your language, currency, and search filters.</li>
                            <li><strong>Marketing Cookies:</strong> Used to show relevant travel deals and offers.</li>
                        </ul>
                    </a>
                </div>

                <!-- Data Sharing -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-share-alt fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Data Sharing & Disclosure</h5>
                        <p class="text-body mb-2">We share your data only in limited situations:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1"><strong>Hotels & Partners:</strong> Your booking details are shared with the hotel or property you reserve.</li>
                            <li class="mb-1"><strong>Payment Processors:</strong> Secure third-party gateways to complete transactions.</li>
                            <li class="mb-1"><strong>Legal Requirements:</strong> When required by law or regulatory authorities.</li>
                            <li>We <strong>never</strong> sell your personal data to third parties.</li>
                        </ul>
                    </a>
                </div>

                <!-- Data Security -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-lock fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Data Security</h5>
                        <p class="text-body mb-0">We implement industry-standard security measures including SSL encryption, secure servers, and restricted access controls to protect your personal information. All payment transactions are processed through PCI-compliant payment gateways. While we take every reasonable precaution, no internet transmission is 100% secure and we encourage you to protect your account credentials.</p>
                    </a>
                </div>

                <!-- Your Rights -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-user fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Your Rights</h5>
                        <p class="text-body mb-2">You have full rights over your personal data:</p>
                        <ul class="text-body ps-3 mb-0">
                            <li class="mb-1"><strong>Access:</strong> Request a copy of the data we hold about you.</li>
                            <li class="mb-1"><strong>Correction:</strong> Update any inaccurate or outdated information.</li>
                            <li class="mb-1"><strong>Deletion:</strong> Request removal of your data where applicable.</li>
                            <li class="mb-1"><strong>Opt-Out:</strong> Unsubscribe from marketing emails anytime.</li>
                            <li><strong>Portability:</strong> Receive your data in a portable format.</li>
                        </ul>
                    </a>
                </div>

                <!-- Data Retention -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-clock-o fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Data Retention</h5>
                        <p class="text-body mb-0">We retain your personal data only for as long as necessary to fulfill the purposes outlined in this policy or as required by applicable law. Booking and payment records may be retained for up to seven (7) years for accounting and legal compliance. After this period, your data is securely deleted or anonymized. You may request early deletion of your account data at any time.</p>
                    </a>
                </div>

                <!-- Third-Party Links -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-external-link fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Third-Party Links</h5>
                        <p class="text-body mb-0">Our website may contain links to external hotel websites, travel partners, or affiliate services. Bookopa is not responsible for the privacy practices or content of these third-party sites. We encourage you to review the privacy policies of any external website you visit. Links to third-party sites do not imply endorsement by Bookopa.</p>
                    </a>
                </div>

                <!-- Policy Updates & Contact -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded d-block h-100" style="pointer-events: none;">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-envelope fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Contact & Policy Updates</h5>
                        <p class="text-body mb-3">We may update this policy periodically. Continued use of Bookopa after changes means you accept the updated policy. For any privacy-related questions:</p>
                        <p class="text-body mb-1"><i class="fa fa-envelope text-primary me-2"></i> info@bookopa.com</p>
                        <p class="text-body mb-1"><i class="fa fa-phone text-primary me-2"></i> +1 (800) BOOKOPA</p>
                        <p class="text-body mb-0"><i class="fa fa-clock-o text-primary me-2"></i> Response within 3–5 business days</p>
                    </a>
                </div>

            </div>
            <!-- End Row -->

            <!-- Bottom Buttons -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <a class="btn btn-primary py-3 px-5 me-3" href="{{ route('frontend.home') }}">Back to Home</a>
                <a class="btn btn-outline-primary py-3 px-5" href="{{ route('frontend.contact') }}">Contact Us</a>
            </div>

        </div>
    </div>
    <!-- Privacy Policy End -->

    <!-- Testimonial Start -->
    <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Bookopa made our family vacation planning so easy. Booking was seamless, secure, and the hotel was exactly as described. Highly recommended!</p>
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
                    <p>I love how transparent Bookopa is about how they handle my data. I feel safe making reservations knowing my privacy is protected.</p>
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
                    <p>Quick, easy, and trustworthy. Bookopa's customer support team resolved my query within hours. Will definitely book again!</p>
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