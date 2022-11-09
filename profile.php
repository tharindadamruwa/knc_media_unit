<?php
           
$img = $_GET['img'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$grade = $_GET['grade'];
$admnum = $_GET['ano'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fname; ?>| KNC Media Unit</title>

    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" href="img/16676189220471-modified_70.png" type="png">
</head>
<body>
    
    <div class="continer">

        <div class="header">

            <div class="logo">KNC Media Unit</div>
    
        </div>
        <div class="mem">Member Profile</div>

        <center><div class="porfile_photo">

            <img src="<?php echo 'php/user_img/'.$img ?>" alt="">

        </div></center>

        <div class="details">

            <div class="d-text">Frist Name : <span> <?php echo $fname;?> </span></div>
            <div class="d-text">Last Name :<span> <?php echo $lname;?></span></div>
            <div class="d-text">Grade : <span><?php echo $grade;?></span></div>
            <div class="d-text">Addmition Number :<span> <?php echo $admnum;?></span></div>

        </div>

    </div>

</body>
</html>