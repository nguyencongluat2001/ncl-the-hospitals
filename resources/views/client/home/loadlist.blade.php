<style>
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 5px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
.scrollbar {
    margin-left: 30px;
    /* float: left; */
    height: 1000px;
    /* width: 65px; */
    /* background: #F5F5F5; */
    overflow-y: scroll;
    margin-bottom: 25px;
  }

  .force-overflow {
    min-height: 1000px;
  }

  #wrapper {
    text-align: center;
    width: 500px;
    margin: auto;
  }

  /*
    *  STYLE 2
    */

  #style-2::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
  }

  #style-2::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }

  #style-2::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color: #D62929;
  }
  .table {
    border-color: #9a9a9a;
    background-image:none;
  }

  .table-responsive.pmd-card.pmd-z-depth {
    height: 100%;
    max-height: 800px;
  }

  #style-1 #table-data thead tr td {
    position: sticky;
    top: 0;
    background: #c7d8ed;
  }

  #frmLoadlist_signal .blur {
    /* opacity: 0.2; */
    border-color: rgba(0, 0, 0, 0.2);
  }
  .table-responsive {
    position: relative;
    padding: 0px !important;
}
</style>
<span>Thông tin danh sách bệnh nhân</span>
<div id="style-1" style="padding-right:10px;">
    <div class="table-responsive pmd-card pmd-z-depth scrollmenu">
        <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer" style="">
            <thead>
                <tr>
                    <!-- <td align="center" style="vertical-align: middle;"><input type="checkbox" name="chk_all_item_id" onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td> -->
                    <td align="center" style="vertical-align: middle;"><b>STT</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Nhập KQ</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Hủy KQ</b></td>
                    <!-- <td align="center" style="vertical-align: middle;"><b>In KQ</b></td> -->
                    <td align="center" style="vertical-align: middle;"><b>Trạng thái</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Ngày chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Tên dịch vụ</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Tên BN</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Giới tính</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Năm sinh</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Bác sĩ chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Khoa chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Nguoi trả kq</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Ngày trả kq</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Xem ảnh</b></td>
                </tr>
            </thead>
            <tbody id="body_data">
                @if(count($datas) > 0)
                    @foreach ($datas as $key => $data)
                    @php $id = $data['idchidinhct']; $i = 1; @endphp
                        @if($data['status'] == 0) <tr>@endif
                        @if($data['status'] == 1) <tr style="background:#fcff12">@endif
                        @if($data['status'] == 2) <tr style="background:#67ff59c7">@endif
                        @if($data['status'] == 3) <tr style="background:#3ce3d1">@endif
                            <!-- <td align="center"><input type="checkbox" name="chk_item_id"value="{{ $data['idchidinhct'] }}"></td> -->
                            <td align="center">{{ $data['stt'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">
                               @if($data['status'] != 0 && $data['status'] != 1)
                                <span style="font-size: 15px;cursor:pointer"
                                 data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-pen-alt"></i> <span style="color:#cdcdcd"> Nhập</span></span>
                              @endif
                              @if($data['status'] == 0 || $data['status'] == 1)
                                <span onclick="JS_Home.edit_chose('{{$data['idchidinhct']}}')" style="font-size: 15px;cursor:pointer"
                                 data-toggle="tooltip"><i style="color:#234270" class="fas fa-pen-alt"></i> <span style="color:#000000"> Nhập</span></span>
                              @endif
                            </td>
                            <td align="center" style="width:15%;vertical-align: middle;">
                                @if($data['status'] == 0 || $data['status'] == 1)
                                <span style="font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-times-circle"></i><span style="color:#cdcdcd"> Hủy</span></span>
                                @endif
                                @if($data['status'] == 3 || $data['status'] == 2)
                                <span onclick="JS_Home.huyduyetketqua('{{$data['idchidinhct']}}')" style="font-size: 15px;cursor:pointer"
                                data-toggle="tooltip"><i style="color:#ff0000" class="fas fa-times-circle"></i><span style="color:#000000"> Hủy</span></span>
                                @endif
                            </td>
                            <!-- <td align="center" style="width:15%;vertical-align: middle;">
                                <span onclick="JS_Home.print('{{$data['idchidinhct']}}')" style="font-size: 15px;cursor:pointer"
                              data-toggle="tooltip"><i style="color:#008be4" class="fas fa-print"></i><span style="color:#000000"> In</span></span>
                            </td> -->
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['trangthai'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['ngaychidinh'] }}</td>
                            <td style="width:40%;vertical-align: middle;">{{ $data['tenchidinh'] }}</td>
                            <td style="width:15%;vertical-align: middle;">{{ $data['tenbn'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['gioitinh'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['namsinh'] }}</td>
                            <td style="width:10%;vertical-align: middle;">{{ $data['bacsichidinh'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['tenkhoachidinh'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['nguoitraketqua'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['ngaytraketqua'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;cursor:pointer">
                                 <span onclick="JS_Home.openLink('{{$data['pacslink']}}')" style="font-size: 15px"
                                 data-toggle="tooltip"><i style="color:#000000" class="fas fa-eye"></i> <span style="color:#000000">Xem</span></span>
                            </td>
                        </tr> 
                    @endforeach
                @endif
            </tbody>
        </table>
        <tfoot>
            @if(count($datas) > 0)
            <tr class="fw-bold" id="pagination">
                {{--<td colspan="10">{{$datas->links('pagination.phantrang')}}</td>--}}
            </tr>
            @else
            <tr id="pagination">
                <td colspan="10">Không tìm thấy dữ liệu!</td>
            </tr>
            @endif
        </tfoot>
    </div>
</div>