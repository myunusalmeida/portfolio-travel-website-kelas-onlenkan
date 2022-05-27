@extends('layouts.app')

@section('content')

<section class="header" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="header-title">Make Your Holiday Memorable</h1>
                <p class="section-description">
                    Charteing tent turkey exchange rate wordlwide spa hotspots overnight rural.
                    Flexibility cab japan USA expedia locals country.
                </p>
                <a href="#" class="btn btn-orange py-3 px-5 text-uppercase">discover now</a>

                <div class="sponsored d-flex gap-3 mt-5">
                    <img src="{{ url('frontend/images/visa.png') }}" class="logo-sponsored" alt="Visa">
                    <img src="{{ url('frontend/images/ana.png') }}" class="logo-sponsored" alt="Ana">
                    <img src="{{ url('frontend/images/disney.png') }}" class="logo-sponsored" alt="Disney">
                    <img src="{{ url('frontend/images/shangri-la.png') }}" class="logo-sponsored" alt="Shangri">
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ url('frontend/images/header-image.png') }}" alt="Header" class="header-image">
            </div>
        </div>
    </div>
</section>

<section class="destination" id="destination">
    <div class="container">
        <h1 class="section-title text-center mb-5">
            We Provide Top Destination
            <br> <span>Especially For You</span>
        </h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ url('frontend/images/horyuji.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            Enjoy the beauty of horyuji temple japan
                        </h5>

                        <div class="d-flex justify-content-between mt-3">
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-map'></i>
                                <p class="m-0">Ikagura, Japan</p>
                            </div>
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-calendar-alt'></i>
                                <p class="m-0">12 Days</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <p class="price m-0">IDR 4,000,000</p>
                            <a href="#" class="btn btn-card text-uppercase">view details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ url('frontend/images/horyuji.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            Enjoy the beauty of horyuji temple japan
                        </h5>

                        <div class="d-flex justify-content-between mt-3">
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-map'></i>
                                <p class="m-0">Ikagura, Japan</p>
                            </div>
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-calendar-alt'></i>
                                <p class="m-0">12 Days</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <p class="price m-0">IDR 4,000,000</p>
                            <a href="#" class="btn btn-card text-uppercase">view details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ url('frontend/images/horyuji.png') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            Enjoy the beauty of horyuji temple japan
                        </h5>

                        <div class="d-flex justify-content-between mt-3">
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-map'></i>
                                <p class="m-0">Ikagura, Japan</p>
                            </div>
                            <div class="card-icon d-flex align-items-center gap-2 section-description">
                                <i class='bx bx-calendar-alt'></i>
                                <p class="m-0">12 Days</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <p class="price m-0">IDR 4,000,000</p>
                            <a href="#" class="btn btn-card text-uppercase">view details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial" id="testimonial">
    <div class="container">
        <h1 class="section-title text-center mb-5">What our fans are saying about us?</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-testimonial text-center bg-white border-0">
                    <div class="card-body">
                        <img src="{{ url('frontend/images/testimonial-1.png') }}" alt="" class="testimonial-image mb-3">
                        <h4 class="testimonial-name">Morgan Housel</h4>
                        <p class="section-description mb-3">Traveller</p>

                        <img src="{{ url('frontend/images/star.png') }}" class="star mb-3" alt="">
                        <p class="section-description">
                            “I think is the best traveler service i have ever tried and i recommend it to you”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-testimonial text-center bg-white border-0">
                    <div class="card-body">
                        <img src="frontend/images/testimonial-1.png" alt="" class="testimonial-image mb-3">
                        <h4 class="testimonial-name">Morgan Housel</h4>
                        <p class="section-description mb-3">Traveller</p>

                        <img src="frontend/images/star.png" class="star mb-3" alt="">
                        <p class="section-description">
                            “I think is the best traveler service i have ever tried and i recommend it to you”
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-testimonial text-center bg-white border-0">
                    <div class="card-body">
                        <img src="frontend/images/testimonial-1.png" alt="" class="testimonial-image mb-3">
                        <h4 class="testimonial-name">Morgan Housel</h4>
                        <p class="section-description mb-3">Traveller</p>

                        <img src="frontend/images/star.png" class="star mb-3" alt="">
                        <p class="section-description">
                            “I think is the best traveler service i have ever tried and i recommend it to you”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection