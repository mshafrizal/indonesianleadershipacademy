@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h4>QUOTES</h4>
    </div>
</section>
<section class="content d-flex flex-column container">
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/Alexander-the-Great-detail-painting-Porus-Charles.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Alexander-the-Great/images-videos">
            </div>
            <div class="col-lg-10">
                <div class="card-body">
                    <h4>I am not afraid of an army of lions led by a sheep; I am afraid of an army of sheep led by a lion.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Alexander The Great
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/St-Teresa-of-Calcutta-saint-2016.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Mother-Teresa/images-videos">
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
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/Bruce_Lee_as_Kato_1967.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://id.wikipedia.org/wiki/Berkas:Bruce_Lee_as_Kato_1967.jpg">
            </div>
            <div class="col-lg-10">
                <div class="card-body">
                    <h4>The successful warrior is the average man, with laser-like focus.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Bruce Lee
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/Sheryl-Sandberg-Facebook.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://www.britannica.com/biography/Sheryl-Sandberg">
            </div>
            <div class="col-lg-10">
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
            <div class="col-lg-2 pl-0 quotes-item">
                <img src="{{asset('image/quotes/768px-Drucker5789.jpg')}}" alt="" class="quotes-image" data-toggle="tooltip" data-placement="top" title="https://id.wikipedia.org/wiki/Berkas:Drucker5789.jpg">
            </div>
            <div class="col-lg-10">
                <div class="card-body">
                    <h4>Management is doing things right. Leadership is doing the right things.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Peter F. Drucker
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection