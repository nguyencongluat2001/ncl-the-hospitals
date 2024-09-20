


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Biểu mẫu điện tử</title>
    <style>
        body{
            font-family: "DejaVuSans", serif;
        }
    </style>
</head>
<body>
<form id="frmView" role="form" action="" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" id="id" value="{{isset($result[0]['id'])?$result[0]['id']:''}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content card">
            <div class="modal-body pt-1">
                <div style="padding: 0px 10px 10px 10px;display:flex">
                    <div style="width:50%;">
                        <img style="width:60%;padding:20px 0px 0px 20px" class="card-img " src="../clients/img/logo.png" alt="Card image">
                    </div>
                    <div style="width:50%;padding:10px 0px 0px 10px">
                        <center>
                            <span style="font-size: 19px;font-weight: 600;">PHÒNG KHÁM ĐA KHOA MEDITEC</span> <br>
                            <span style="font-size: 19px;font-weight: 600;">TRUNG TÂM CHẨN ĐOÁN HÌNH ẢNH</span><br>
                            <span style="font-size: 16px;font-weight: 600;">52 Bà Triệu - Hoàn Kiếm - Hà Nội</span><br>
                            <span style="font-size: 16px;font-weight: 600;">ĐT: 0439325252 - www.meditecclinic.com.vn</span>
                        </center>
                    </div>
                </div>
                <div>
                    <br>
                    <center>
                        <span style="font-size: 19px;font-weight: 600;">PHIẾU KẾT QUẢ CỘNG HƯỞNG TỪ</span>
                    </center>
                    <br>
                </div>
                <div>
                    <div class="row form-group" style="padding: 0px 50px 10px 50px;">
                        <div class="col-md-7" style="">
                            <span>Họ tên: <b>{{$result[0]['tenbn']}}</b></span> <br>
                            <span>Ngày sinh: {{$result[0]['namsinh']}}</span> <br>
                            <span>Địa chỉ: {{$result[0]['namsinh']}}</span><br>
                            <span>Yêu cầu: <b>{{$result[0]['yeucaudichvu']}}</b></span>
                        </div>
                        <div class="col-md-5" style="">
                            <span>Giới tính: {{$result[0]['gioitinh']}}</span> <br>
                            <span>Điện thoại: {{$result[0]['dienthoai']}}</span>
                        </div>
                    </div>
                </div>
                <center><span style="font-size: 20px;font-weight: 600;">Kết luận</span></center>
                <div style="padding:10px 60px 0px 60px">
                {!! $result[0]['noidunghtml'] !!}
                </div>
                <br>
                <div>
                    <div class="row form-group" style="padding: 0px 50px 10px 50px; display:flex">
                        <div class="col-md-6" style="">
                            <span>Vui lòng quét QR để xem kết quả</span> <br>
                        </div>
                        <div class="col-md-6" style="">
                            <center>
                            <span> {{$result[0]['ngaychidinh']}} </span> <br>
                            <span> Bác sĩ chuyên khoa </span> <br>
                            <span> Đã ký </span> <br>
                            <span> Nguyễn Văn Test </span> <br>
                            </center>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>