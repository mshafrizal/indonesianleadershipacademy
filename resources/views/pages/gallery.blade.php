@extends('master')
@section('content')
<section class="content d-flex my-3">
    <div class="container">
        <h3>GALLERY</h3>
    </div>
</section>
<section class="content d-flex mb-3" style="min-height: 500px;">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="flex-row d-flex flex-wrap justify-content-between">
            @if(isset($images))
              @foreach ($images as $item)
                <div class="gallery-item position-relative p-2">
                  <a href="{{ $item->image_url }}" data-toggle="lightbox" data-footer="{{$item->caption}}">
                        <img src="{{ $item->image_url }}" alt="" class="gallery-image">
                    </a>
                </div>
              @endforeach
            @else
              
            @endif
    </div>
</section>
<section class="content d-flex mb-3">

</section>
<script>

</script>
@endsection