@extends('frontend.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Room Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Rooms</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Room Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Room Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                    
             
                <!-- Left Column: Images + Details -->
                <div class="col-lg-8">

                    <!-- Main Image -->
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative rounded overflow-hidden mb-2" style="height: 420px;">
                            <img id="mainImage" class="img-fluid w-100 h-100" src="img/room-2.jpg" alt="Room Main Image" style="object-fit: cover;">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                {{ $room->price }}/Night
                            </small>
                        </div>
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="row g-2 mt-3 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-3">
                            <img class="img-fluid rounded w-100 room-thumb" src="img/room-2.jpg" alt="" style="height: 80px; object-fit: cover; cursor: pointer; border: 2px solid var(--primary);">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid rounded w-100 room-thumb" src="img/room-1.jpg" alt="" style="height: 80px; object-fit: cover; cursor: pointer; border: 2px solid transparent;">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid rounded w-100 room-thumb" src="img/room-3.jpg" alt="" style="height: 80px; object-fit: cover; cursor: pointer; border: 2px solid transparent;">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid rounded w-100 room-thumb" src="img/room-4.jpg" alt="" style="height: 80px; object-fit: cover; cursor: pointer; border: 2px solid transparent;">
                        </div>
                    </div>

                    <!-- Room Title & Rating -->
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="mb-0">{{ $room->title }}</h2>
                            <div>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="text-muted ms-1">(128 Reviews)</small>
                            </div>
                        </div>

                        <!-- Quick Info Bar -->
                        <div class="d-flex flex-wrap gap-3 mb-4 p-3 bg-light rounded">
                            <small class="me-3"><i class="fa fa-bed text-primary me-2"></i>{{ $room->bed }} Beds</small>
                            <small class="me-3"><i class="fa fa-bath text-primary me-2"></i>{{ $room->bath }} Baths</small>
                            <small class="me-3"><i class="fa fa-wifi text-primary me-2"></i>High Speed Wifi</small>
                            <small class="me-3"><i class="fa fa-users text-primary me-2"></i>Max 3 Guests</small>
                            <small><i class="fa fa-expand text-primary me-2"></i>65 m² Room Size</small>
                        </div>

                        <!-- Description -->
                        <h5 class="text-uppercase mb-3">Room Description</h5>
                        <p class="text-body mb-3">Welcome to the <strong> Suite</strong> — {{ $room->description }} </p>
                         
                        <!-- Amenities -->
                        <h5 class="text-uppercase mb-3">Room Amenities</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">King-Size Bed with Premium Linen</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Flat Screen Smart TV (55")</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">High-Speed WiFi (up to 500 Mbps)</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Air Conditioning & Climate Control</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Mini Bar & Coffee Maker</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">In-Room Safe & Wardrobe</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Luxury Bathroom with Bathtub</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">24-Hour Room Service</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Complimentary Breakfast</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">City / Garden View Balcony</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Free Parking for 1 Vehicle</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Access to Pool & Spa</span>
                                </div>
                            </div>
                        </div>

                        <!-- House Rules -->
                        <h5 class="text-uppercase mb-3">House Rules</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o text-primary me-3"></i>
                                    <span class="text-body">Check-in: 2:00 PM onwards</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-clock-o text-primary me-3"></i>
                                    <span class="text-body">Check-out: Before 12:00 PM</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-times text-danger me-3"></i>
                                    <span class="text-body">No Smoking Inside Rooms</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-times text-danger me-3"></i>
                                    <span class="text-body">No Pets Allowed</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Parties & Events Allowed</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-check text-primary me-3"></i>
                                    <span class="text-body">Children Welcome</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials -->
                        <h5 class="text-uppercase mb-3">Guest Reviews</h5>
                        <div class="row g-3 mb-2">
                            <div class="col-12">
                                <div class="testimonial-item position-relative bg-light rounded overflow-hidden p-4">
                                    <p class="mb-3">"Absolutely stunning suite! The bed was incredibly comfortable, the view was breathtaking, and the staff were so attentive. Will definitely be coming back!"</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-0">Client Name</h6>
                                                <small class="text-muted">Business Traveler</small>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="testimonial-item position-relative bg-light rounded overflow-hidden p-4">
                                    <p class="mb-3">"The Executive Suite exceeded all our expectations. The amenities were top-notch and the complimentary breakfast was delicious. Highly recommend!"</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                                            <div class="ps-3">
                                                <h6 class="fw-bold mb-0">Client Name</h6>
                                                <small class="text-muted">Couple Getaway</small>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star-half-o text-primary"></small>
                                        </div>
                                    </div>
                                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
             
                <!-- Right Column: Booking Sidebar -->
                <div class="col-lg-4">

                    <!-- Booking Form -->
                    <div class="shadow rounded p-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-uppercase mb-4 text-center">Book This Room</h5>
                        <div class="mb-3">
                            <label class="form-label text-muted small text-uppercase">Check In</label>
                            <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small text-uppercase">Check Out</label>
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small text-uppercase">Adults</label>
                            <select class="form-select">
                                <option selected>Select Adults</option>
                                <option value="1">1 Adult</option>
                                <option value="2">2 Adults</option>
                                <option value="3">3 Adults</option>
                                <option value="4">4 Adults</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small text-uppercase">Children</label>
                            <select class="form-select">
                                <option selected>Select Children</option>
                                <option value="0">No Children</option>
                                <option value="1">1 Child</option>
                                <option value="2">2 Children</option>
                                <option value="3">3 Children</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3 mb-3">
                            <span class="text-muted">Price per Night</span>
                            <span class="fw-bold text-primary fs-5">$180</span>
                        </div>
                        <button class="btn btn-primary w-100 py-3">Book Now</button>
                    </div>

                    <!-- Room Summary -->
                    <div class="shadow rounded p-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="text-uppercase mb-4">Room Summary</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Room Type</span>
                            <span class="fw-bold">Executive Suite</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Room Size</span>
                            <span class="fw-bold">65 m²</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Bed Type</span>
                            <span class="fw-bold">King-Size</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Max Guests</span>
                            <span class="fw-bold">4 Persons</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">View</span>
                            <span class="fw-bold">City / Garden</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Floor</span>
                            <span class="fw-bold">8th – 12th</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Cancellation</span>
                            <span class="fw-bold text-success">Free</span>
                        </div>
                    </div>

                    <!-- Need Help -->
                    <div class="shadow rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-uppercase mb-4">Need Help?</h5>
                        <p class="text-muted mb-3">Our team is available 24/7 to assist you with your booking and any questions you may have.</p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 38px; height: 38px;">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Call Us</small>
                                <span class="fw-bold">+1 (800) BOOKOPA</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 38px; height: 38px;">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Email Us</small>
                                <span class="fw-bold">support@bookopa.com</span>
                            </div>
                        </div>
                        <a class="btn btn-outline-primary w-100 py-2" href="{{ route('frontend.contact') }}">Contact Support</a>
                    </div>

                </div>
                <!-- End Sidebar -->

            </div>
        </div>
    </div>
    <!-- Room Detail End -->



    <!-- Thumbnail Click Script -->
    <script>
        document.querySelectorAll('.room-thumb').forEach(function(thumb) {
            thumb.addEventListener('click', function() {
                document.getElementById('mainImage').src = this.src;
                document.querySelectorAll('.room-thumb').forEach(t => t.style.border = '2px solid transparent');
                this.style.border = '2px solid var(--primary)';
            });
        });
    </script>

@endsection