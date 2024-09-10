@extends('client.layouts.index')
@section('body-client')
<style>
    form{
        width:80%;
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
    <!-- Start Banner Hero -->
    <div class="image-logo" style="width:100%;background-position: center; background-size: 100%;background-repeat: no-repeat;height: 100%;">
        <img class="card-img " src="../clients/img/Banner_medhn.png" alt="Card image">
    </div>
    Số GPHĐ : 101/HNO-GPHĐ <br>
    Giấy phép chứng chỉ hành nghề chữa bệnh <br>
    Giấy phép hoạt động khám chữa bệnh <br>
    <!-- End Banner Hero -->
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>
<div class="modal " id="show" role="dialog"></div>

<div id="dialogconfirm"></div>
    <!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_AppointmentAtHome.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    NclLib.menuActive('.link-infusion');
    var baseUrl = "{{ url('') }}";
    var JS_AppointmentAtHome = new JS_AppointmentAtHome(baseUrl, 'client', 'appointmentathome');
    $(document).ready(function($) {
        JS_AppointmentAtHome.loadIndex(baseUrl);
    })
</script>
@endsection