<?php

$img_name = $_GET['img'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download | QR Code</title>
    <link rel="shortcut icon" href="img/16676189220471-modified_70.png" type="png">
    <link rel="stylesheet" href="css/qr.css">

</head>
<body>
<div class="qr_section">
            
            <div class="qr_continer">

                <input type="hidden" name="qr_url">
                <center><img src="php/qrcodes/<?php echo $img_name ?>.png" id='qr_img_php' alt=""></center>
                <center><a href="php/qrcodes/<?php echo $img_name ?>.png" id="down_link" download="<?php echo $img_name ?>">Download</a></center>

            </div>

        </div>
</body>
</html>