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
                            <span style="width:50%">
                            <img style="width:60%;padding:20px 0px 0px 20px" class="card-img " src="http://103.75.186.165:8080/img/logo.png" alt="Card image">

                            <!-- <svg version="1.1" viewBox="0 0 2048 835" width="250" height="102" xmlns="http://www.w3.org/2000/svg">
                                <path transform="translate(241)" d="m0 0h7l13 9 28 16 24 15 32 19 23 14 15 10 40 24 22 14 20 12 23 14 16 10 19 12 15 9 42 26 28 17 26 16 47 29 17 10 22 14 18 11 22 13 16 10 6 4 4-2 11-16 20-32 15-29 13-29 10-21 3-2 4 6 10 26 11 31 10 35 6 30 4 30 2 28v31l-2 25-4 28-7 33-10 35-10 28-9 20-8 16-11 20-9 15-15 22-8 10-11 13-9 10-7 8-21 21-11 9-13 11-17 13-15 10-18 11-18 10-17 9-23 9-36 12-26 8-30 7h-2l3 8h-145l-1-3 17 1-1-5-18-4-29-7-27-8-29-10-22-10-22-12-21-12-22-15-32-26-20-18-7-8-6-7 4-2 25-1 26-3 41-6 41-8 32-8 39-12 36-12 23-8 3-3-6-2-20-8-36-13-22-9-23-10-25-12-35-18-23-13-21-13-28-19-11-8-18-14-13-10-13-11-14-12-15-14-17-16-17-17-7-8-11-12-9-11-12-14-11-14-14-18-5-5v-9h77l47 1 29 1 145 2 45 1 13 1 4 1-14-21-12-21-11-22-10-18-12-25-16-39-13-36-9-29-10-43-9-49-3-18z" fill="#149745"/>
                                <path transform="translate(241)" d="m0 0h7l13 9 28 16 24 15 32 19 23 14 15 10 40 24 22 14 20 12 23 14 16 10 19 12 15 9 42 26 28 17 26 16 47 29 17 10 22 14 18 11 22 13 24 15-3 3-12 2h-52l-109-3-61-1-31-1h-38l-54-2h-28l-15 1-8 3 1 8 7 12 9 13 10 13 7 8 5 5 12 14 11 13 8 9 5 4 7 8 16 16 8 7 11 9 13 12 11 8 10 8 11 8 15 11 14 10 9 7 4 4-1 7-9 8-14 10-17 11-7 4-12 8-16 8-23 12-34 17-16 7h-3l1-2-6-2-20-8-36-13-22-9-23-10-25-12-35-18-23-13-21-13-28-19-11-8-18-14-13-10-13-11-14-12-15-14-17-16-17-17-7-8-11-12-9-11-12-14-11-14-14-18-5-5v-9h77l47 1 29 1 145 2 45 1 13 1 4 1-14-21-12-21-11-22-10-18-12-25-16-39-13-36-9-29-10-43-9-49-3-18z" fill="#6BBB7A"/>
                                <path transform="translate(839,334)" d="m0 0h54l4 3-2 6 3 8 2 9 1 4 1 9v52l-2 16-1 6-1 4-1 16-3 17-3 6-5 22v10l-12 36-10 23-8 16-9 17-10 17-8 11-5 2h-8l-6 1-24 1-31 4-22 2h-13l-8 1-37 2h-27l-28-1-14-1-23-2-3-1-27-2-20-3-23-3-26-8-11-4-8-4 1-4 5-1v-2l12-7 9-5 10-4 17-8 9-6 8-5 10-7 4-1v-2l5-3 7-5h2v-2l9-6 9-7 4-5 2-8 4-2 2-5 10-7 8-7 11-9 3-1 2-4 10-7 3-3h2l2-4 5-5 6-5 19-19 8-7 8-8 4-5 8-7 5-7 4-2 5-7 5-5 8-9 2-3h2l3-6h2l2-4 9-12 10-13 8-12 5-6 7-6h2v-2l5-3 11-1z" fill="#087446"/>
                                <path transform="translate(1094,320)" d="m0 0h20l25 1 5 8 16 38 12 30 6 14 2 2 13-26 16-36 11-20 5-9 1-1h50l5-1h94l4 1 1 2v14l-2 13-3 1-5-5-5-8-5-3-5-1h-22l-6 2-1 2-1 9-1 32h28l6-3 7-12 5-4v24l-1 19-2 4-4-4-5-8-3-2-12-2-18-2v48l35 1 9-2 9-16 2-2 5 1 1 5-2 14-3 10-2 2-5 1-23 1h-60l-1-3 5-12 1-11v-86l-4-7-9-6-9-3-16 8-5 2-1 88 1 15 15 5 1 7-7 3-54-1 2-5 7-6 6-3 2-5v-81l-10 19-11 24-11 23-13 28-5 7h-5l-5-7-10-24-17-39-11-21-5-6v84l9 3 6 4 2 3-4 2-42 1-1-4 4-5 10-4h2v-85l1-7v-11l-5-4-8-4-2-2-1-5z" fill="#257E5C"/>
                                <path transform="translate(1396,320)" d="m0 0h37l64 1 10 2 9 6 9 11 8 16 3 11v25l-4 16-4 8-7 9-11 11-13 8-10 4-18 3-12 1h-54l1-6 4-9 1-99-2-4-9-7-2-4zm47 13-4 1-1 2-1 100 2 3h27l12-2 12-7 8-7 6-12 3-17v-23l-2-11-6-11-6-7-8-5-12-3-8-1z" fill="#257E5C"/>
                                <path transform="translate(1418,531)" d="m0 0 24 1 13 2 9 9 9 11 10 12 11 14 12 13 9 11 12 14 4 6-1-77-5-5-9-6-1-4 26-1h16l12 1-3 2-15 9-4 2-1 2-1 12-1 55v48l-2 3h-7l-8-5-19-19-9-11-11-13-22-28-9-11-9-10-2-2v86l10 3 5 5-1 5h-39l-3-3 1-6 12-6 2-102-2-4-8-4-6-5-1-3z" fill="#257E5C"/>
                                <path transform="translate(1281,320)" d="m0 0h94l4 1 1 2v14l-2 13-3 1-5-5-5-8-5-3-5-1h-22l-6 2-1 2-1 9-1 32h28l6-3 7-12 5-4v24l-1 19-2 4-4-4-5-8-3-2-12-2-18-2v48l35 1 9-2 9-16 2-2 5 1 1 5-2 14-3 10-2 2-5 1-23 1h-60l-1-3 5-12 1-11v-86l-4-7-9-6-9-3-17 8-3-6-3-5h25z" fill="#267E5C"/>
                                <path transform="translate(1744,320)" d="m0 0h105l1 1-1 16-2 13h-4l-7-10-4-4-7-2h-26l-3 1-2 9-1 22v12h33l3-10 6-5h3l1 3v17l-1 19-1 3h-5l-3-3-3-7v-3h-9l-24-2v48h41l5-1 3-10 6-8 3 1 1 3v19l-1 8-1 1-7 1h-73l-12-1 1-4 5-7 1-5 1-35v-57l-3-9-10-9-9-4z" fill="#257D5B"/>
                                <path transform="translate(1707,529)" d="m0 0h30l17 3 11 4 4 5 1 11-1 14-2 6-4-2-6-8-8-12-5-4-11-3h-18l-12 3-9 6-8 8-7 14-2 8v23l3 12 6 12 11 12 10 6 11 3 9 1h10l10-2 17-8h7l-1 6-7 9-8 6-9 3-6 1h-27l-17-3-13-5-11-7-11-11-9-14-4-15-1-9v-14l4-16 6-12 9-11 11-9 16-8z" fill="#257E5C"/>
                                <path transform="translate(1931,317)" d="m0 0h28l18 4 10 5 3 3v13l-3 14-2 5h-2l-13-21-6-5-8-3-6-1h-13l-13 3-11 6-7 7-6 10-4 13-1 17 2 14 5 12 8 11 8 6 10 5 12 3h22l12-4 14-7 5 1-2 6-11 12-12 6-8 2h-28l-20-4-16-8-9-7-11-14-7-15-2-7-1-8v-11l3-15 5-12 9-13 7-7 14-9 10-4z" fill="#267E5C"/>
                                <path transform="translate(1621,320)" d="m0 0h120l1 1v20l-2 11-3 1-5-4-6-11-5-3-5-1h-15l-3 2-1 4-1 15v31l1 52 16 6 1 1v5l-9 2h-42l-12-1v-4l4-4 11-5 1-10v-88l-4-4-5-1h-14l-5 2-9 15-5 3-3-5z" fill="#257E5C"/>
                                <path transform="translate(1158,529)" d="m0 0h29l16 3 9 6 3 3 2 6v11l-3 13-4-1-7-10-6-9-6-5-8-3h-23l-14 5-9 7-7 8-5 11-2 11v18l2 12 7 14 8 9 11 7 10 4 11 2h14l12-3 18-10 1 4-3 7-7 9-10 6-10 2h-24l-15-2-11-3-12-6-10-9-8-9-7-12-4-13-1-6v-21l3-12 6-12 8-10 9-8 11-7 9-4z" fill="#267E5C"/>
                                <path transform="translate(1225,531)" d="m0 0h11l12 1h39l2 4-6 5-9 5-2 3v101l39 1 4-2 7-18 3-3 5 1 1 1v8l-4 16-4 8-4 2h-46l-38-1 1-5 4-6 2-19v-85l-17-16z" fill="#257E5C"/>
                                <path transform="translate(1598,319)" d="m0 0h8l3 1-1 4-6 8-5 5-1 4v96l7 3 6 3 2 2v5l-2 2h-59l1-4 7-7 5-3 2-9 1-52v-36l-3-7-5-4-6-5-2-5z" fill="#257D5C"/>
                                <path transform="translate(1572,531)" d="m0 0 61 1-1 4-6 5-6 4-1 2-1 36v59l2 9 9 4 5 5v4l-2 1h-15l-13-1h-31l1-5 9-7 3-2 1-5 1-58v-38l-7-8-10-8z" fill="#257D5C"/>
                                <path transform="translate(1341,531)" d="m0 0 22 1h40v3l-8 7-7 5-1 2-1 14v67l1 18 4 4 10 5 2 2-1 4-10 2-19-1h-28l-2-1 1-5 3-3 10-5 1-77v-26l-17-10-1-5z" fill="#267E5C"/>
                                <path transform="translate(1835,363)" d="m0 0h3l1 3v17l-1 19-1 3h-5l-3-3-3-7v-3h-9l-11-1-2-2h2l-1-4-3-1 3-3-13-1 1-2h33l3-10z" fill="#4B9773"/>
                                <path transform="translate(1369,360)" d="m0 0h1v24l-1 19-2 4-4-4-5-8-3-2-12-2-1-2 3-1-4-8 11-1 6-3 7-12z" fill="#489472"/>
                                <path transform="translate(896,337)" d="m0 0 5 1 3 29 1 16v31l-2 25-4 28-7 33-5 18-2-4 3-17 4-12 2-5 3-22v-8l2-6 1-14 1-11v-46l-1-11-2-5-2-8-2-9h2z" fill="#2E855F"/>
                                <path transform="translate(1444,565)" d="m0 0h1v78l-4-4-5-9v-9l1-16 4-9 2-3z" fill="#489472"/>
                                <path transform="translate(1281,320)" d="m0 0h24v1l-9 1-3 5-2 4-5-2-9-4-3-1-17 8-3-6-3-5h25z" fill="#4E9B73"/>
                                <path transform="translate(1541,531)" d="m0 0h16l12 1-3 2-13 8-4-5-5-3h-14l-5 6-2 1-7-5-1-4z" fill="#4D9A73"/>
                                <path transform="translate(900,445)" d="m0 0h1v10l-5 27-6 26-3 10-2-4 3-17 4-12 2-5 3-22v-8z" fill="#2C835F"/>
                                <path transform="translate(1732,320)" d="m0 0h9l1 1v20l-2 11-3 1-5-4-3-7h6v-2l4-4 1-8v-6l-8-1z" fill="#499572"/>
                                <path transform="translate(1744,320)" d="m0 0h46v1l-24 1-1 5-1 7-7-6-8-5-5-2z" fill="#529F74"/>
                                <path transform="translate(1418,531)" d="m0 0 24 1v1l-7 1-3 5-1 4-5-1-9-7-1-3z" fill="#4C9973"/>
                                <path transform="translate(1833,378)" d="m0 0h5v12l-2 4-7 1-2-3 1-5 4-8z" fill="#237C5B"/>
                                <path transform="translate(1341,531)" d="m0 0 22 1v1l-7 2-2 3 1 6-6-2-8-5-1-5z" fill="#4C9873"/>
                                <path transform="translate(1251,321)" d="m0 0h15l5 1-2 4-12 6-3-6z" fill="#479372"/>
                                <path transform="translate(1396,320)" d="m0 0h37v1l-24 1-2 3h-2l-1 6-5-3-3-5z" fill="#4B9873"/>
                                <path transform="translate(1225,531)" d="m0 0h11l12 1v1h-7l-2 4-2 5-5-3-7-7z" fill="#4C9873"/>
                                <path transform="translate(1515,532)" d="m0 0h29v1l-14 1-5 6-2 1-7-5z" fill="#479372"/>
                                <path transform="translate(1325,628)" d="m0 0 5 1 1 1v8l-2 2v-2l-5-1-3-2 2-6z" fill="#4B9773"/>
                                <path transform="translate(1847,338)" d="m0 0h1v8l-2 5-4-2-5-8 6-1z" fill="#4C9873"/>
                                <path transform="translate(1550,320)" d="m0 0h25v1l-15 1-2 7-4-2-4-5z" fill="#499572"/>
                                <path transform="translate(1598,532)" d="m0 0h35l-1 4-5 4-2-4-4-2-23-1z" fill="#4F9C74"/>
                                <path transform="translate(1391,532)" d="m0 0h12v3l-7 6-3-4z" fill="#4B9873"/>
                                <path transform="translate(1368,341)" d="m0 0 8 1 3-1-1 9-3 1-5-5z" fill="#4F9D74"/>
                                <path transform="translate(1598,319)" d="m0 0h8l3 1-1 4-4 6-2-3-2-6-3-1z" fill="#4E9B74"/>
                                <path transform="translate(1621,320)" d="m0 0h30v1l-28 1v28h-1z" fill="#60AF77"/>
                                <path transform="translate(1572,531)" d="m0 0h10l4 2-5 3-2 4-8-7z" fill="#4F9C74"/>
                                <path transform="translate(857,197)" d="m0 0 4 4 1 5h-9l-1 3-1-2 5-9z" fill="#6BBB7A"/>
                                <path transform="translate(902,425)" d="m0 0 2 1-2 21-3-3 1-14z" fill="#2D8460"/>
                                <path transform="translate(900,445)" d="m0 0h1v10l-2 12h-2v-17z" fill="#2A825E"/>
                                <path transform="translate(1357,384)" d="m0 0h3l2 3v5l-5 1-3-2 1-6z" fill="#237C5B"/>
                                <path transform="translate(1848,419)" d="m0 0 3 1 1 6-8 1v2h-2l2-5z" fill="#4E9B73"/>
                                <path transform="translate(1214,562)" d="m0 0h2l-2 9-4-1-3-5z" fill="#4C9973"/>
                                <path transform="translate(395,832)" d="m0 0h18v3h-17z" fill="#6BBB7A"/>
                                <path transform="translate(1732,320)" d="m0 0h9l1 1v20h-1l-1-19-8-1z" fill="#61AF77"/>
                                <path transform="translate(1094,320)" d="m0 0h20v1l-17 1-1 5-2-1-1-5z" fill="#55A375"/>
                                <path transform="translate(1266,321)" d="m0 0h14l-2 1 1 3-5-1-5 1 1-2z" fill="#6BBB7A"/>
                                <path transform="translate(1764,561)" d="m0 0h4v6l-2 1-3-2z" fill="#149745"/>
                                <path transform="translate(1270,532)" d="m0 0h17l2 4-2 1-3-3-14-1z" fill="#61B077"/>
                                <path transform="translate(1264,441)" d="m0 0 4 1 1 7-2 1-3-6z" fill="#4D9A73"/>
                                <path transform="translate(384,832)" d="m0 0h3l1 3h-3z" fill="#6BBB7A"/>
                                <path transform="translate(542,834)" d="m0 0h6v1h-6z" fill="#6BBB7A"/>
                                <path transform="translate(391,833)" d="m0 0h2v2h-2z" fill="#6BBB7A"/>
                                <path transform="translate(1413,532)" d="m0 0" fill="#6BBB7A"/>
                                </svg>
                            </span> -->
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
        <div style="padding:10px 60px 0px 40px">
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
                        <span style="font-weight:bold"> {{$result[0]['ngaychidinh']}} </span> <br>
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