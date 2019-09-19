@extends('master-dashboard')
@section('content')
<section class="content-header">
    <h1>
    Web Information
    </h1>
    <ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
    <li class="active">Blog List</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>Social Media Link</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="btn btn-info pull-right">Edit</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Facebook Link</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    http://www.facebook.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Twitter Link</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    http://www.twitter.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Instagram Link</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    http://www.instagram.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Youtube Link</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    http://www.youtube.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Linkedin Link</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    http://www.linkedin.com
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <br>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>Account Information</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Email</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    superadmin@indonesianleadershipacademy.com
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Role</b>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    Super Admin
                </div>
            </div>
        </div>
    </div>
</section>
@endsection