@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h4>BLOGS</h4>
    </div>
</section>
<section class="content d-flex flex-column container">
    <div class="d-flex flex-row flex-wrap">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-8 px-0">
                <h1 class="display-4 text-uppercase">11 Leadership Lessons from Alexander the Great</h1>
                <p class="lead my-3">Visionary, team builder, mentor, he shows us some timeless leadership lessons but also some glaring failures.</p>
                <p class="lead mb-0"><a href="{{ route('blog-detail-en') }}" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row flex-wrap">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-8 px-0">
                <h1 class="display-4 text-uppercase">7 Kutipan Inspiratif dari B.J. Habibie yang Bisa Kamu Jadikan Pedoman Hidup</h1>
                <p class="lead my-3">B.J. Habibie telah meninggalkan kita semua, tetapi sikap, pemikiran, dan perilakunya akan selalu membekas di hati.</p>
                <p class="lead mb-0"><a href="{{ route('blog-detail-id') }}" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
</section>
@endsection