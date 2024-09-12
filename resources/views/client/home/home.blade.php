@extends('client.layouts.index')
@section('body-client')
    <div class="container-fluid">
        <div class="row">
            <form action="" method="POST" id="frmHome_index">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <section class="content-wrapper">
                    <div class="panel panel-default">
                        <div class="panel-body" style="padding:20px">
                            <span style="color: #000000;font-size: 20px;font-weight: 500;">Tìm kiếm thông tin</span>
                            <div class="row form-group pt-2">
                                 <div class="col-md-3" style="display:flex">
                                    <div class="pt-1" style="padding-right:36px">
                                        PID
                                    </div>
                                    <div style="width:200px">
                                        <input id="pid" name="pid" type="text" class="form-control" placeholder="PID tìm kiếm...">
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:flex">
                                    <div class="pt-1" style="padding-right:5px">
                                       Tên bệnh nhân
                                    </div>
                                    <div style="width:200px">
                                       <input id="tenbn" name="tenbn" type="text" class="form-control" placeholder="Tên bệnh nhân...">
                                    </div>
                                 </div>
                                 <div class="col-md-6" style="display:flex">
                                    <div class="pt-1" style="padding-right:5px">
                                       Mã kiểu dịch vụ
                                    </div>
                                    <div style="width:400px">
                                        <select class="form-control input-sm chzn-select" name="cate"
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
                                    <div class="pt-1" style="padding-right:5px">
                                        Từ ngày
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="height:37px;font-size: 13px;" type="date"id="tungay" name="tungay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01"max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:flex">
                                    <div class="pt-1" style="padding-right:41px">
                                       Đến ngày
                                    </div>
                                    <div style="width:200px">
                                        <input class="form-control input-sm" style="height:37px;font-size: 13px;" type="date"id="denngay" name="denngay" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01" max="2030-12-31">
                                    </div>
                                 </div>
                                 <div class="col-md-6" style="display:flex">
                                    <div class="pt-1" style="padding-right:47px">
                                       Trạng thái
                                    </div>
                                    <div style="width:400px">
                                        <select class="form-control input-sm chzn-select" name="cate"
                                            id="cate">
                                            {{--@foreach($data['cate'] as $item)
                                                <option value="{{$item['code_cate']}}">{{$item['name']}}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <div class="row form-group pt-2">
                                 <div class="col-md-12" style="display:flex">
                                    <div class="pt-1" style="padding-right:5px">
                                        Nơi thực hiện
                                    </div>
                                    <div style="width:50%">
                                        <select class="form-control input-sm chzn-select" name="idkhoathuchien"
                                            id="idkhoathuchien">
                                            {{--@foreach($data['idkhoathuchien'] as $item)
                                                <option value="{{$item['code_cate']}}">{{$item['name']}}</option>
                                            @endforeach--}}
                                        </select>
                                    </div>
                                 </div>
                            </div>
                            <!-- Màn hình danh sách -->
                            <div class="row" id="table-container" style="padding-top:10px"></div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
    <div class="modal fade" id="editmodalCategory" role="dialog"></div>
    <div class="modal " id="addfile" role="dialog"></div>

    <div id="dialogconfirm"></div>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    console.log(123)
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
</script>
@endsection
<!-- <div class="input-group" style="width:40%;height:10%">
                                    <input id="search" name="search" type="text" class="form-control" placeholder="Từ khóa tìm kiếm...">
                                </div>
                                <button style="width:8%" id="txt_search" name="txt_search" type="button" class="btn btn-dark"><i class="fas fa-search"></i></button> -->