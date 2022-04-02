
$(document).ready(function ($) {
    //for select
    $.validator.addMethod("notEqualsto", function (value, element, arg) {
        return arg != value;
    }, "您尚未選擇!");

    $("#form1").validate({
        submitHandler: function (form) {
            alert("success!");
            form.submit();
        },
        rules: {
            account: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 12
            },

        },
        messages: {
            account: {
                required: "帳號為必填欄位",
            },
            password: {
                required: "密碼為必填欄位",
            },

        }
    });
    $("#form2").validate({
        submitHandler: function (form) {
            alert("success!");
            form.submit();
        },
        rules: {
            account1: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            mail1: {
                required: true,
                email: true
            },

            password1: {
                required: true,
                minlength: 6,
                maxlength: 12
            },
            checkpassword1: {
                required: true,
                equalTo: "#password1"
            },

        },
        messages: {
            account1: {
                required: "帳號為必填欄位",
                minlength: "帳號最少要4個字",
                maxlength: "帳號最長10個字"
            },
            checkpassword1: {
                equalTo: "兩次密碼不相同",
                required: "確認密碼為必填欄位",
            },
            password1: {
                required: "密碼為必填欄位",
            },
            mail1: {
                required: "電子郵件為必填欄位",
            },

        }
    });
});

