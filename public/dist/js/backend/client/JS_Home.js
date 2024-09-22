function JS_Home(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.menuActive('.link-home');
    NclLib.loadding();
    this.urlPath = baseUrl + '/' + module + '/' + controller;//Biên public lưu tên module
}
JS_Home.prototype.alerMesage = function(nameMessage,icon,color){
    Swal.fire({
        position: 'top-start',
        icon: icon,
        title: nameMessage,
        color: color,
        showConfirmButton: false,
        width:'30%',
        timer: 2500
      })
}

/**
 * Hàm load màn hình index
 *
 * @return void
 */
JS_Home.prototype.loadIndex = function () {
    var myClass = this;
    var oForm = 'form#frmHome_index';
    NclLib.menuActive('.link-home');
    myClass.loadList(oForm);
    $("#myInput").click(function(){
        $("#overSearch").toggleClass('closed');
    });
    $('form#frmHome_index').find('#btn_update').click(function () {
        myClass.edit(oForm);
    });
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
     // form load
     $(oForm).find('#tungay').change(function () {
        myClass.loadList();
    });
    $(oForm).find('#denngay').change(function () {
        myClass.loadList();
    });
    $(oForm).find('#trangthai').change(function () {
        myClass.loadList();
    });
    $(oForm).find('#idkhoathuchien').change(function () {
        myClass.loadList();
    });
}
JS_Home.prototype.loadevent = function (oForm) {
    var myClass = this;
    // $('form#frmHome_index').find('#btn_update').click(function () {
    //     myClass.store('form#frmAdd');
    // })
    // $('form#frmAdd').find('#btn_create').click(function () {
    //     myClass.store('form#frmAdd');
    // })
}
/**
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
// JS_Home.prototype.loadList = function () {
//     var myClass = this;
//     var oForm = 'form#frmLoadlist_list';
//     // var loadding = NclLib.loadding();
//     var url = this.urlPath + '/loadList';
//     var data = $(oForm).serialize();
//     $.ajax({
//         url: url,
//         type: "GET",
//         // cache: true,
//         data: data,
//         success: function (arrResult) {
//             $("#table-container").html(arrResult);
//             myClass.loadevent(oForm);
//         }
//     });
// }
/**
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.loadList = function (oForm) {
    NclLib.loadding();
    var myClass = this;
    var url = this.urlPath + '/loadList';
    var data = '&pid=' + $("#pid").val();
    data += '&_token=' + $('#frmHome_index #_token').val();
    data += '&tenbn=' + $("#tenbn").val();
    data += '&tungay=' + $("#tungay").val();
    data += '&denngay=' + $("#denngay").val();
    data += '&trangthai=' + $("#trangthai").val();
    data += '&idkhoathuchien=' + $("#idkhoathuchien").val();

    $.ajax({
        url: url,
        type: "POST",
        // cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == false) {
                NclLib.alertMessageBackend('warning', 'Cảnh báo', 'Hệ thống mạng đang quá tải, vui lòng thao tác lại!');
                return false;
            } else {
                $("#table-container").html(arrResult);
                myClass.loadevent(oForm);
            }
            
        }
    });
}
/**
 * Hàm hiển thị modal edit
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.edit = function () {
    NclLib.loadding();
    var url = this.urlPath + '/createForm';
    var myClass = this;
    var data = '_token=' + $('#frmHome_index #_token').val();
    var listitem = '';
    var i = 0;
    var p_chk_obj = $('#table-data').find('input[name="chk_item_id"]');
    $(p_chk_obj).each(function () {
        if ($(this).is(':checked')) {
            if (listitem !== '') {
                listitem += ',' + $(this).val();
            } else {
                listitem = $(this).val();
            }
            i++;
        }
    });
    if (listitem == '') {
        var nameMessage = 'Bạn chưa chọn bản ghi!';
        NclLib.alertMessageBackend('warning', 'Cảnh báo', nameMessage);
        return false;
    }
    if (i > 1) {
        var nameMessage = 'Bạn chỉ được chọn một đối tượng!';
        NclLib.alertMessageBackend('warning', 'Cảnh báo', nameMessage);
        return false;
  }
    data += '&id=' + listitem;
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == false) {
                NclLib.alertMessageBackend('warning', 'Cảnh báo', 'Hệ thống mạng đang quá tải, vui lòng thao tác lại!');
                return false;
            } else {
                $('#editmodal').html(arrResult);
                $('#editmodal').modal('show');
                myClass.loadevent('form#frmHome_index');
            }
        }
    });
}
/**
 * Hàm hiển thị modal edit
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.edit_chose = function (p_chk_obj) {
    NclLib.loadding();
    var url = this.urlPath + '/createForm';
    var myClass = this;
    var data = '_token=' + $('#frmHome_index #_token').val();
    data += '&id=' + p_chk_obj;
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == false) {
                NclLib.alertMessageBackend('warning', 'Cảnh báo', 'Hệ thống mạng đang quá tải, vui lòng thao tác lại!');
                return false;
            } else {
                $('#editmodal').html(arrResult);
                $('.chzn-select').chosen({ height: '100%', width: '100%' });
                $('#editmodal').modal('show');
                myClass.loadevent('form#frmHome_index');
            }
        }
    });
}
/**
 * Hàm hiển thị modal edit
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.getvungkhaosatbyid = function () {
    NclLib.loadding();
    var url = this.urlPath + '/getvungkhaosatbyid';
    var data = '_token=' + $('#frmHome_index #_token').val();
    data = '&id=' + $("#idvungkhaosat").val();
    $.ajax({
        url: url,
        type: "GET",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == false) {
                NclLib.alertMessageBackend('warning', 'Cảnh báo', 'Hệ thống mạng đang quá tải, vui lòng thao tác lại!');
                return false;
            } else {
                // var html = '<textarea class="form-control" type="text" name="decision" id="decision">' + arrResult + '</textarea>';
                CKEDITOR.instances.decision.setData(arrResult);
            }
        }
    });
}
JS_Home.prototype.luuchidinh = function (id) {
    var url = this.urlPath + '/luuchidinh';
    var myClass = this;
    var formdata = new FormData();
    var status = ''
    $('input[name="status"]:checked').each(function() {
        status =  $(this).val();
    });
    formdata.append('_token', $("#_token").val());
    formdata.append("idchidinhct", id);
    formdata.append("tenchidinh", $("#tenchidinh").val());
    formdata.append("idvungkhaosat", $("#idvungkhaosat").val());
    formdata.append("denghi", $("#denghi").val());
    formdata.append("idthietbi", $("#idthietbi").val());
    formdata.append("yeucaudichvu", $("#yeucaudichvu").val());
    formdata.append("loidanchuyenkhoa", $("#loidanchuyenkhoa").val());
    formdata.append("mauketquabc", $("#mauketquabc").val());
    formdata.append("idbacsidocketqua", $("#idbacsidocketqua").val());
    formdata.append("ketluan", $("#ketluan").val());
    formdata.append("Document_Name", $("#Document_Name").val());
    formdata.append("noidunghtml", CKEDITOR.instances.decision.getData());
    var editorContent = CKEDITOR.instances.decision.getData();
    // Tạo một thẻ div tạm để loại bỏ thẻ HTML
    var tempDiv = document.createElement("div");
    tempDiv.innerHTML = editorContent;
    // Lấy nội dung chỉ có văn bản
    var plainText = tempDiv.textContent || tempDiv.innerText || "";
    formdata.append("noidung",  plainText);
    $.ajax({
        url: url,
        type: "POST",
        data: formdata,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function (arrResult) {
            if (arrResult['success'] == true) {
                  NclLib.alertMessageBackend('success', 'Thông báo', 'Cập nhật thành công');
                  $('#editmodal').modal('hide');
                  myClass.loadList(oFormCreate);

            } else {
                var loadding = NclLib.successLoadding();
                NclLib.alertMessageBackend('danger', 'Lỗi', 'Cập nhật thất bại!');
            }
        }
    });
}
JS_Home.prototype.openLink = function (link) {
    window.open(link);
}
/**
 * Hàm hiển thị modal edit
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.export = function (id) {
    NclLib.loadding();
    var url = this.urlPath + '/export';
    var myClass = this;
    var data = '_token=' + $('#frmAdd #_token').val();
    data += '&id=' + id;
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == false) {
                NclLib.alertMessageBackend('warning', 'Cảnh báo', 'Hệ thống mạng đang quá tải, vui lòng thao tác lại!');
                return false;
            } else {
                $('#export').html(arrResult);
                $('#export').modal('show');
                $("#export").css("background","#0c112396");
                myClass.loadevent('form#frmHome_index');
            }
        }
    });
}
JS_Home.prototype.print = function (id) {
    NclLib.loadding();
    var url = this.urlPath + '/printViewHtml';
    var data = '_token=' + $('#frmAdd #_token').val();
    var url_print_download = this.urlPath;
    data += '&id=' + id;
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            console.log(url_print_download);
            JS_Home.print_download(id,arrResult,url_print_download);
        }
    });
}
// function JS_Home(id,arrResult,url_print_download) {
JS_Home.prototype.print_download = function (id,arrResult,url_print_download) {
    var url = this.urlPath + '/print';
    var data = '_token=' + $('#frmView #_token').val();
    data += '&id=' + id;
    data += '&html=' + arrResult;
    console.log(123,arrResult)
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if (arrResult['success'] == true) {
                window.open(arrResult['urlfile']);
                NclLib.alertMessageBackend('success', 'Thông báo', 'In file PDF thành công');
                $('#export').modal('hide');
            }else{
                NclLib.alertMessageBackend('danger', 'Lỗi', 'In thất bại!');
            }
            // myClass.loadevent('form#frmHome_index');
        }
    });
}
/**
 * Hàm hiển thị modal edit
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.close = function () {
    $('#export').modal('hide');
    $("#export").css("background","none");
}

// Xoa bài viết
JS_Home.prototype.huyduyetketqua = function (id,type) {
    var myClass = this;
    var url = this.urlPath + '/huyduyetketqua';
    Swal.fire({
        title: 'Xác nhận hủy nhập kết quả?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#34bd57',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận'
      }).then((result) => {
        if(result.isConfirmed == true){
            $.ajax({
                url: url,
                type: "POST",
                dataType: 'json',
                data: {
                    _token: $('#_token').val(),
                    id: id,
                },
                success: function (arrResult) {
                    if (arrResult['success'] == true) {
                        NclLib.alertMessageBackend('success', 'Thông báo', 'Hủy thành công');
                        var html =    '<div id="button_change">'
                            html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                            html +=      '<button onclick="JS_Home.luuchidinh('+id+')" style="font-size: 14px;background:#0c3a55;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-pen-alt"></i> Lưu KQ</button>'
                            html +=   '</span>'
                            html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                            html +=      '<button onclick="JS_Home.duyetketqua('+id+')" style="font-size: 14px;background:#36ac05;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-check"></i> Duyệt KQ</button>'
                            html +=   '</span>'
                            html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                            html +=      '<button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-times-circle"></i> Hủy KQ</button>'
                            html +=   '</span>'
                            html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                            html +=      '<button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-print"></i> In KQ</button>'
                            html +=   '</span>'
                        html +=   '</div>'
                        $("#button_change").html(html);
                        var oForm = 'form#frmHome_index';
                        myClass.loadList(oForm);
                        $("#button_change").html(html);
                        var checker =   '<input type="checkbox" disabled style="width: 15px;height: 15px;" name="status" id="status"/>'
                        $("#status").html(checker);
                    }else{
                        NclLib.alertMessageBackend('danger', 'Lỗi', 'Hủy thất bại!');
                    }
                }
            });
        }
      })
}
// Xoa bài viết
JS_Home.prototype.duyetketqua = function (id) {
    var myClass = this;
    var url = this.urlPath + '/duyetketqua';
    Swal.fire({
        title: 'Xác nhận duyệt kết quả?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#34bd57',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xác nhận'
      }).then((result) => {
        if(result.isConfirmed == true){
            $.ajax({
                url: url,
                type: "POST",
                dataType: 'json',
                data: {
                    _token: $('#_token').val(),
                    id: id,
                },
                success: function (arrResult) {
                    if (arrResult['success'] == true) {
                        NclLib.alertMessageBackend('success', 'Thông báo', 'Duyệt thành công');
                        var oForm = 'form#frmHome_index';
                        var html =    '<div id="button_change">'
                                html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                                html +=      '<button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-pen-alt"></i> Lưu KQ</button>'
                                html +=   '</span>'
                                html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                                html +=      '<button style="font-size: 14px;background:#7f8e9626;color:#cdcdcd" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#cdcdcd" class="fas fa-pen-alt"></i> Duyệt KQ</button>'
                                html +=   '</span>'
                                html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                                html +=      '<button onclick="JS_Home.huyduyetketqua('+id+')" style="font-size: 14px;background:red;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-times-circle"></i> Hủy KQ</button>'
                                html +=   '</span>'
                                html +=   '<span style="padding-right:20px;font-size: 15px;cursor:pointer" data-toggle="tooltip">'
                                html +=      '<button onclick="JS_Home.export('+id+',2)" style="font-size: 14px;background:#ffad25;color:#ffffff" class="btn btn shadow-sm" id="btn_edit" type="button"data-toggle="tooltip"><i style="color:#ffffff" class="fas fa-print"></i> In KQ</button>'
                                html +=   '</span>'
                            html +=   '</div>'
                        $("#button_change").html(html);
                        var checker =   '<input type="checkbox" disabled style="width: 15px;height: 15px;" name="status" id="status" checked/>'
                        $("#status").html(checker);

                        myClass.loadList(oForm);
                    }else{
                        NclLib.alertMessageBackend('danger', 'Lỗi', 'Duyệt thất bại!');
                    }
                }
            });
        }
      })
}
