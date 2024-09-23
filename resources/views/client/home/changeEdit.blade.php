<style>
    
    .unit-edit span {
        font-size: 19px;
    }

    /* #frmAdd .modal-dialog {
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
    #frmAdd table input[type=number]::-webkit-inner-spin-button, 
    #frmAdd table input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    /* .modal-body{
        padding:0px 10px 10px 10px;
    } */
    .modal-xl {
        --bs-modal-width: 1400px;
    }
    .form-control:disabled, .form-control[readonly] {
    background-color: #ffffff;
    opacity: 1;
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
                            <span class="col-md-3 control-label ">Mã thể loại</span>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="" name="code_category" id="code_category"
                                    placeholder="Nhập mã thể loại..." />
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">ID phiếu</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}}" name="idchidinhct" id="idchidinhct" placeholder="Chọn ngày sinh..." />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">Ngày CD</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['ngaychidinh'])?$result[0]['ngaychidinh']:''}}" name="ngaychidinh" id="ngaychidinh" placeholder="Nhập Ngày CD..." />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">PID</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['pid'])?$result[0]['pid']:''}}" name="pid" id="pid"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">Tên BN</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['tenbn'])?$result[0]['tenbn']:''}}" name="tenbn" id="tenbn" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">Năm sinh</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['namsinh'])?$result[0]['namsinh']:''}}" name="namsinh" id="namsinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">Tuổi</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['tuoi'])?$result[0]['tuoi']:''}}" name="tuoi" id="tuoi" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Giới tính</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['gioitinh'])?$result[0]['gioitinh']:''}}" name="gioitinh" id="gioitinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label ">Đối tượng</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['tendoituong'])?$result[0]['tendoituong']:''}}" name="tendoituong" id="tendoituong" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Tên CD</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['tenchidinh'])?$result[0]['tenchidinh']:''}}" name="tenchidinh" id="tenchidinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Khoa</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['ten_khoa'])?$result[0]['ten_khoa']:''}}" name="ten_khoa" id="ten_khoa" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Bác sĩ chỉ định</span>
                                    <input disabled class="form-control" type="text" value="{{isset( $_SESSION["tennhanvien"])? $_SESSION["tennhanvien"]:''}}" name="bacsichidinh" id="bacsichidinh" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Triệu chứng</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['trieuchung'])?$result[0]['trieuchung']:''}}" name="trieuchung" id="trieuchung" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Chuẩn đoán</span>
                                    <input disabled class="form-control" type="text" value="{{isset($result[0]['chandoan'])?$result[0]['chandoan']:''}}" name="chandoan" id="chandoan" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Ngày duyệt</span>
                                    <input disabled class="form-control" type="text" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31" name="ngayduyet" id="ngayduyet" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span for="example-text-input" class="form-control-label "> Lưu ý</span>
                                    <input class="form-control" type="text" value="" name="pid" id="pid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label "> Lời dặn bác sĩ chuyên khoa</span>
                                <textarea style="height:40px" class="form-control " placeholder="Lời dặn bác sĩ chuyên khoa ..." name="loidanchuyenkhoa" id="loidanchuyenkhoa" value="{{isset($result[0]['loidanchuyenkhoa'])?$result[0]['loidanchuyenkhoa']:''}}" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label "> Đã duyệt</span>
                                <input type="checkbox" disabled style="width: 15px;height: 15px;" name="status" id="status" {{$result[0]['da_kqua'] == 3 ? 'checked' : ''}}/>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <span for="example-text-input" class="form-control-label "> In chữ ký</span>
                                <input type="checkbox" style="width: 15px;height: 15px;" name="print_sign" id="print_sign"/>
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
                                    <select onchange="JS_Home.getvungkhaosatbyid()" style="" class="form-control input-sm chzn-select" name="idvungkhaosat"
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
                            <div id="button_change">
                                <span>
                                    @if($result[0]['da_kqua'] == 0 || $result[0]['da_kqua'] == 1 || $result[0]['da_kqua'] == 2)
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">
                                        <button onclick="JS_Home.luuchidinh({{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}})" style="font-size: 14px;background:#0c3a55;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-pen-alt"></i> Lưu KQ</button>
                                    </span>
                                    @else
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">
                                        <button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-pen-alt"></i> Lưu KQ</button>
                                    </span>
                                    @endif
                                </span>
                               <span>
                                    @if($result[0]['da_kqua'] == 0 || $result[0]['da_kqua'] == 1 || $result[0]['da_kqua'] == 2)
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button onclick="JS_Home.duyetketqua({{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}})" style="font-size: 14px;background:#36ac05;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-check"></i> Duyệt KQ</button>
                                    </span>
                                    @else
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">
                                        <button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-pen-alt"></i> Duyệt KQ</button>
                                    </span>
                                    @endif
                                   
                               </span>
                               <span>
                                    @if($result[0]['da_kqua'] == 3)
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button onclick="JS_Home.huyduyetketqua({{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}})" style="font-size: 14px;background:red;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-times-circle"></i> Hủy KQ</button>
                                    </span>
                                    @else
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-times-circle"></i> Hủy KQ</button>
                                    </span>
                                    @endif
                               </span>
                                <span>
                                    @if($result[0]['da_kqua'] == 3)
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button onclick="JS_Home.export({{isset($result[0]['idchidinhct'])?$result[0]['idchidinhct']:''}},2)" style="font-size: 14px;background:#ffad25;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-print"></i> In KQ</button>
                                    </span>
                                    @else
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-print"></i> In KQ</button>
                                    </span>
                                    @endif
                                </span>
                                <span>
                                    <span style="padding-right:20px;font-size: 15px;cursor:pointer"data-toggle="tooltip">
                                        <button onclick="JS_Home.openLink('{{isset($result[0]['pacslink'])?$result[0]['pacslink']:''}}')" style="font-size: 14px;background:#62bddd;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-eye"></i> Xem</button>
                                    </span>
                                </span>
                            </div>
                            
                            <textarea class="form-control" type="text" name="decision" id="decision">
                                    {{isset($result[0]['noidunghtml'])?$result[0]['noidunghtml']:''}}
                            </textarea>
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
        height : 400
    });
</script>