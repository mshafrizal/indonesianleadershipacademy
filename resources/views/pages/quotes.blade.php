@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h4>QUOTES</h4>
    </div>
</section>
<section class="content d-flex flex-column container">
    <div class="card mb-3 quotes border-0">
        <div class="row no-gutters">
            <div class="col-lg-12 main-quotes-item text-center">
                <img src="{{asset('image/quotes/20190913120738-bj-habibie_resized_773x435.jpg')}}" alt="" class="main-quotes-image img-fluid mx-auto img-thumbnail rounded" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Alexander-the-Great/images-videos">
            </div>
            <div class="col-lg-12 text-center my-5">
                <h4><em>"Cinta tidak berupa tatapan satu sama lain, tetapi memandang keluar bersama ke arah yang sama."</em></h4>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-10">
                <div class="card-body text-right">
                    <h4>Find yourself in the service of others</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Mahatma Gandhi
                    </p>
                </div>
            </div>
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/Mahatma-Gandhi.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Alexander-the-Great/images-videos">
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/mother-teresa.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Mother-Teresa/images-videos">
            </div>
            <div class="col-lg-10">
                <div class="card-body">
                    <h4>I alone cannot change the world, but I can cast a stone across the water to create many ripples</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Mother Teresa
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            
            <div class="col-lg-9 text-right">
                <div class="card-body">
                    <h4>The successful warrior is the average man, with laser-like focus.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Bruce Lee
                    </p>
                </div>
            </div>
            <div class="col-lg-3 pl-0 quotes-item">
                <img src="{{asset('image/quotes/bruce-lee.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://id.wikipedia.org/wiki/Berkas:Bruce_Lee_as_Kato_1967.jpg">
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-3 pl-0 quotes-item">
                <img src="{{asset('image/quotes/sheryl_sandberg_getty_h_2016.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Sheryl-Sandberg">
            </div>
            <div class="col-lg-9">
                <div class="card-body">
                    <h4>In the future, there will be no female leaders. There will be just leaders.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Sheryl Sandberg
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            
            <div class="col-lg-10">
                <div class="card-body">
                    <h4>Management is doing things right. Leadership is doing the right things.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Jack Welch
                    </p>
                </div>
            </div>
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/768px-Drucker5789.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://id.wikipedia.org/wiki/Berkas:Drucker5789.jpg">
            </div>
        </div>
    </div>
</section>
@endsection