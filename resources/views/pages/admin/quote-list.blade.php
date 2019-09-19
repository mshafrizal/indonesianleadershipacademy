@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
        Quotes List
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
        <li class="active">Quotes List</li>
    </ol>
</section>
<section class="content quotes-list">
    <div class="row">
        <div class="col-lg-12">
            @for ($i = 0; $i < 4; $i++)
            <div class="row quotes-item">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="{{asset('image/Landing.png')}}" alt="" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Published on:</b> 12/9/2019
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <b>Alexander The Great</b>
                        </div>
                        <div class="col-12">
                            <p>I am not afraid of an army of lions led by a sheep; I am afraid of an army of sheep led by a lion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="btn btn-warning">Edit</div>
                        </div>
                        <br>
                        <div class="col-12">
                            <div class="btn btn-danger">Delete</div>
                        </div>
                    </div>
                </div>
            </div>
            <br>    
            @endfor
        </div>
    </div>
</section>
@endsection