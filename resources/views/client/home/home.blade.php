@extends('client.layouts.index')
@section('body-client')
<style>
    .blogReader {
        width: 100%;
        max-height: 100px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }

    /* .text-center {
        font-family: auto;
    } */
    
    .icon-dichvu{
        width: 130px;
        height: 130px;
        border: 1px solid #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5%;
        background: #fce480;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
    }
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }
.search-home{
    width: 100%;
    height: 45px;
    border-radius: 10px !important;
}
.list-search{
    position: fixed;
    /* top: 0; */
    left: 0;
    width: 60%;
    z-index: 9999;
    height: 100vh;
    max-height: 100vh;
    overflow: auto;
    background: #fff;
}


/* search home */
/* select checkBook */
.multiselect {
  width: 300px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}


#checkboxes1 {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes1 label {
  display: block;
}

#checkboxes1 label:hover {
  background-color: #1e90ff;
}
/* ::-webkit-scrollbar {
  width: 20px;
} */

.scrollbar {
  overflow: scroll;
  scrollbar-color: red orange;
  scrollbar-width: thin;
  height:300px !important;
  width: 60%;
}
#myInput{
    background-color: #ffffffb5;
    padding-left: 50px;
    outline: none;
}
.form-control:focus{
    outline: none;
    border-color: #ffd52d;
    box-shadow: none;
}
#overSearch{
    background-color: #fff;
    position: absolute;
    width: 100%;
}
#overSearch.closed{
    display: none;
}
#overSearch ul{
    padding-left: 0;
    margin-bottom: 0;
    max-height: 45vh;
    overflow-y: scroll;
}
#overSearch ul::-webkit-scrollbar {
    width: 0.4rem;
}
#overSearch ul::-webkit-scrollbar-thumb {
    background: #ffd52d;
    border-radius: 0.2rem;
}
#overSearch .dropdown-item:active{
    background-color: #fff;
}
#overSearch ul li{
    list-style: none;
    line-height: 40px;
}
#overSearch ul a{
    color: #000;
    text-decoration: none;
}
#overSearch ul a:hover li{
    text-decoration: underline;
}
.form-search{
    position: relative;
}
#txt_search:focus{
    -webkit-box-shadow: unset;
}
#txt_search{
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    height: 100%;
    position: absolute;
    border-top: 4px solid #ffd52d;
    border-left: 4px solid #ffd52d;
    border-bottom: 4px solid #ffd52d;
}
.timeLoad{
    width: 75%;
    color: #e0f7ffd9;
    font-family: 'Font Awesome 5 Brands';
}
.icon-heart{
    width: 25%;
    color:#ffd5d5;
    text-align: right;
}
.list-hispital-home-one .container{
    margin-top: 2rem;
}
@media (max-width: 450px){
    .list-hispital-home-one .container{
        margin-top: unset;
    }
}
</style>
<style>
    form{
        width:80%;
    }
    .form-control:disabled{
        background-color:#ffffff
    }
    .hiddel{
        display: none;
    }
    .show{
        display: block;
    }

      .scrollbar
    {
      margin-left: 30px;
      /* float: left; */
      height: 300px;
      /* width: 65px; */
      /* background: #F5F5F5; */
      overflow-y: scroll;
      margin-bottom: 25px;
    }

    .force-overflow
    {
      min-height: 400px;
    }

    #wrapper
    {
      text-align: center;
      width: 500px;
      margin: auto;
    }

    /*
    *  STYLE 2
    */

    #style-2::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      border-radius: 10px;
      background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar
    {
      width: 12px;
      background-color: #F5F5F5;
    }

    /* #style-2::-webkit-scrollbar-thumb
    {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #D62929;
    } */
    .tv-lightweight-charts{
      width: 100%;
      padding-right: var(--bs-gutter-x, 0.5rem) !important;
      padding-left: var(--bs-gutter-x,0.5rem)!important;
      margin-right: auto!important;
      margin-left: auto!important;
    }
    /* .table{
        border-color: #670000;
    } */
    .table-responsive.pmd-card.pmd-z-depth{
      height: 100%;
      max-height: 400px;
    }
    #style-1 #table-data thead tr td{
      position: sticky;
      top: 0;
      background: #92241a;
    }

    #frmSendSchedule{
        width: 100%;
    }
    #carouselExampleIndicators input[type=text], input[type=email], input[type=password], input[type=date] {
        padding: 12px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }
    #carouselExampleIndicators textarea{
        padding: 5px 40px;
        display: inline-block;
        border: 1px solid #ccc;
    }

    /* Set a style for the buttons*/
    #carouselExampleIndicators button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Set a hover effect for the button*/
    #carouselExampleIndicators button:hover {
        opacity: 0.8;
    }

    /* Set extra style for the cancel button*/
    #carouselExampleIndicators .container {
        padding: 16px;
    }

    #carouselExampleIndicators .form-input {
        position: relative;
    }

    #carouselExampleIndicators .form-input i {
        position: absolute;
        left: 24px;
        top: 12px;
        color: gray;
    }
    .message-error{
        display: none;
        color: red;
    }
    .error-input{
        border: 1px solid red;
    }
    .error-icon{
        color: red !important;
    }
    .error-input::placeholder{
        color: red;
    }
    .padding-style{
        padding-top:15px
    }
</style>
<link rel="stylesheet" href="../clients/css/style.css">
<div class="image-logo" style="width:100%;background-position: center; background-size: 100%;background-repeat: no-repeat;height: 100%;">
    <img class="card-img " src="../clients/img/Banner_medhn.png" alt="Card image">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="addfile" role="dialog"></div>
<div class="modal " id="show" role="dialog"></div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function inValid(id){
        console.log(id);
        if($("#" + id).val() != ''){
            $('.' + id + '-error').css("display", "none");
            $('.' + id + '-icon').removeClass("error-icon");
        }
    }
$("#frmSendSchedule div.form-input").each(function(key, value){
        $(this,'input').focusout(function(){
            if($(this).find('input').hasClass('required') && $(this).find('input').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }else if($(this).find('textarea').hasClass('required') && $(this).find('textarea').val() == ''){
                $(this).find('.message-error').css("display", "block");
                $(this).find('input').addClass('error-input');
                $(this).find('i').addClass('error-icon');
            }
        });
    });
</script>
<script>
//       $(document).ready(function () {
//       $('#select-state').selectize({
//           sortField: 'text'
//       });
//   });
    //search home
var expanded = false;
function showCheckboxes1() {
var checkboxes = document.getElementById("checkboxes1");
if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
} else {
    checkboxes.style.display = "none";
    expanded = false;
}}


//
var xValues = ["Xét nghiệm tại nhà", "Truyền dịch tại nhà"];
var yValues = [12035, 1049];
var barColors = [
  "#ff0072",
  "#73ced4",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Khách hàng sử dụng dịch vụ medhanoi "
    }
  }
});
</script>
<script>
    function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
<!-- End Service -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Facilities.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript" charset="utf-8">
        let a;
        let time;
        var date = new Date().toLocaleDateString('en-GB')
        var dayvn = new Date();
        // Lấy số thứ tự của ngày hiện tại
        var current_day = dayvn.getDay();
        // Biến lưu tên của thứ
        var day_name = '';

        // Lấy tên thứ của ngày hiện tại
        // switch (current_day) {
        //     case 0:
        //         day_name = "Chủ nhật";
        //         break;
        //     case 1:
        //         day_name = "Thứ hai";
        //         break;
        //     case 2:
        //         day_name = "Thứ ba";
        //         break;
        //     case 3:
        //         day_name = "Thứ tư";
        //         break;
        //     case 4:
        //         day_name = "Thứ năm";
        //         break;
        //     case 5:
        //         day_name = "Thứ sau";
        //         break;
        //     case 6:
        //         day_name = "Thứ bảy";
        // }
        // setInterval(() => {
        //     a = new Date();
        //     time = day_name + ', ngày ' + date + ' ' + a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
        //     document.getElementById('time').innerHTML = time;
        // }, 1000);
    </script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
    document.addEventListener('click', closeOnClickOutside);
    function closeOnClickOutside(e) {
    if(!$("#overSearch").hasClass('closed')){
            if (!e.target.matches('#myInput')) {
                $("#overSearch").addClass('closed');
            }
        }
    }
    function filterSearch(){
        let input = document.getElementById('myInput');
        let dropdown = document.getElementById('overSearch');
        input.addEventListener('input', function () {
        let dropdown_items = dropdown.querySelectorAll('.dropdown-item');
        if (!dropdown_items)
            return false;
        for (let i=0; i<dropdown_items.length; i++) {
            if (dropdown_items[i].innerHTML.toUpperCase().includes(input.value.toUpperCase()))
                dropdown_items[i].style.display = 'block';
            else
                dropdown_items[i].style.display = 'none';
            }
        });
    }
</script>
<script  type="text/javascript">
    $(document).ready(function() {
        var placeholderText = '<?= $dataSearch ?? "" ?>';
        var arrData = placeholderText.split('!~!');
        $('#myInput').placeholderTypewriter({text: arrData});  
    })
</script>
<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_SearchSchedule.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_SearchSchedule = new JS_SearchSchedule(baseUrl, 'client', 'searchschedule');
    $(document).ready(function($) {
        JS_SearchSchedule.loadIndex(baseUrl);
    })
</script>
@endsection
