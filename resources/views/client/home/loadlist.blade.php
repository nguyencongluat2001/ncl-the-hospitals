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
  }

  .table-responsive.pmd-card.pmd-z-depth {
    height: 100%;
    max-height: 600px;
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
                    <td align="center" style="vertical-align: middle;"><input type="checkbox" name="chk_all_item_id" onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                    <td align="center" style="vertical-align: middle;"><b>STT</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Trạng thái</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Ngày chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Tên dịch vụ</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Tên BN</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Giới tính</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Năm sinh</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Kết luận</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Bác sĩ chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Khoa chỉ định</b></td>
                    <td align="center" style="vertical-align: middle;"><b>Nguoi trả kq</b></td>
                </tr>
            </thead>
            <tbody id="body_data">
                @if(count($datas) > 0)
                    @foreach ($datas as $key => $data)
                    @php $id = $data['idchidinhct']; $i = 1; @endphp
                        <tr>
                            <td align="center"><input type="checkbox" name="chk_item_id"value="{{ $data['idchidinhct'] }}"></td>
                            <td align="center">{{ $data['stt'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['trangthai'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['ngaychidinh'] }}</td>
                            <td style="width:40%;vertical-align: middle;">{{ $data['tenchidinh'] }}</td>
                            <td style="width:15%;vertical-align: middle;">{{ $data['tenbn'] }}</td>
                            <td align="center" style="width:10%;vertical-align: middle;">{{ $data['gioitinh'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['namsinh'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;"></td>
                            <td style="width:15%;vertical-align: middle;">{{ $data['bacsichidinh'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['tenkhoachidinh'] }}</td>
                            <td align="center" style="width:15%;vertical-align: middle;">{{ $data['nguoitraketqua'] }}</td>
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