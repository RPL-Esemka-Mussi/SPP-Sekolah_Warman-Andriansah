@extends('mian.navbar')

@section('content')


    <div class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="h-100"></div>
                    <img src="{{ asset('img/kobo3.png') }}" alt="">
                </div>

                <div class="carousel-item">
                    <div class="h-100"></div>
                    <img src="{{ asset('img/1294144.jpg') }}" alt="">

                </div>
                <div class="carousel-item">
                    <div class="h-100"></div>
                    <img src="{{ asset('img/kaori.jpg') }}" alt="">

                </div>

                <div class="carousel-item">
                    <div class="h-100"></div>
                    <img src="{{ asset('img/jabami.png') }}" alt="">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev mt-5" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next mt-5" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


        <!-- FOOTER -->
        <footer class="container ">
            <p class="float-end btn btn-sm btn-primary mt-3 ">Back to top<a href="myCarousel"></a></p>
            <p>&copy; 2023 Warman_Upk Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>

    </div>

@endsection
