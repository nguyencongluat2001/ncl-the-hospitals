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
                            <!-- <span style="color: #000000;font-size: 20px;font-weight: 500;">Tìm kiếm thông tin</span> -->
                            <div class="row form-group pt-2">
                                 <div class="col-md-2" style="display:flex">
                                    <div style="padding-right:36px; padding-top:5px">
                                        PID
                                    </div>
                                    <div style="width:200px">
                                        <input style="" id="pid" name="pid" type="text" class="form-control" placeholder="PID tìm kiếm">
                                    </div>
                                 </div>
                                 <div class="col-md-2" style="display:flex">
                                    <div style="padding-right:20px; padding-top:5px">
                                       Tên BN
                                    </div>
                                    <div style="width:200px">
                                       <input style="" id="tenbn" name="tenbn" type="text" class="form-control" placeholder="Tên bệnh nhân">
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:flex">
                                    <div style="padding-right:55px; padding-top:5px">
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
                                 <div class="col-md-2" style="display:flex">
                                    <div style="padding-right:7px; padding-top:5px">
                                        Từ ngày
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="font-size: 16px;" type="date"id="tungay" name="tungay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-2" style="display:flex">
                                    <div style="padding-right:41px; padding-top:5px">
                                       Đến
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="font-size: 16px;" type="date"id="denngay" name="denngay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01" max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-4" style="display:flex">
                                    <div style="padding-right:33px; padding-top:5px">
                                      Nơi thực hiện
                                    </div>
                                    <div style="width:300px">
                                        <select style="" class="form-control input-sm chzn-select" name="idkhoathuchien"
                                            id="idkhoathuchien">
                                            @foreach($_SESSION["khoaphong"] as $item)
                                                <option value="{{$item['IdKhoa']}}">{{$item['TenKhoa']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row form-group pt-2">
                                 <div class="col-md-12" style="display:flex">
                                    <div style="padding-left:60px;width:560px">
                                        <input style="" id="pid" name="pid" type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                                    </div>
                                    <div style="padding-left:15px">
                                       <button onclick="JS_Home.loadList()" style="font-size: 10px;background:#00983e;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-search"></i> Tìm kiếm</button>
                                    </div>
                                 </div>
                            </div>
                            <div>
                                <!-- Màn hình danh sách -->
                                <div class="row" id="table-container" style=""></div>
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