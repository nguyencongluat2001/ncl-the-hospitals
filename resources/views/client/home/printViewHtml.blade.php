<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="http://103.75.186.165:8080/assets/css/toast.min.css">
    <link href="http://103.75.186.165:8080/assets/css/dashboard.css?v=2.0.4" rel="stylesheet" />
    <link href="http://103.75.186.165:8080/clients/css/boxicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://103.75.186.165:8080/clients/css/templatemo.css">
    <link rel="stylesheet" href="http://103.75.186.165:8080/clients/css/chat.css">
    <link rel="stylesheet" href="http://103.75.186.165:8080/clients/css/custom.css">
    <link rel="stylesheet" href="http://103.75.186.165:8080/assets/chosen/chosen.min.css">
</head>
<style>
    span{
        font-family: "Times New Roman", Times, serif;
    }
    ::-webkit-scrollbar {
        width: 0px !important;
    }
</style>
    <div class="modal-body pt-1">
        <div style="padding: 0px 10px 10px 10px;display:flex">
            <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                <thead>
                    <tr>
                        <td style="vertical-align: middle;width:30%">
                            <span>
                            <!-- <img src="clients/img/logo.png" alt="Example Image" width="200"> -->
                            <img style="width:30%;padding:20px 0px 0px 20px" class="card-img " src="http://103.75.186.165/clients/img/1.jpg" alt="Card image">
                            </span>
                        </td>
                        <td style="width:10%"></td>
                        <td align="center" style="vertical-align: middle;padding-top:20px;width:60%">
                            <span style="font-size: 18px;font-weight:bold;font-family: "Times New Roman", Times, serif">PHÒNG KHÁM ĐA KHOA MEDITEC</span> <br>
                            <span style="font-size: 18px;font-weight:bold;font-family: "Times New Roman", Times, serif">TRUNG TÂM CHẨN ĐOÁN HÌNH ẢNH</span><br>
                            <span style="font-size: 16px;font-weight:bold;font-family: "Times New Roman", Times, serif">52 Bà Triệu - Hoàn Kiếm - Hà Nội</span><br>
                            <span style="font-size: 16px;font-weight:bold;font-family: "Times New Roman", Times, serif">ĐT: 0439325252 - www.meditecclinic.com.vn</span>
                        </td>
                    </tr>
                </thead>
            </table>
            <table>
                <thead>
                    <tr>
                        <td style="vertical-align: middle;padding:20px 0px 0px 200px">
                            <span style="font-size: 18px;font-weight:bold;font-family: "Times New Roman", Times, serif">PHIẾU KẾT QUẢ CỘNG HƯỞNG TỪ</span> <br>
                        </td>
                    </tr>
                </thead>
            </table>
            <div style="padding: 0px 20px 10px 20px;">
                <table>
                    <thead>
                        <tr>
                            <td style="width:70%;padding-top:40px">
                                <span>Họ tên: <b style="font-weight:bold">{{$result[0]['tenbn']}}</b></span> <br>
                                <span>Ngày sinh: {{$result[0]['namsinh']}}</span> <br>
                                <span>Địa chỉ: {{$result[0]['namsinh']}}</span><br>
                                <span>Yêu cầu: <b style="font-weight:bold">{{$result[0]['yeucaudichvu']}}</b></span>
                            </td>
                            <td style="width:30%">
                                <span>Giới tính: {{$result[0]['gioitinh']}}</span> <br>
                                <span>Điện thoại: {{$result[0]['dienthoai']}}</span>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <table>
                <thead>
                    <tr>
                        <td style="vertical-align: middle;padding:20px 0px 0px 300px">
                            <span style="font-size: 16px;font-weight:bold;font-family: "Times New Roman", Times, serif"><b>KẾT LUẬN</b></span> <br>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div style="padding:10px 60px 0px 40px;">
        {!! $result[0]['noidunghtml'] !!}
        </div>
        <table>
              <thead>
                <tr>
                    <td align="center" style="width:40%">
                        <span style="font-weight:bold">Vui lòng quét QR để xem kết quả</span><br><br>
                        <span>{!! $result[0]['QR'] !!}</span>
                    </td>
                    <td style="width:20%">
                    </td>
                    <td align="center" style="width:40%;padding-left:50px">
                        <span> {{$result[0]['ngaychidinh']}} </span> <br>
                        <span style="font-weight:bold"> Bác sĩ chuyên khoa </span> <br>
                        <span></span> <br>
                        <span style="font-weight:bold"> Đã ký </span> <br>
                        <span></span> <br>
                        <span style="font-weight:bold"> Nguyễn Văn Test </span> <br>
                        <span></span> <br>
                        <span></span> <br>
                </tr>
            </thead>
        </table>
    </div>
    <script src="http://103.75.186.165:8080/clients/js/jquery.min.js"></script>
    <script src="http://103.75.186.165:8080/clients/js/bootstrap.bundle.min.js"></script>
    <script src="http://103.75.186.165:8080/clients/js/jquery.min.js"></script>
    <script src="http://103.75.186.165:8080/clients/js/templatemo.js"></script>
    <script src="http://103.75.186.165:8080/clients/js/custom.js"></script>
    <script src="http://103.75.186.165:8080/assets/js/plugins/chartjs.min.js"></script>
    <script type="text/javascript" src="http://103.75.186.165:8080/assets/ckeditor/ckeditor.js"></script>
</html>