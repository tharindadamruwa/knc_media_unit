$(document).ready(function () {

    $("#submit").click(function (e) {

        e.preventDefault();

        document.querySelector(".loading").style.display = "flex";

        var formData = $(".login_container").serialize();

        $.post(

            "php/login.php",
            formData,
            function (data, status) {

                if (data == "Success" && status == "success") {

                    $(".cp_img").css("display", "none");

                    var fn = document.querySelector("#fname").value;
                    var ln = document.querySelector("#lname").value;

                    document.querySelector(".load_sec").scrollIntoView({

                        behavior: "smooth"

                    });

                    var qr_n = fn + ln;

                    window.location.replace("qr.php?img=" + qr_n);

                } else {

                    $(".error-txt").text(data);
                    $(".error-txt").css("display", "block");

                    document.querySelector(".loading").style.display = "none";
                    document.querySelector(".knc_logo").scrollIntoView({

                        behavior: "smooth"

                    });


                }

            }

        );

    });

});