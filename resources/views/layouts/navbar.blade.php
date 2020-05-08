<style>
    .dropbtn {
        color: white;
        margin-top: 3px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        background-color: transparent;
        padding-top: 5px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #10d3c9;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

</style>
<script>
    import 'bootstrap/dist/css/bootstrap.min.css';
    import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/dropdown';
</script>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="/"><strong>NKA</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/film')}}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/posts')}}">Posts</a>
            </li>

            <ul class="navbar-nav ml-auto" style="margin-left: 850px !important;">
                <li class="nav-item">

                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-light">{{ count((array) session('cart')) }}</span>
                        </button>
                        <div class="dropdown-menu" style="background-color:#aa66cc;">

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $movie)
                                    <div style="margin-left:30px">

                                    <div class="row cart-detail">
                                        <div class="">
                                            <b><a href="#" class="text-navy" style=" color: white; text-align: center;padding-right:45px;font-size: 17px">{{ $movie['name'] }}</a>
                                            </b></div>
                                        <div class="" style="padding-left: 25px; ">
                                            <img src="{{ $movie['image'] }}" width="70" height="100"  style="border-radius: 3px;"/>
                                        </div>

                                    </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @endif
                                <div class="btnn">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block" style="margin-bottom:9px;color:white;background-color: #10d3c9!important;">View all</a>
                                </div>
                                </div>
                        </div>
                    </div>


                    @yield('scripts')
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('login') }}" style="margin-left: 50px">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div class="dropdown" style="float:right;">
                            <button class="dropbtn" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span></button>
                            <div class="dropdown-content">
                                <a class="nav-link" href="{{ route('post.create') }}" style="color: white"><i class="fa fa-pencil" style="margin-right: 5px;"></i>Create Post</a>
                                <a href="/profile"><i class="fa fa-cogs" style="margin-right: 5px;"></i>Profile</a>

                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" style="margin-right: 5px;"></i>
                                    {{ __('Logout') }}</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></div></li>
                @endguest
            </ul>
        </ul>
    </div>
</nav>
