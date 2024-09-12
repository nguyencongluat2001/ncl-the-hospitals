function JS_Login(baseUrl, controller) {
    this.baseUrl = baseUrl;
    this.controller = controller;
    this.urlPath = baseUrl + '/' + controller;
}
JS_Login.prototype.alerMesage = function(nameMessage,icon,color){
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
 * Hàm load các sử kiện cho màn hình index
 *
 * @return void
 */
JS_Login.prototype.loadIndex = function () {
    var myClass = this;
    var oForm = 'form#frmLogin';
    $('form#frmLogin').find('#btn_login').click(function () {
        myClass.store('form#frmLogin');
    })
}
JS_Login.prototype.loadevent = function (oForm) {
    var myClass = this;
    $('form#frmAdd').find('#btn_create').click(function () {
        myClass.store('form#frmAdd');
    })
    $('form#frmVideo').find('#btn_create').click(function () {
        myClass.store('form#frmVideo');
    })
}
/**
 * Hàm hiển thị modal
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_Login.prototype.add = function (oForm) {
    var url = this.urlPath + '/createForm';
    var myClass = this;
    var data = $(oForm).serialize();
    $.ajax({
        url: url,
        type: "POST",
        //cache: true,
        data: data,
        success: function (arrResult) {
            $('#editmodal').html(arrResult);
            $('#editmodal').modal('show');
            myClass.loadevent(oForm);

        }
    });
}
/**
 * Hàm hiển thêm mới
 *
 * @param oFormCreate (tên form)
 *
 * @return void
 */
JS_Login.prototype.login = function () {
    var url = this.urlPath + '/checkLogin_client';
    var oForm = 'form#frmLogin';
    var myClass = this;
    var data = $(oForm).serialize();
    if ($("#username").val() == '') {
        var nameMessage = 'Tên đăng nhập không được để trống!';
        var icon = 'warning';
        var color = '#f5ae67';
        this.alerMesage(nameMessage,icon,color);
        return false;
    }
    if ($("#password").val() == '') {
        var nameMessage = 'Mật khẩu không được để trống!';
        var icon = 'warning';
        var color = '#f5ae67';
        this.alerMesage(nameMessage,icon,color);
        return false;
    }
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (arrResult) {
            $("#homePage").html(arrResult);
            // if (arrResult['success'] == true) {
            //     Swal.fire({
            //         position: 'top-start',
            //         icon: 'success',
            //         title: 'Cập nhật thành công',
            //         showConfirmButton: false,
            //         timer: 3000
            //       })
            //    $('#editmodal').modal('hide');
            //    myClass.loadList(oFormCreate);

            // } else {
            //     Swal.fire({
            //         position: 'top-start',
            //         icon: 'error',
            //         title: 'Cập nhật thất bại',
            //         showConfirmButton: false,
            //         timer: 3000
            //       })
            // }
        }
    });
}