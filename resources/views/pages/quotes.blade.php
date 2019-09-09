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
            <div class="col-lg-4 quotes-item">
                <img src="{{asset('image/lion.jpg')}}" alt="" class="quotes-image">
            </div>
            <div class="col-lg-8">
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
            <div class="col-lg-4 quotes-item">
                <img src="{{asset('image/change.jpg')}}" alt="" class="quotes-image">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h4>Be the change that you wish to see in the world.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Mahatma Gandhi
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 quotes">
        <div class="row no-gutters">
            <div class="col-lg-4 quotes-item">
                <img src="{{asset('image/282.jpg')}}" alt="" class="quotes-image">
            </div>
            <div class="col-lg-8">
                <div class="card-body">
                    <h4>To handle yourself, use your head; to handle others, use your heart.</h4>
                    <hr>
                    <p class="card-text font-italic">
                        Eleanor Roosevelet
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection