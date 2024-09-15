<style>
    
    .unit-edit span {
        font-size: 19px;
    }

    #frmAdd .modal-dialog {
        max-width: none !important
    }

    /* @media (min-width: 1200px) {
        .modal-xl {
            padding-left: 20%;
            --bs-modal-width: 1740px !important;
        }
    } */

    .modal.show .modal-dialog {
        transform: none;
    }
    #frmAdd table input[type=number]::-webkit-inner-spin-button, 
    #frmAdd table input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    .modal-body{
        padding:0px 10px 10px 10px;
    }
</style>

<form id="frmAdd" role="form" action="" method="POST" enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" id="id" value="{{isset($result[0]['id'])?$result[0]['id']:''}}">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content card">
            <div class="modal-header" style="padding:4px">
                <h5 class="modal-title">Thông tin chỉ định chi tiết</h5>
                <button type="button" class="btn btn-sm" data-bs-dismiss="modal" style="margin-bottom: 0rem !important;background: red;color:white">
                <i class="fas fa-arrow-left"></i> Thoát
                </button>
            </div>
            <input  style="display:none" id="idvungkhaosat" name="idvungkhaosat" type="text" value="{{isset($result[0]['idvungkhaosat'])?$result[0]['idvungkhaosat']:''}}" class="form-control">
            <input  style="display:none" id="denghi" name="denghi" type="text" value="{{isset($result[0]['denghi'])?$result[0]['denghi']:''}}" class="form-control">
            <input  style="display:none" id="yeucaudichvu" name="yeucaudichvu" type="text" value="{{isset($result[0]['yeucaudichvu'])?$result[0]['yeucaudichvu']:''}}" class="form-control">
            <input  style="display:none" id="noidung" name="noidung" type="text" value="{{isset($result[0]['noidung'])?$result[0]['noidung']:''}}" class="form-control">
            <input  style="display:none" id="noidungrtf" name="noidungrtf" type="text" value="{{isset($result[0]['noidungrtf'])?$result[0]['noidungrtf']:''}}" class="form-control">
            <input  style="display:none" id="mauketquabc" name="mauketquabc" type="text" value="{{isset($result[0]['mauketquabc'])?$result[0]['mauketquabc']:''}}" class="form-control">
            <input  style="display:none" id="ketluan" name="ketluan" type="text" value="{{isset($result[0]['ketluan'])?$result[0]['ketluan']:''}}" class="form-control">
            <input  style="display:none" id="Document_Name" name="Document_Name" type="text" value="{{isset($result[0]['Document_Name'])?$result[0]['Document_Name']:''}}" class="form-control">
            <input  style="display:none" id="idbacsidocketqua" name="idbacsidocketqua" type="text" value="{{isset($_SESSION["idnhanvien"])?$_SESSION["idnhanvien"]:''}}" class="form-control">
            <div class="modal-body pt-1">
                <div class="row form-group" style="padding: 0px 10px 10px 10px;">
                    <div class="col-md-4" style="border: 1px solid #90a0a5;padding:10px;background:#f3f3ff">
                        <div style="display:flex">
                            <div style="padding-right:49px">
                                ID phiếu
                            </div>
                            <div style="padding-right:5px;width:29%">
                                <input style="" id="idchidinhct" name="idchidinhct" type="text" value="{{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}}" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Ngày CD
                            </div>
                            <div style="padding-right:5px;width:30%">
                                <input style="" id="ngaychidinh" name="ngaychidinh" type="text" value="{{isset($result[0]['ngaychidinh'])?$result[0]['ngaychidinh']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:81px">
                                PID
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="pid" name="pid" type="text" value="{{isset($result[0]['pid'])?$result[0]['pid']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:59px">
                                Tên BN
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="tenbn" name="tenbn" type="text" value="{{isset($result[0]['tenbn'])?$result[0]['tenbn']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:40px">
                                Đối tượng
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="tendoituong" name="tendoituong" type="text" value="{{isset($result[0]['tendoituong'])?$result[0]['tendoituong']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:45px">
                                Năm sinh
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="namsinh" name="namsinh" type="text" value="{{isset($result[0]['namsinh'])?$result[0]['namsinh']:''}}" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Tuổi
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="tuoi" name="tuoi" type="text" value="{{isset($result[0]['tuoi'])?$result[0]['tuoi']:''}}" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Giới tính
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="gioitinh" name="gioitinh" type="text" value="{{isset($result[0]['gioitinh'])?$result[0]['gioitinh']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:61px">
                                Tên CD
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="tenchidinh" name="tenchidinh" type="text" value="{{isset($result[0]['tenchidinh'])?$result[0]['tenchidinh']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:75px">
                                Khoa
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="ten_khoa" name="ten_khoa" type="text" value="{{isset($result[0]['ten_khoa'])?$result[0]['ten_khoa']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:35px">
                                Triệu chứng
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="trieuchung" name="trieuchung" type="text" value="{{isset($result[0]['trieuchung'])?$result[0]['trieuchung']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:31px">
                                Chuẩn đoán
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="chandoan" name="chandoan" type="text" value="{{isset($result[0]['chandoan'])?$result[0]['chandoan']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:20px">
                                Bác sĩ chỉ định
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="bacsichidinh" name="bacsichidinh" type="text" value="{{isset( $_SESSION["tennhanvien"])? $_SESSION["tennhanvien"]:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:75px">
                                Lưu ý
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:24px">
                                Bác sĩ đọc KQ
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="BacSiDocKetQua" name="BacSiDocKetQua" type="text" value="{{isset($result[0]['BacSiDocKetQua'])?$result[0]['BacSiDocKetQua']:''}}" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:37px">
                                Ngày duyệt
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <input style="" id="ngayduyet" name="ngayduyet" type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:61px">
                                Thiết bị
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <select style="" class="form-control input-sm chzn-select" name="idthietbi"
                                    id="idthietbi">
                                    @foreach($_SESSION["thietbi"] as $item)
                                        <option value="{{$item['idthietbi']}}">{{$item['tenthietbi']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:60px">
                                Ghi chú
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <textarea style="height:80px" class="form-control required" placeholder="Ghi chú ..." name="ghichu" id="ghichu" value="{{isset($result[0]['ghichu'])?$result[0]['ghichu']:''}}" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:10px;font-size: 20px;font-weight: 700;">
                                Đã duyệt
                            </div>
                            <div style="padding:7px 0px 0px 0px;width: 70%;">
                                <input type="checkbox" name="status" id="status" {{isset($datas->status) && $datas->status == 1 ? 'checked' : ''}}/>
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:10px;font-size: 20px;font-weight: 700;">
                                In chữ ký
                            </div>
                            <div style="padding:7px 0px 0px 0px;width: 70%;">
                                <input type="checkbox" name="print_sign" id="print_sign"/>
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="width:21%">
                                Lời dặn bác sĩ chuyên khoa
                            </div>
                            <div style="padding-right:5px;width: 70%;">
                                <textarea style="height:80px" class="form-control required" placeholder="Lời dặn bác sĩ chuyên khoa ..." name="loidanchuyenkhoa" id="loidanchuyenkhoa" value="{{isset($result[0]['loidanchuyenkhoa'])?$result[0]['loidanchuyenkhoa']:''}}" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8" style="display:flex">
                        <div class="form-group" style="width:100%">
                            <div style="display:flex">
                                <div style="padding-right:50px">
                                    Vùng khảo sát
                                </div>
                                <div style="padding-right:5px;width: 80%;">
                                    <select style="" class="form-control input-sm chzn-select" name="idvungkhaosat"
                                        id="idvungkhaosat">
                                        @foreach($_SESSION["vungkhaosat"] as $item)
                                            <option 
                                            @if((isset($_SESSION["vungkhaosat"]) && $item['idvungkhaosat'] == $result[0]['idvungkhaosat'])) selected @endif
                                            value="{{$item['idvungkhaosat']}}">{{$item['Ten_Vung_KSat']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <span >
                                <button id='btn_create' style="font-size: 15px;background:#8d8bff" class="btn btn-success shadow-sm" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-book-medical"></i> <span style="color:#ffffff">Lưu lại</span></button>
                            </span>
                            <span>
                                <button id='btn_examine' style="font-size: 15px;background:#48e120" class="btn btn-success shadow-sm" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-check"></i> <span style="color:#ffffff">Duyệt kết quả</span></button>
                            </span>
                            <span>
                                <button id='btn_close' style="font-size: 15px;background:#ffa0a0" class="btn btn-success shadow-sm" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-exclamation"></i> <span style="color:#ffffff">Hủy kết quả</span></button>
                            </span>
                            <span>
                                <button id='btn_close' style="font-size: 15px;background:#ffb300" class="btn btn-success shadow-sm" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-print"></i> <span style="color:#ffffff">In kết quả</span></button>
                            </span>
                            <textarea class="form-control" type="text" name="decision" id="decision" placeholder="Nhập nội dung...">{{isset($result[0]['noidunghtml'])?$result[0]['noidunghtml']:''}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</form>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#show_img').attr('src', e.target.result).width(150);
            };
            $("#show_img").removeAttr('hidden');

            reader.readAsDataURL(input.files[0]);
        }
    }
    <?php
        $url = url('system/blog/uploadFileCK?_token=') . csrf_token();
    ?>
    var url = '{{ $url }}';
    CKEDITOR.replace('decision', {
        filebrowserUploadUrl: url,
        filebrowserUploadMethod: 'form',
        height : 700
    });
</script>