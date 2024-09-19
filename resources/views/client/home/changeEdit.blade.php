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
                    <div class="col-md-5" style="border: 1px solid #90a0a5;padding:10px;">
                        <!-- <div class="row form-group" id="div_hinhthucgiai">
                            <span class="col-md-3 control-label required">Mã thể loại</span>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="" name="code_category" id="code_category"
                                    placeholder="Nhập mã thể loại..." />
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">ID phiếu</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}}" name="idchidinhct" id="idchidinhct" placeholder="Chọn ngày sinh..." />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">Ngày CD</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['ngaychidinh'])?$result[0]['ngaychidinh']:''}}" name="ngaychidinh" id="ngaychidinh" placeholder="Nhập Ngày CD..." />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">PID</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['pid'])?$result[0]['pid']:''}}" name="pid" id="pid"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">Tên BN</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['tenbn'])?$result[0]['tenbn']:''}}" name="tenbn" id="tenbn" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">Năm sinh</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['namsinh'])?$result[0]['namsinh']:''}}" name="namsinh" id="namsinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">Tuổi</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['tuoi'])?$result[0]['tuoi']:''}}" name="tuoi" id="tuoi" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Giới tính</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['gioitinh'])?$result[0]['gioitinh']:''}}" name="gioitinh" id="gioitinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required">Đối tượng</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['tendoituong'])?$result[0]['tendoituong']:''}}" name="tendoituong" id="tendoituong" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Tên CD</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['tenchidinh'])?$result[0]['tenchidinh']:''}}" name="tenchidinh" id="tenchidinh" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Khoa</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['ten_khoa'])?$result[0]['ten_khoa']:''}}" name="ten_khoa" id="ten_khoa" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Triệu chứng</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['trieuchung'])?$result[0]['trieuchung']:''}}" name="trieuchung" id="trieuchung" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Chuẩn đoán</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['chandoan'])?$result[0]['chandoan']:''}}" name="chandoan" id="chandoan" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <span for="example-text-input" class="form-control-label required"> Bác sĩ chỉ định</span>
                                        <input class="form-control" type="text" value="{{isset( $_SESSION["tennhanvien"])? $_SESSION["tennhanvien"]:''}}" name="bacsichidinh" id="bacsichidinh" />
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Lưu ý</span>
                                    <input class="form-control" type="text" value="" name="pid" id="pid" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Bác sĩ đọc KQ</span>
                                    <input class="form-control" type="text" value="{{isset($result[0]['BacSiDocKetQua'])?$result[0]['BacSiDocKetQua']:''}}" name="BacSiDocKetQua" id="BacSiDocKetQua" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label required"> Ngày duyệt</span>
                                    <input class="form-control" type="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31" name="ngayduyet" id="ngayduyet" />
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label"> Thiết bị</span>
                                <select style="" class="form-control input-sm chzn-select" name="idthietbi"
                                    id="idthietbi">
                                    @foreach($_SESSION["thietbi"] as $item)
                                        <option value="{{$item['idthietbi']}}">{{$item['tenthietbi']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label required"> Ghi chú</span>
                                <textarea style="height:80px" class="form-control required" placeholder="Ghi chú ..." name="ghichu" id="ghichu" value="{{isset($result[0]['ghichu'])?$result[0]['ghichu']:''}}" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label required"> Lời dặn bác sĩ chuyên khoa</span>
                                <textarea style="height:80px" class="form-control required" placeholder="Lời dặn bác sĩ chuyên khoa ..." name="loidanchuyenkhoa" id="loidanchuyenkhoa" value="{{isset($result[0]['loidanchuyenkhoa'])?$result[0]['loidanchuyenkhoa']:''}}" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7" style="display:flex">
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
                            <span onclick="JS_Home.update()" style="padding-right:50px;font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#234270" class="fas fa-pen-alt"></i> 
                                <span style="color:#000000"> Nhập</span>
                            </span>
                            <span onclick="JS_Home.check()" style="padding-right:50px;font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#234270" class="fas fa-check"></i> 
                                <span style="color:#000000"> Duyệt kết quả</span>
                            </span>
                            <span onclick="JS_Home.huyduyetketqua()" style="padding-right:50px;font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#234270" class="fas fa-times-circle"></i> 
                                <span style="color:#000000"> Hủy kết quả</span>
                            </span>
                            <span onclick="JS_Home.export('{{isset($result[0]['id'])?$result[0]['id']:''}}')" style="padding-right:50px;font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#234270" class="fas fa-print"></i> 
                                <span style="color:#000000"> In kết quả</span>
                            </span>
                            <span style="padding: 20px;">
                                <span for="example-text-input" style="font-size:20px" class="form-control-label"> Đã duyệt</span>
                                <input type="checkbox" style="width: 30px;height: 20px;" name="status" id="status" {{isset($datas->status) && $datas->status == 1 ? 'checked' : ''}}/>
                            </span>
                            <span>
                                <span for="example-text-input" style="font-size:20px"  class="form-control-label"> In chữ ký</span>
                                <input type="checkbox" style="width: 30px;height: 20px;" name="print_sign" id="print_sign"/>
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
        height : 500
    });
</script>