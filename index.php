<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNC | Media Unit | Register</title>

    <link rel="shortcut icon" href="img/16676189220471-modified_70.png" type="png">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.css" integrity="sha512-vmXqikRa5kmI3gOQygzml5nV+5NGxG8rt8KWHKj8JYYK12JUl2L8RBfWinFGTzvpwwsIRcINy9mhLyodnmzjig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    

    <div class="login_section">

        <form id='login_container' class="login_container">

            <div class="header">

                <div class="logo">KNC Media Unit</div>
        
            </div>

            <center>
                <div class="knc_logo"><img src="img/16676189220471-modified_70.png" alt=""></div>
            </center>

            <div class="login_title">Registation</div>

            <div class="error-txt">This is error massege</div>

            <div class="login_row">
                
                <label for="pro_img"> Please select your profile photo </label><br>
                <input type="file" name="pro_img" id="pro_img" required >

            </div>
            <div class="crop_img">
                <center><canvas id="canvas">Your browser does not support</canvas></center>
                <center><button id="crop_btn">Crop</button></center>
            </div>
            <center>
                <div class="display_pro_img"></div>
            </center>
            <div class="login_row">

                <label for="fname"> Enter your frist name </label><br>
                <input placeholder="Amal *" class="inputs" type="text" name="fname" id="fname" required>

            </div>
            <div class="login_row">

                <label for="lname"> Enter your last name </label><br>
                <input placeholder="Perera *" class="inputs"  type="text" name="lname" id="lname" required>

            </div>
            <div class="login_row">

                <label for="grade"> Enter your grade </label><br>
                <input placeholder="11-E" class="inputs"  type="text" name="grade" id="grade" required>

            </div>

            <div class="login_row">

                <label for="addmition"> Enter your addmition number </label><br>
                <input placeholder="*****" class="inputs"  type="number" name="addmition" id="addmition" required>

            </div>
            <div class="login_row">

                <input type="hidden" name="64based_img" id="64based_img">
                <input type="submit" name="submit" id="submit">

            </div>
            <div class="load_sec">

                <div class="loading"></div>

            </div>

        </form>

    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.js" integrity="sha512-E+gDQcIvNXE60SjCS38ysf1mGh4ObBpKcUOp0oEaHQHQAdaN2p7GelOpgEdpTuCLoIJyLkNXiqFZbyD9Ak/Ygw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/crop.js"></script>
    <script src="js/script.js"></script>

</body>

</html>