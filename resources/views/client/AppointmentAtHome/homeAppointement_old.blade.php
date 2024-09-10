@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
    }
    .expert .card-img{
        width: unset !important;
    }
</style>
<style> 
.test {
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 6s;
}

@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}
  100%  {background-color:yellow; left:50%; top:0px;}

}
#scroll {
  position: relative;
  width: 100%;
  margin: auto;
  /* border: solid black 2px; */
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
  scroll-snap-type: x mandatory;
}
.scroll-item {
  margin: 2px;
  /* width:30%; */
  display: inline-block;
  scroll-snap-align: start;
  scroll-margin-left: 20px;
}
/* .text-center {
        font-family: auto;
    } */
    
    .icon-dichvu{
    width: 80px;
    height: 80px;
    border: 1px solid #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff;
    box-shadow: 3px 3px 5px 0 rgba(0,0,0,0.5);
    }
    ::-webkit-scrollbar-thumb {
        background: none;
    }
    ::-webkit-scrollbar-track {
        background: none;
    }
@media (max-width: 450px){
    .title-appoinment {
        font-size: 24px !important;
        padding-top: 0 !important;
    }
    .objective-icon{
        width: 12rem;
        height: 6.5rem;
    }
    .objective h2, .objective .h3{
        font-size: 22px !important;
    }
    .team-member ul li b{
        font-size: 20px;
    }
    b, span, strong{
        font-size: 1rem;
    }
}
</style>
<link rel="stylesheet" href="../clients/css/style.css">
    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <i class=" bx bxs-bulb text-light fa-3x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Khám tổng quát từ medlatec</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=' bx bx-revision text-light'></i> -->
                        <i class="fas fa-thermometer fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Truyền dịch y tế</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <i class=" bx bxs-select-multiple text-light fa-3x"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Cấp cứu hồi sức</h2>
                </div>

            </div>
        </div>
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=" bx bxs-bulb text-light"></i> -->
                        <i class="fas fa-heartbeat fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4">Đo điện tim</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=' bx bx-revision text-light'></i> -->
                        <i class="fas fa-video fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Chụp X-quang</h2>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-warning shadow-lg">
                        <!-- <i class=" bx bxs-select-multiple text-light"></i> -->
                        <i class="fas fa-tint fa-3x" style="color:#ffffff"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 ">Xét nghiệm máu</h2>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->
    <!-- End Banner Hero -->
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>
<div class="modal " id="show" role="dialog"></div>

<div id="dialogconfirm"></div>
    <!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_AppointmentAtHome.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    NclLib.menuActive('.link-bloodtest');
    var baseUrl = "{{ url('') }}";
    var JS_AppointmentAtHome = new JS_AppointmentAtHome(baseUrl, 'client', 'appointmentathome');
    $(document).ready(function($) {
        JS_AppointmentAtHome.loadIndex(baseUrl);
    })
</script>
@endsection