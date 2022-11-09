$(document).ready(function () {

    $("#submit").click(function (e) {

        e.preventDefault();

        var formData = $(".login_container").serialize();
        
        $.post(

            "php/login.php",
            formData,
            function (data, status) {

                if (data == "Success" && status == "success") {

                    $(".cp_img").css("display", "none");
                    
                    var fn = document.querySelector("#fname").value;
                    var ln = document.querySelector("#lname").value;

                    var qr_n = fn + ln;

                    window.location.replace("qr.php?img=" + qr_n);

                } else {

                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");

                }

            }

        );

    });

});