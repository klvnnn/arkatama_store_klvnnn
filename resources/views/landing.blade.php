@extends('master')
@section('isi')
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div
                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Welcome To<br>Arkatama Store</h2>
                <p data-aos="fade-up" data-aos-delay="100">Apa yang kamu cari ada disini!!!</p>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 12px">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/store.jpg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                data-aos-delay="300">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slider1.jpeg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                data-aos-delay="300">
                            </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slider4.jpeg') }}" class="img-fluid" alt=""
                                data-aos="zoom-out" data-aos-delay="300">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slider2.jpeg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                                data-aos-delay="300">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/slider3.jpeg') }}" class="img-fluid" alt=""
                                data-aos="zoom-out" data-aos-delay="300">
                        </div>
                        {{-- image slider --}}
                        <div class="carousel-item">
                            <img src="{{ asset('uploads/slider/1685947781_img-1204jpg') }}" class="img-fluid" alt=""
                                data-aos="zoom-out" data-aos-delay="300">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev" data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('assets/img/left.png') }}" alt="">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next"  data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('assets/img/right.png') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection