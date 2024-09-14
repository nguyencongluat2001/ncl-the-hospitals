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
    <input type="hidden" name="id" id="id" value="{{isset($datas->id)?$datas->id:''}}">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content card">
            <div class="modal-header" style="padding:4px">
                <h5 class="modal-title">Thông tin chỉ định chi tiết</h5>
                <button type="button" class="btn btn-sm" data-bs-dismiss="modal" style="margin-bottom: 0rem !important;background: red;color:white">
                    X
                </button>
            </div>
            
            <div class="modal-body pt-1">
                <div class="row form-group">
                    <div class="col-md-4">
                        <div style="display:flex">
                            <div style="padding-right:49px">
                                ID phiếu
                            </div>
                            <div style="padding-right:5px;width:40%">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Ngày CD
                            </div>
                            <div style="padding-right:5px;width:30%">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:81px">
                                PID
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:59px">
                                Tên BN
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:40px">
                                Đối tượng
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:45px">
                                Năm sinh
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Tuổi
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                            <div style="padding-right:5px">
                                Giới tính
                            </div>
                            <div style="padding-right:5px;width:80px">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:61px">
                                Tên CD
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:75px">
                                Khoa
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:35px">
                                Triệu chứng
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:31px">
                                Chuẩn đoán
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:47px">
                                Giới thiệu
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:20px">
                                Bác sĩ chỉ định
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:75px">
                                Lưu ý
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:24px">
                                Bác sĩ đọc KQ
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:37px">
                                Ngày duyệt
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:61px">
                                Thiết bị
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                        <div style="display:flex;padding-top:10px">
                            <div style="padding-right:60px">
                                Ghi chú
                            </div>
                            <div style="padding-right:5px;width: 80%;">
                                <input style="" id="pid" name="pid" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8" style="display:flex">
                        <div class="form-group">
                            <span id="btupdate">
                                <button id='btn_create' class="btn btn-primary btn-sm" type="button">
                                    Lưu lại
                                </button>
                            </span>
                            <span id="btupdate">
                                <button id='btn_create' class="btn btn-primary btn-sm" type="button">
                                    Duyệt kết quả
                                </button>
                            </span>
                            <span id="btupdate">
                                <button id='btn_create' class="btn btn-primary btn-sm" type="button">
                                    Hủy kết quả
                                </button>
                            </span>
                            <textarea class="form-control" type="text" name="decision" id="decision" placeholder="Nhập nội dung...">{{!empty($data['decision'])?$data['decision']:''}}</textarea>
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