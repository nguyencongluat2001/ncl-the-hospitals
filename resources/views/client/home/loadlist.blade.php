<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <thead>
            <tr>
                <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                <!-- <td align="center"><i class="fas fa-pen-alt"></i></td> -->
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Trạng thái</b></td>
                <td align="center"><b>Ngày chỉ định</b></td>
                <td align="center"><b>Tên dịch vụ</b></td>
                <td align="center"><b>Số lượng</b></td>
                <td align="center"><b>Tên BN</b></td>
                <td align="center"><b>Giới tính</b></td>
                <td align="center"><b>Năm sinh</b></td>

            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data['idchidinhct']; $i = 1; @endphp
                    <tr>
                        <td align="center"><input type="checkbox" name="chk_item_id"value="{{ $data['idchidinhct'] }}"></td>
                        <td align="center">{{ $data['stt'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['trangthai'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['ngaychidinh'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['tenchidinh'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">1</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['tenbn'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['gioitinh'] }}</td>
                        <td align="center" style="width:65%;height:150px;padding-left:30px;vertical-align: middle;">{{ $data['namsinh'] }}</td>

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