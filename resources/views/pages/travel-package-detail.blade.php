@extends('layouts.app')

@section('content')
<section class="detail-page" id="detailpage">
    <div class="container">
        <div class="row image-preview">
            <div class="col-md-8">
                <img src="{{ url('frontend/images/detail-1.png') }}" class="hero-preview" id="heroPreview" alt="">
            </div>
            <div class="col-md-4">
                <div class="image-preview-right">
                    <img src="frontend/images/detail-1.png" class="image-preview-small mb-3" onclick="imgPreview(this.src)"
                        alt="">
                    <img src="frontend/images/detail-2.png" class="image-preview-small mb-3" onclick="imgPreview(this.src)"
                        alt="">
                    <img src="frontend/images/detail-3.png" class="image-preview-small mb-3" onclick="imgPreview(this.src)"
                        alt="">
                </div>
            </div>
        </div>

        <div class="row travel-detail mt-5">
            <div class="col-md-8">
                <h2 class="travel-detail-title">
                    Enjoy the beauty of horyuji temple japan
                </h2>

                <div class="detail-with-icon mt-3">
                    <div class="detail-with-icon-item section-description d-flex align-items-center gap-2">
                        <i class="bx bx-map"></i>
                        <p class="m-0">Ikagura, Japan</p>
                    </div>
                    <div class="detail-with-icon-item section-description d-flex align-items-center gap-2">
                        <i class="bx bx-calendar-alt"></i>
                        <p class="m-0">12 Days</p>
                    </div>
                    <div class="detail-with-icon-item section-description d-flex align-items-center gap-2">
                        <i class="bx bx-globe"></i>
                        <p class="m-0">Japanese, English</p>
                    </div>
                    <div class="detail-with-icon-item section-description d-flex align-items-center gap-2">
                        <i class="bx bx-user"></i>
                        <p class="m-0">Family Tour</p>
                    </div>
                    <div class="detail-with-icon-item section-description d-flex align-items-center gap-2">
                        <i class="bx bx-purchase-tag-alt"></i>
                        <p class="m-0">IDR 4,000,000/people</p>
                    </div>
                </div>

                <div class="travel-description mt-5">
                    <h4 class="travel-description-title">About this travel packages</h4>
                    <p class="section-description">
                        The Horyuji Temple near Nara in Japan was founded in 607 CE by Prince Shotoku and is the
                        only surviving Buddhist monastery from the Asuka Period in its original state. The complex,
                        consisting of 48 listed buildings including a 5-storey pagoda, has the oldest wooden
                        buildings in Japan
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Book a Travel Package</h4>

                        <form action="#" method="post" class="mt-5">
                            <div class="input-group mb-3">
                                <div class="input-group-text bg-white">
                                    <i class="bx bx-calendar"></i>
                                </div>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-text bg-white">
                                    <i class="bx bx-user"></i>
                                </div>
                                <select name="number_of_people" id="numberOfPeople" class="form-control">
                                    <option value="">Number of people</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <button class="btn btn-orange py-2 px-5 d-block w-100 text-uppercase">
                                book a travel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="destination" id="destination">
    <div class="container">
        <h1 class="section-title text-center mb-5">
            Travel Recommendations For You
        </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="frontend/images/horyuji.png" alt="" class="card-img-top">
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
                    <img src="frontend/images/hagia-sophia.png" alt="" class="card-img-top">
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
                    <img src="frontend/images/horyuji.png" alt="" class="card-img-top">
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
@endsection