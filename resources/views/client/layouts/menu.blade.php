
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white " style="top:0;padding-top:0px !important;padding-bottom: 0px !important;background-image: linear-gradient(to right, #45ee0d, #79eaff);width: 100%;z-index: 1000;">
    <div class=" d-flex justify-content-between">
        <div class="image-logo" style="width:10%">
            <img style="" class="card-img " src="../clients/img/logo.png" alt="Card image">
        </div>
        <span>
            <span style="color: #171f56;font-size: 16px;font-weight: 500;">HỆ THỐNG QUẢN LÝ PHÒNG KHÁM</span>
        </span>
        <a class="navbar-brand h1 navbar-brand-text" href="{{ url('/') }}">
        </a>
        <center>
            @if(isset($_SESSION['username']))
            <div class="navbar">
                <span style="color: #00a3e0;font-weight: 600;">{{$_SESSION['username']}}</span>
                <a class="nav-link" href="{{ route('logout') }}"><i style="color:#ffb783" class="fas fa-sign-in-alt fa-1x"></i></a>
            </div>
            @else
            <div class="navbar">
                <div class="hover-text">
                    <a class="nav-link " href="{{ route('checkLogin') }}"><i style="color:#ffb783" class="fas fa-sign-in-alt fa-1x"></i></a>
                </div>
            </div>
            @endif
        </center>
    </div>
</nav>
@section('js')
@endsection