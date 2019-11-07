@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h3>GALLERY</h3>
    </div>
</section>
<section class="content d-flex mb-3">
    <div class="container">
        <div class="flex-row d-flex flex-wrap justify-content-between">
            <div class="row">
                @foreach ($images as $item)
                    <div class="gallery-item position-relative p-2">
                      <a href="{{asset('image/' . $item->getFileName())}}" data-toggle="lightbox" data-footer="{{$item->caption}}">
                            <img src="{{asset('image/' . $item->getFileName())}}" alt="" class="gallery-image">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="content d-flex mb-3">

</section>
<script>

</script>
@endsection