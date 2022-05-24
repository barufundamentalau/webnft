@extends('layouts.app')

{{-- set title --}}
@section('title', ' About')

@section('content')
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>About </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{ '/' }}">Home</a></li>
                        <li class="active">About Us </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>About Us</h4>
                                <p class="mb-5">Starting from our motto, PoGoGuTat which means to help each other,
                                    we want to develop NFT technology that runs on a polygon network to be able to connect
                                    with one another and be mutually beneficial in the new world, web3. We all have the same
                                    vision, and that is to improve us as a whole, physically, mentally, and financially as
                                    well. For us this is more than a project that bridges physical and digital goods. It is
                                    a place for all of us to thrive and improve our lives, lifestyles and help others in
                                    need. Mental health is a huge priority for us and our colleagues, we take it very
                                    seriously and are ready to help. Much of our proceeds will be used for this cause and
                                    charity. Our Team and Discord are safe places to talk about private things while
                                    remaining completely anonymous. The purpose and transparency of activities can be
                                    monitored through our youtube account. </p>
                                <form action="#" method="POST" id="commentform" class="comment-form">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="contactName"
                                                    placeholder="Name">
                                                <label for="contactName">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="inputSub"
                                                    placeholder="Subject">
                                                <label for="inputSub">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="contactNumber"
                                                    placeholder="Number">
                                                <label for="contactNumber">Number</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Message" id="msgBox"></textarea>
                                                <label for="msgBox">Message</label>
                                            </div>
                                        </div>
                                    </div>





                                    <button type="submit" class="default-btn move-right">
                                        <span>Send Message</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>Get Information</h5>
                                <p>Our Contact information Details and
                                    Follow us on social media</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="capadesu/assets/images/contact/01.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Office Address</span>
                                            <p>1201 park street, 5th Avenue</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="capadesu/assets/images/contact/02.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Phone Number</span>
                                            <p>+22698 745 632,02 982 745</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="capadesu/assets/images/contact/03.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Send Mail</span>
                                            <p>example@yourmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="capadesu/assets/images/contact/04.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Our Website</span>
                                            <p>www.example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228225.89119998863!2d-82.1359357856101!3d26.64753629985287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db44a7e78016f5%3A0xafd1a4163a9b6ff2!2sCape%20Coral%2C%20FL%2C%20USA!5e0!3m2!1sen!2sbd!4v1616562014411!5m2!1sen!2sbd"
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us Section ENding Here -->
@endsection

{{-- @push('after-style')
@endpush --}}
