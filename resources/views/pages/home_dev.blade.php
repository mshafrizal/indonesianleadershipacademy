@extends('master')
@section('content')
<section class="content d-flex flex-column">
    <div class="position-relative landing">
        <img class="img-fluid" src="{{asset('image/Landing.png')}}" alt="Image">
        <div class="caption-image d-flex flex-column justify-content-center align-items-center">
            <h1>
                WE AIM TO TRANSFORM
            </h1>
            <img src="{{asset('image/vector/decoration-center.svg')}}" alt="" width="50%" class="mb-3">
            <h2 class="tagline">PEOPLE - BUSINESSES - COMPANIES - LIVES</h1>
            <a href="#services" class="btn-learn-more text-white mt-5"><h4>LEARN MORE</h4></a>
        </div>
    </div>
    <div class="greetings w-100 d-flex justify-content-center">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="p-5">
                    <h4>WELCOME TO OUR SITE</h4>
                    <p >
                    We are organization focused on the promotion of leadership in Indonesia in order to enable corporate and executive development and leadership potential in management, industry, and social frameworks.
                    </p>
                    <a href="#" class="text-uppercase font-weight-bold">MORE</a>
                </div>
                
            </div>
            <div class="col-lg-6 pt-5 pb-5 pl-3 pr-3 value-section">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="box-value box-hover">
                            <h6 class="font-weight-bold text-uppercase">Point One</h6>
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
                            <h6 class="font-weight-bold text-uppercase">Point Two</h6>
                            <div class="line-inset">
                                <p >
                                The best communication worldwide
                                </p>
                            </div>
                            <div class="box-overlay d-flex justify-content-center align-items-center">
                                <i class="far fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="box-value box-hover">
                            <h6 class="font-weight-bold text-uppercase">Point Three</h6>
                            <div class="line-inset">
                                <p >
                                The best communication worldwide
                                </p>
                            </div>
                            <div class="box-overlay d-flex justify-content-center align-items-center">
                                <i class="far fa-user"></i>
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
        <div class="col-lg-6 flex-column p-0 text-center">
            <div class="d-flex flex-row justify-content-between">
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/brunei.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 175.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 176.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 177.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 178.svg')}}" alt="image">
                </div>
            </div>
            <img src="{{asset('image/vector/decoration-center.svg')}}" alt="" width="90%" class="my-3">
            <div class="d-flex flex-row justify-content-between">
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 179.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 180.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 181.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 182.svg')}}" alt="image">
                </div>
                <div class="col-lg-2">
                    <img class="img-fluid" src="{{asset('image/vector/Group 183.svg')}}" alt="image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 flex-column p-0">
            <div class="pl-5 text-white">
                <h4>SHORTLY ABOUT US</h4>
                <p >
                    The Indonesian Leadership Academy is a leadership group dedicated to the growth of business, corporates and individuals at all levels supporting & influencing Indonesia development as a centre of excellence in the region. 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column my-5">
    <div class="d-flex flex-column container text-center">
        <h4 id="services" class="mb-5">OUR SERVICES</h4>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/corporate-gov.svg') }}" alt="corporate governance" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/exec-leadership.svg') }}" alt="executive leadership" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/roundtable.svg') }}" alt="ceo roundtable" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/entrepreneurship.svg') }}" alt="entrepreneurship" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/leardership-across.svg') }}" alt="leadership across borders" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/milky-way-1023340_1920.svg') }}" alt="future fit leadership" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/alexandre-debieve-FO7JIlwjOtU-unsplash.svg') }}" alt="tech innovation roundatble" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/perry-grone-lbLgFFlADrY-unsplash.svg') }}" alt="humanitarian" class="img-fluid">
        </div>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <img src="{{ asset('image/vector/coaching.svg') }}" alt="coaching" class="img-fluid">
        </div>
    </div>
</section>
<section class="content d-flex flex-column border-top-dark-grey">
    <div class="w-100 d-flex justify-content-center flex-row flex-wrap">
        <div class="col-lg-6 flex-column p-0 bg-dark-grey">
            <div class="p-5 text-white">
                <h4 class="text-dark">WHY CHOOSE US</h4>
                <p class="text-dark">
                    We facilitate learning and development through workshops, webinars, seminars, discussions and individually team designed courses and session.
                </p>
            </div>
        </div>
        <div class="col-lg-6 flex-column p-0 bg-dark-primary">
            <div class="p-5 text-white">
                <h4>OUR SOLUTIONS</h4>
                <p >
                    1. In-Depth Workshops, Seminars, and Webinars <br>
                    2. Designed courses and sessions <br>
                    3. Curated Leadership Curriculum <br>
                    4. Coaching <br> 
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-column">
    <div class="bg-blue-primary p-5 text-center text-white">
        <h2 class="text-uppercase">WE AIM TO HELP THE INDONESIAN WORKFORCE</h2>
        <img src="{{asset('image/vector/decoration-center.svg')}}" alt="" width="50%">
        <h2 class="text-uppercase">IN LEADING WITHIN INDONESIA AND GLOBALLY</h2>
    </div>
</section>
@endsection