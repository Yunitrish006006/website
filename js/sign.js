
$(document).ready(function ($) {
    //for select
    $.validator.addMethod("notEqualsto", function (value, element, arg) {
        return arg != value;
    }, "您尚未選擇!");

    $("#login").validate({
        submitHandler: function (form) {
            alert("success!");
            form.submit();
        },
        rules: {
            loginAccount: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            loginPassword: {
                required: true,
                minlength: 6,
                maxlength: 12
            },

        },
        messages: {
            loginAccount: {
                required: "帳號為必填欄位",
            },
            loginPassword: {
                required: "密碼為必填欄位",
            },

        }
    });
    $("#register").validate({
        submitHandler: function (form) {
            form.submit();
            alert("success");
             $.ajax({
              url: "register.php",
              data: $('#register').serialize(),
              type: "POST",
              dataType: 'text',
              success: function(msg) {
                  alert(msg);
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  alert(xhr.status);
                  alert(thrownError);
              }
          });
        },
        rules: {
            registerAccount: {
                required: true,
                minlength: 4,
                maxlength: 10,
                equalTo:"#showmsg"
            },
            registerMail: {
                required: true,
                email: true
            },
            
            registerPassword: {
                required: true,
                minlength: 6,
                maxlength: 12
            },
            registerCheckPassword: {
                required: true,
                equalTo: "#registerPassword"
            },

        },
        messages: {
            registerAccount: {
                required: "帳號為必填欄位",
                minlength: "帳號最少要4個字",
                maxlength: "帳號最長10個字",
                equalTo:"此帳號已存在",
            },
            registerCheckPassword: {
                equalTo: "兩次密碼不相同",
                required: "確認密碼為必填欄位",
            },
            registerPassword: {
                required: "密碼為必填欄位",
            },
            registerMail: {
                required: "電子郵件為必填欄位",
            },
        
        }
    });
    $('#information').validate({
        submitHandler: function (form) {
            alert("success!");
            form.submit();
        },
        rules:{
            informationAccount: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            informationMail:{
                required:true,
                email:true,
            },
            informationPassword:{
                required:true,
                minlength: 6,
                maxlength: 12
            },
            informationPasswordCheck:{
                required:true,
                minlength: 6,
                maxlength: 12
            },

        },
        messages:{
            informationAccount:{
                required:"修改帳戶為必填欄位"
            },
            informationMail:{
                required:"修改信箱為必填欄位",
                email:"請輸入正確的信箱"
            },
            informationPassword:{
                required:"修改密碼為必填欄位"
            },
            informationPasswordCheck:{
                required:"確認修改密碼為必填欄位"
            },
        }
    });
    $('#registerAccount').keyup(function() {
          $.ajax({
              url: "check_account.php",
              data: $('#register').serialize(),
              type: "POST",
              dataType: 'text',
              success: function(msg) {
                  $("#showmsg").val(msg);
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  alert(xhr.status);
                  alert(thrownError);
              }
          });
      });
});

