
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white " style="top:0;padding-top:0px !important;padding-bottom: 0px !important;background:#00983e!important;width: 100%;z-index: 1000;">
    <div class=" d-flex justify-content-between">
        <div class="image-logo" style="width:10%">
            <img style="" class="card-img " src="../clients/img/logo.png" alt="Card image">
        </div>
        <span>
            <span style="color: #ffffff;font-size: 16px;font-weight: 500;">HỆ THỐNG QUẢN LÝ PHÒNG KHÁM</span>
        </span>
        <a class="navbar-brand h1 navbar-brand-text" href="{{ url('/') }}">
        </a>
        <center>
            @if(isset($_SESSION['username']))
            <div class="navbar" style="box-shadow:none">
                <span style="color: #ffffff;font-weight: 600;">{{$_SESSION['username']}}</span>
                <a class="nav-link" href="{{ route('logout') }}"><i style="color:#ffb783" class="fas fa-sign-in-alt fa-1x"></i></a>
            </div>
            @else
            <div class="navbar">
                <div class="hover-text">
                    <a class="nav-link " href="{{ route('checkLogin') }}"><i style="color:#fff78b" class="fas fa-sign-in-alt fa-1x"></i></a>
                </div>
            </div>
            @endif
        </center>
    </div>
</nav>
@section('js')
@endsection