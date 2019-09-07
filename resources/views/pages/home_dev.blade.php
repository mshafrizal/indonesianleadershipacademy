@extends('master')
@section('content')
<section class="content d-flex flex-column">
    <div>
        <img class="img-fluid" src="{{asset('image/Landing.png')}}" alt="Image">
    </div>
    <div class="greetings w-100 d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-6">
                <div class="p-5">
                    <h4>WELCOME TO OUR SITE</h4>
                    <p >
                    We are the unique set-up, that is ready to challenge and 
                    improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                    develop and to gain new experience. 
                    </p>
                    <div class="btn btn-link text-uppercase">more</div>
                </div>
                
            </div>
            <div class="col-lg-6 pt-5 pb-5 pl-3 pr-3 value-section">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="box-value box-hover">
                            <h6 class="font-weight-bold">Communication</h6>
                            <div class="line-inset">
                                <p >
                                The best communication worldwide
                                </p>
                            </div>
                            <div class="box-overlay d-flex justify-content-center align-items-center">
                                <i class="far fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="box-value box-hover">
                            <h6 class="font-weight-bold">Communication</h6>
                            <div class="line-inset">
                                <p >
                                The best communication worldwide
                                </p>
                            </div>
                            <div class="box-overlay d-flex justify-content-center align-items-center">
                                <i class="far fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="box-value box-hover">
                            <h6 class="font-weight-bold">Communication</h6>
                            <div class="line-inset">
                                <p >
                                The best communication worldwide
                                </p>
                            </div>
                            <div class="box-overlay d-flex justify-content-center align-items-center">
                                <i class="far fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column">
    <div class="w-100 p-5 bg-dark-primary d-flex justify-content-center flex-row flex-wrap">
        <div class="col-lg-6 flex-column p-0">
            <div class="d-flex flex-row justify-content-between">
                @for ($i = 0; $i < 5; $i++)
                    <div class="col-lg-2">
                        <img class="img-fluid" src="{{asset('image/brunei.svg')}}" alt="image">
                    </div>
                @endfor
            </div>
            <hr class="lg my-5">
            <div class="d-flex flex-row justify-content-between">
                @for ($i = 0; $i < 5; $i++)
                    <div class="col-lg-2">
                        <img class="img-fluid" src="{{asset('image/brunei.svg')}}" alt="image">
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-lg-6 flex-column p-0">
            <div class="p-2 text-white">
                <h4>WELCOME TO OUR SITE</h4>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column border-top-blue">
    <div class="d-flex flex-row flex-wrap">
        <div class="col-lg-4 bg-dark-secondary">
            <div class="d-flex flex-column p-3">
                <h4>WELCOME TO OUR SITE</h4>
                <h6>TRAININGS</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
                <h6>MASTER CLASSES</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
        <div class="col-lg-4 bg-dark-primary ">
            <div class="d-flex flex-column p-3 text-white">
                <h4>WELCOME TO OUR SITE</h4>
                <h6>TRAININGS</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
                <h6>MASTER CLASSES</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
        <div class="col-lg-4 bg-blue-primary">
            <div class="d-flex flex-column p-3 text-white">
                <h4>WELCOME TO OUR SITE</h4>
                <h6>TRAININGS</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
                <h6>MASTER CLASSES</h6>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column border-top-dark-grey">
    <div class="w-100 d-flex justify-content-center flex-row flex-wrap">
        <div class="col-lg-6 flex-column p-0 bg-dark-grey">
            <div class="p-5 text-white">
                <h4>WELCOME TO OUR SITE</h4>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
        <div class="col-lg-6 flex-column p-0 bg-dark-primary">
            <div class="p-5 text-white">
                <h4>WELCOME TO OUR SITE</h4>
                <p >
                We are the unique set-up, that is ready to challenge and 
                improve leadership in your organization. Our company gladly helps those, who are ready to learn, to 
                develop and to gain new experience. 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column">
    <div class="bg-blue-primary p-5 text-center text-white">
        <h2 class="text-uppercase">WE AIM TO HELP INDONESIAN WORKFORCE</h2>
        <hr class="lg m-3">
        <h2 class="text-uppercase">IN LEADING WITHIN INDONESIA AND GLOBALLY</h2>
    </div>
</section>
@endsection