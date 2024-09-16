@extends('client.layouts.index')
@section('body-client')
<style>
    body{
        font-size:14px;
    }
</style>
    <div class="container-fluid">
        <div class="row">
            <form action="" method="POST" id="frmHome_index">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <section class="content-wrapper">
                    <div class="panel panel-default">
                        <div class="panel-body pt-1">
                            <span style="color: #000000;font-size: 20px;font-weight: 500;">Tìm kiếm thông tin</span>
                            <div class="row form-group pt-2">
                                 <div class="col-md-3" style="display:flex">
                                    <div style="padding-right:36px; padding-top:5px">
                                        PID
                                    </div>
                                    <div style="width:200px">
                                        <input style="" id="pid" name="pid" type="text" class="form-control" placeholder="PID tìm kiếm">
                                    </div>
                                 </div>
                                 <div class="col-md-4" style="display:flex">
                                    <div style="padding-right:9px; padding-top:5px">
                                       Tên bệnh nhân
                                    </div>
                                    <div style="width:200px">
                                       <input style="" id="tenbn" name="tenbn" type="text" class="form-control" placeholder="Tên bệnh nhân">
                                    </div>
                                 </div>
                                 <div class="col-md-5" style="display:flex">
                                    <div style="padding-right:10px; padding-top:5px">
                                       Mã kiểu dịch vụ
                                    </div>
                                    <div style="width:300px">
                                        <select style="" class="form-control input-sm chzn-select" name="cate"
                                            id="cate">
                                            {{--@foreach($data['cate'] as $item)
                                                <option value="{{$item['code_cate']}}">{{$item['name']}}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row form-group pt-2">
                                 <div class="col-md-3" style="display:flex">
                                    <div style="padding-right:7px; padding-top:5px">
                                        Từ ngày
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="font-size: 16px;" type="date"id="tungay" name="tungay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-4" style="display:flex">
                                    <div style="padding-right:41px; padding-top:5px">
                                       Đến ngày
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="font-size: 16px;" type="date"id="denngay" name="denngay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01" max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-5" style="display:flex">
                                    <div style="padding-right:47px; padding-top:5px">
                                       Trạng thái
                                    </div>
                                    <div style="width:300px">
                                        <select style="" class="form-control input-sm chzn-select" name="trangthai"
                                            id="trangthai">
                                            @foreach($_SESSION["trangthai"] as $item)
                                                <option value="{{$item['idtrangthai']}}">{{$item['tentrangthai']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row form-group pt-2">
                                 <div class="col-md-12" style="display:flex">
                                    <div style="padding-right:5px; padding-top:5px">
                                        Nơi thực hiện
                                    </div>
                                    <div style="width:50%">
                                        <select style="" class="form-control input-sm chzn-select" name="idkhoathuchien"
                                            id="idkhoathuchien">
                                            @foreach($_SESSION["khoaphong"] as $item)
                                                <option value="{{$item['IdKhoa']}}">{{$item['TenKhoa']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div style="padding-left:20px;padding-right:20px">
                                        <div style="width: 50px;background: #fcff12;"> &nbsp;
                                        </div>
                                    </div>
                                    <div style="padding-right:5px;">
                                        Đang thực hiện
                                    </div>

                                    <div style="padding-left:20px;padding-right:20px">
                                        <div style="width: 50px;background: #15fc00;"> &nbsp;
                                        </div>
                                    </div>
                                    <div style="padding-right:5px;">
                                        Đã lưu kết quả
                                    </div>

                                    <div style="padding-left:20px;padding-right:20px">
                                        <div style="width: 50px;background: #3ce3d1;"> &nbsp;
                                        </div>
                                    </div>
                                    <div style="padding-right:5px;">
                                        Đã kết quả
                                    </div>
                                 </div>
                            </div>
                            <div style="background:#c1c8d030">
                                <div class="breadcrumb-input-right pt-2" style="padding-left:10px">
                                        <button style="font-size: 10px;" class="btn btn-success shadow-sm" id="btn_update" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-plus"></i></button> <span style="padding-right: 30px;font-size: 15px;font-weight: 600;">Nhập kết quả</span>
                                        <button style="font-size: 10px;background: #ff2e2e;" class="btn btn-danger shadow-sm" id="btn_delete" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-exclamation"></i></i></button> <span style="padding-right: 30px;font-size: 15px;font-weight: 600;">Hủy nhập kết quả</span>
                                        <button style="font-size: 10px;background: #5fe000;" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i class="fas fa-reply"></i></i></button> <span style="padding-right: 30px;font-size: 15px;font-weight: 600;">Chuyển nơi thực hiện</span>
                                        <button style="font-size: 10px;" class="btn btn-warning shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i class="far fa-file-excel"></i></i></button> <span style="padding-right: 30px;font-size: 15px;font-weight: 600;">Xuất Excel</span>
                                        <button style="font-size: 10px;background:#a1ebff" class="btn  shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i class="fas fa-print"></i></button> <span style="padding-right: 30px;font-size: 15px;font-weight: 600;">In kết quả (F4)</span>
                                </div>
                                <!-- Màn hình danh sách -->
                                <div class="row" id="table-container" style="padding-top:10px"></div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <div class="modal fade" id="editmodal" role="dialog"></div>
    <div class="modal " id="export" role="dialog"></div>
    <div id="dialogconfirm"></div>

<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
</script>
@endsection