
<form id="frmView" role="form" action="" method="POST" enctype="multipart/form-data" >
    <div id="htmlView">
        <style>
            
            .unit-edit span {
                font-size: 19px;
            }

            /* #frmView .modal-dialog {
                max-width: none !important
            } */

            /* @media (min-width: 1200px) {
                .modal-xl {
                    padding-left: 20%;
                    --bs-modal-width: 1740px !important;
                }
            } */

            .modal.show .modal-dialog {
                transform: none;
            }
            #frmView table input[type=number]::-webkit-inner-spin-button, 
            #frmView table input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
            .modal-body{
                padding:0px 10px 10px 10px;
            }
            /* .modal-dialog{
                margin:0px !important;
            } */
            span{
                font-family: "Times New Roman", Times, serif;
            }
        </style>
        @csrf
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" id="id" value="{{isset($result[0]['id'])?$result[0]['id']:''}}">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content card">
                <div class="modal-header" style="padding:4px">
                    <h5 class="modal-title">Xem trươc phiếu In</h5>
                    <button class="btn btn-sm" style="background:#ededed" data-bs-dismiss="modal" onclick="JS_Home.close()">
                    x
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <div style="padding: 0px 10px 10px 10px;display:flex">
                        <div style="width:50%;">
                            <img style="width:60%;padding:20px 0px 0px 20px" class="card-img " src="http://103.75.186.165:8080/logo.png" alt="Card image">
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
                                <span><b>Vui lòng quét QR để xem kết quả</b></span> <br>
                                <span style="padding-left:50px">{!! $result[0]['QR'] !!}</span>
                            </div>
                            <div class="col-md-6" style="">
                                <center>
                                <span> <b>{{$result[0]['ngaychidinh']}}</b> </span> <br>
                                <span> <b>Bác sĩ chuyên khoa</b> </span> <br>
                                <span> <b>Đã ký</b> </span> <br>
                                <span> <b>Nguyễn Văn Test</b> </span> <br>
                                </center>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button class="btn btn-sm" style="background:#ededed" data-bs-dismiss="modal" onclick="JS_Home.print({{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}})">
                    Xuất PDF
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>