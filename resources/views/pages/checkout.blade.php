@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <h2 class="checkout-title">Secure Checkout</h2>
        <p class="section-description">Checkout your booking to complete the journey</p>
        <hr>

        <form action="#" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout-content mt-5">
                        <h4 class="checkout-content-title mb-4">Traveller Details</h4>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="firstName">First Name*</label>
                                    <input type="text" name="first_name" id="firstName" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="lastName">Last Name*</label>
                                    <input type="text" name="last_name" id="lastName" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="emailAddress">Email Address*</label>
                                    <input type="email" name="email" id="emailAddress" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phoneNumber">Phone Number*</label>
                                    <input type="number" name="phone" id="phoneNumber" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="dateOfrBirthday">Date of Birthday*</label>
                                    <input type="date" name="birthday" id="dateOfrBirthday" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="phoneNumber">Gender*</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="country">Country*</label>
                                    <input type="text" name="country" id="contry" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="passportNumber">Passport Number*</label>
                                    <input type="number" name="passport_number" id="passportNumber"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <p class="section-description mt-3 mb-5">
                            We Contact with you though mobile phone or email if needed.
                        </p>

                        <hr>

                        <h4 class="checkout-content-title">Payment Informations</h4>
                        <p class="section-description mb-4">Our various payment methods are available</p>

                        <div class="payment-method d-flex gap-3">
                            <img src="frontend/images/mandiri.png" alt="">
                            <img src="frontend/images/bca.png" alt="">
                            <img src="frontend/images/dana.png" alt="">
                            <img src="frontend/images/gopay.png" alt="">
                        </div>

                        <button class="btn btn-orange d-block w-100 text-uppercase py-2" style="margin-top: 50px">
                            request a travel</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">Review Booking Detail</h4>
                            <img src="frontend/images/detail-1.png" alt="" class="card-img">
                            <h5 class="travel-title">Enjoy the beauty of horyuji temple japan</h5>

                            <div class="section-description card-icon d-flex align-items-center gap-2 mb-3">
                                <i class="bx bx-map"></i>
                                <p class="m-0">Ikagura, Japan</p>
                            </div>

                            <hr>

                            <div class="section-description card-icon d-flex align-items-center gap-2">
                                <i class="bx bx-calendar-alt"></i>
                                <p class="m-0">Tue, 22 Feb 2022</p>
                            </div>
                            <div class="section-description card-icon d-flex align-items-center gap-2 mb-3">
                                <i class="bx bx-user"></i>
                                <p class="m-0">4 Participants</p>
                            </div>

                            <hr>

                            <div class="price-area d-flex align-items-center justify-content-between">
                                <p class="m-0 section-description">Subtotal</p>
                                <p class="m-0 price">IDR 16,000,000</p>
                            </div>
                            <div class="price-area d-flex align-items-center justify-content-between">
                                <p class="m-0 section-description">Total</p>
                                <p class="m-0 price">IDR 16,000,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection