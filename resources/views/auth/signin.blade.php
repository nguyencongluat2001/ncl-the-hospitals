@extends('client.layouts.index')

@section('body-client')
<style>
    .form-wrapper,
    .checkbox {
        color: #ffffff;
    }

    .form-control {
        color: #000000;
        background:#ffffff !important;
    }
</style>
<link rel="stylesheet" href="../clients/css/style.css">

<div class="mt-2" style="background-image: url('/clients/img/signin.jpeg');background-size: cover;background-position: center center;">
    <div style="background:#20364b94;">
        <div class="row justify-content-center" style="height:800px; ">
            <div class="col-md-7" style="padding-top:180px;">
                    <div class="wrapper" style="display: flex; justify-content: center;background: #0d1c2573;border-radius: 15px;margin: 20px;">
                        <form method="GET" action="{{ route('checkLogin') }}" autocomplete="off" style="padding: 30px;">
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group" align="center">
                                <div class="col-md-12 mt-3 mb-3">
                                    <h3 class="text-uppercase" style="font-family: Serif;color:#ffd862;font-weight: 600;">Đăng nhập</h3>
                                </div>
                            </div>
                            
                            <div class="form-wrapper row">
                                <label for="">Tên đăng nhập  <span class="request_star">*</span></label>
                                <input  id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" autofocus placeholder="Tên đăng nhập ...">
                                @if(isset($data['username'])) <span style="color: red">{{$data['username']}}</span> @endif
                            </div>
                            <div class="form-wrapper row {{!isset($data['password']) ? 'mb-3' : ''}}">
                                <label for="">Mật khẩu <span class="request_star">*</span></label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                @if(isset($data['password'])) <span style="color: red">{{$data['password']}}</span> @endif
                                @if(isset($data['false'])) <span style="color: red">{{$data['false']}}</span> @endif
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-12 mb-3" style="display: flex;justify-content: space-between;">
                                    <button type="submit" class="btn btn-primary" style="background-color: #ffb600;color: white;">
                                        {{ __('Đăng nhập') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('dist\js\backend\client\JS_Login.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = '{{ url('') }}';
    var JS_Login = new JS_Login(baseUrl, 'login');
    $(document).ready(function($) {
        JS_Login.loadIndex(baseUrl);
    })
</script>
@endsection