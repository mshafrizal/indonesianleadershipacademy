@extends('master')
@section('content')
<section class="content d-flex flex-column">
    <div class="position-relative landing my-5">
        <div class="caption-image d-flex flex-column justify-content-center text-center align-items-center">
          <img src="{{ asset('image/Logo.jpg') }}" alt="Logo Indonesian Leadership Academy" class="logo mb-4" data-aos="fade-in">
            <h1 data-aos="fade-in"><b>
                INDONESIAN LEADERSHIP ACADEMY
            </h1></b>
            <h3 data-aos="fade-in"><em>We Aim To Transform People - Business - Companies - Lives</em></h3>
            <br>
            <a href="#services" class="btn-learn-more text-white mt-3" data-aos="fade-in"><h4>LEARN MORE</h4></a>
        </div>
    </div>
</section>
<section class="content d-flex flex-column container">
    <div class=" d-flex justify-content-center my-5" data-aos="fade-right">
        <div class="row">
            <div class="col-lg-6">
                <h1>Who We Are</h1>
            </div>
            <div class="col-lg-6">
                <p >
                  We are organization focused on the promotion of leadership in Indonesia in order to enable corporate and executive development and leadership potential in management, industry, and social frameworks.
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5" data-aos="fade-left">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Mission</h1>
            </div>
            <div class="col-lg-6">
                <p >
                    The Indonesian Leadership Academy aims to facilitate through learning, inspiration, conversation and connection, the creation, participation and development of leaders and thinkers within Indonesia, Asia and, globally.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-row flex-wrap container my-5 point-section">
  <div class="col-lg-12 text-center mb-5" data-aos="fade-in">
    <h1>How We Do It</h1>
  </div>
  <div class="col-lg-4">
    <div class="card" data-aos="fade-up">
      <div class="card-body">
        <div class="card-title" style="font-size: 56px;"><i class="fas fa-hand-holding-heart"></i></div>
        <p class="card-text">
            We serve leadership potential in Indonesia’s social, management, business and industry frameworks.
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="card-title" style="font-size: 56px;"><i class="fas fa-cog"></i></div>
          <p class="card-text">
              We solve problems by working to bring integrity, authenticity, intelligence, cooperation and state of the art solutions to the Indonesian workforce and to communities within Indonesia.
          </p>
        </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
          <div class="card-title" style="font-size: 56px;"><i class="fas fa-lightbulb"></i></div>
          <p class="card-text">
              We facilitate learning and development through workshops, webinars, seminars, discussions and individually designed courses and sessions.
          </p>
        </div>
    </div>
  </div>
</section>
<section class="d-flex flex-column my-5 services py-3">
    <div class="d-flex flex-column container text-center">
        <h1 id="services" class="mb-5 text-white" data-aos="fade-in">Our Services</h1>
        <div class="d-flex flex-row text-left flex-wrap">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="card p-2 mb-3">
                <p class="card-text"><b>Corporate Governance</b></p>
            </div>
            <div class="card p-2 mb-3">
                <p class="card-text"><b>Executive Leadership</b></p>
            </div>
            <div class="card p-2 mb-3">
                <p class="card-text"><b>CEO Roundtable</b></p>
            </div>
            <div class="card p-2 mb-3">
                <p class="card-text"><b>Entrepreneurship</b></p>
            </div>
          </div>
          <div class="col-lg-4"  data-aos="fade-up">
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Leadership Across Borders</b></p>
            </div>
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Future Fit Leadership</b></p>
            </div>
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Tech/Innovation</b></p>
            </div>
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Humanitarian Leadership</b></p>
            </div>
          </div>
          <div class="col-lg-4"  data-aos="fade-left">
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Women's Empowerment</b></p>
            </div>
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Coaching</b></p>
            </div>
            <div class="card p-2 mb-3">
              <p class="card-text"><b>Mentorship</b></p>
            </div>
          </div>
        </div>
    </div>
</section>
<section class="content d-flex flex-row flex-wrap container my-5" data-aos="fade-right">
  <div class="col-lg-6">
    <h1>Why Choose Us</h1>
  </div>
  <div class="col-lg-6">
    <p>We facilitate learning and development through workshops, webinars, seminars, discussions and individually team designed courses and session.</p>
  </div>
</section>
</section>
<section class="content d-flex flex-row flex-wrap container my-5" data-aos="fade-left">
  <div class="col-lg-6">
    <h1>Our Solutions</h1>
  </div>
  <div class="col-lg-6">
    <ol class="list-group">
      <li class="pb-2"><h5>1. In-Depth Workshops, Seminars, and Webinars</h5></li>
      <li class="pb-2"><h5>2. Designed courses and sessions</h5></li>
      <li class="pb-2"><h5>3. Curated Leadership Curriculum</h5></li>
      <li class="pb-2"><h5>4. Coaching</h5></li>
    </ol>
  </div>
</section>
{{-- <section class="content d-flex flex-column border-top-dark-grey">
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
</section> --}}
<section class="content d-flex flex-column mission my-5" data-aos="fade-up">
    <div class="p-5 text-center">
        <h2 class="text-uppercase font-weight-bold">WE AIM TO HELP THE INDONESIAN WORKFORCE</h2>
        <br>
        <h2 class="text-uppercase font-weight-bold">IN LEADING WITHIN INDONESIA AND GLOBALLY</h2>
    </div>
</section>
@endsection