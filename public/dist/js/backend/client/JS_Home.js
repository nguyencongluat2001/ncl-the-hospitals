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
}
JS_Home.prototype.loadevent = function (oForm) {
    var myClass = this;
    $('form#frmHome_index').find('#btn_update').click(function () {
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
JS_Home.prototype.loadList = function () {
    var myClass = this;
    var oForm = 'form#frmLoadlist_list';
    // var loadding = NclLib.loadding();
    var url = this.urlPath + '/loadList';
    var data = $(oForm).serialize();
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
 * Load màn hình danh sách
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Home.prototype.loadList = function (oForm, numberPage = 1, perPage = 15) {
    var myClass = this;
    var url = this.urlPath + '/loadList';
    var data = '&pid=' + $("#pid").val();
    data += '&tenbn=' + $("#tenbn").val();
    data += '&tungay=' + $("#tungay").val();
    data += '&denngay=' + $("#denngay").val();
    data += '&offset=' + numberPage;
    data += '&limit=' + perPage;
    $.ajax({
        url: url,
        type: "GET",
        // cache: true,
        data: data,
        success: function (arrResult) {
            $("#table-container").html(arrResult);
            // phan trang
            $(oForm).find('.main_paginate .pagination a').click(function () {
                var page = $(this).attr('page');
                var perPage = $('#cbo_nuber_record_page').val();
                myClass.loadList(oForm, page, perPage);
            });
            $(oForm).find('#cbo_nuber_record_page').change(function () {
                var page = $(oForm).find('#_currentPage').val();
                var perPages = $(oForm).find('#cbo_nuber_record_page').val();
                myClass.loadList(oForm, page, perPages);
            });
            $(oForm).find('#cbo_nuber_record_page').val(perPage);
            var loadding = NclLib.successLoadding();
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
JS_Home.prototype.edit = function (edit) {
    var url = this.urlPath + '/createForm';
    var myClass = this;
    var data = '_token=' + $('#frmHome_index #_token').val();
    var listitem = '';
    var p_chk_obj = $('#table-data').find('input[name="chk_item_id"]');
    $(p_chk_obj).each(function () {
        if ($(this).is(':checked')) {
            if (listitem !== '') {
                listitem += ',' + $(this).val();
            } else {
                listitem = $(this).val();
            }
        }
    });
    if (listitem == '') {
        var nameMessage = 'Bạn chưa chọn bản ghi!';
        NclLib.alertMessageBackend('warning', 'Cảnh báo', nameMessage);
        return false;
    }
    data += '&id=' + listitem;
    console.log(data);
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            $('#editmodal').html(arrResult);
            // $('.chzn-select').chosen({ height: '100%', width: '100%' });
            $('#editmodal').modal('show');
            myClass.loadevent('form#frmAdd');
        }
    });
}