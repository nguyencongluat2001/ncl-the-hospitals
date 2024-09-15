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
    $('form#frmHome_index').find('#btn_update').click(function () {
        myClass.store('form#frmAdd');
    })
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
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
    data += '&tenbn=' + $("#tenbn").val();
    data += '&tungay=' + $("#tungay").val();
    data += '&denngay=' + $("#denngay").val();
    data += '&trangthai=' + $("#trangthai").val();
    data += '&idkhoathuchien=' + $("#idkhoathuchien").val();
    $.ajax({
        url: url,
        type: "GET",
        // cache: true,
        data: data,
        success: function (arrResult) {
            $("#table-container").html(arrResult);
            myClass.loadevent(oForm);
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
            $('#editmodal').html(arrResult);
            // $('.chzn-select').chosen({ height: '100%', width: '100%' });
            $('#editmodal').modal('show');
            myClass.loadevent('form#frmHome_index');
        }
    });
}
JS_Home.prototype.store = function (oFormCreate) {
    var url = this.urlPath + '/create';
    var myClass = this;
    // if ($("#name").val() == '') {
    //     var nameMessage = 'Tên danh mục không được để trống!';
    //     NclLib.alertMessageBackend('warning', 'Cảnh báo', nameMessage);
    //     return false;
    // }
    // if ($("#code_cate").val() == '') {
    //     var nameMessage = 'Mã danh mục không được để trống!';
    //     NclLib.alertMessageBackend('warning', 'Cảnh báo', nameMessage);
    //     return false;
    // }
    var formdata = new FormData();
    // if(check == false){
    //     return false;
    // }
    var status = ''
    $('input[name="status"]:checked').each(function() {
        status =  $(this).val();
    });
    formdata.append('_token', $("#_token").val());
    formdata.append("idchidinhct", $("#idchidinhct").val());
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
    // formdata.append("noidung",  CKEDITOR.instances.decision.getBody().getText());
    // $('form#frmAdd input[type=file]').each(function () {
    //     var count = $(this)[0].files.length;
    //     for (var i = 0; i < count; i++) {
    //         formdata.append('file-attack-' + i, $(this)[0].files[i]);
    //     }
    // });
    console.log(formdata)

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