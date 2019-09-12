<nav class="navbar navbar-expand-lg navbar-ila">    
    <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li @if(Route::currentRouteName()=='About Us') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('About Us')}}">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li @if(Route::currentRouteName()=='Contact') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Contact')}}">Contact</a>
                </li>
                <li @if(Route::currentRouteName()=='Gallery') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Gallery')}}">Gallery</a>
                </li>
                <li @if(Route::currentRouteName()=='Quotes') class="nav-item active" @else class="nav-item" @endif>
                    <a class="nav-link text-uppercase" href="{{route('Quotes')}}">Quotes</a>
                </li>
                <li class="social-item">
                    <a class="text-uppercase social-link" href="#"><img src="{{asset('image/vector/facebook.png')}}" alt=""></a>
                </li>
                <li class=" social-item">
                    <a class="text-uppercase social-link" href="#"><img src="{{asset('image/vector/btn-instagram.svg')}}" alt=""></a>
                </li>
                <li class=" social-item">
                    <a class="text-uppercase social-link" href="#"><img src="{{asset('image/vector/btn-twitter.svg')}}" alt=""></a>
                </li>
                <li class=" social-item">
                    <a class="text-uppercase social-link" href="#"><img src="{{asset('image/vector/btn-youtube.svg')}}" alt=""></a>
                </li>
                <li class=" social-item">
                    <a class="text-uppercase social-link" href="#"><img src="{{asset('image/vector/btn-linkedin.svg')}}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>