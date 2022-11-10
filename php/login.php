<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$grade = $_POST['grade'];
$addmition = $_POST['addmition'];
$based64_img = $_POST['64based_img'];

if (!empty($fname) and !empty($lname) and !empty($grade) and !empty($addmition) and !empty($based64_img) ) {
    
    $up_img_name = $fname . $lname . ".png";
    $up_img = explode(',', $based64_img);
    $upload = base64_decode($up_img[1]);

    file_put_contents("user_img/" . $up_img_name, $upload);

    $url_fname = urlencode($fname);
    $url_lname= urlencode($lname);
    $url_grade= urlencode($grade);
    $url_addmition = urlencode($addmition);

    $link = "https://kncmediaunit.rf.gd/profile.php?img={$up_img_name}&fname={$url_fname}&lname={$url_lname}&grade={$url_grade}&ano={$url_addmition}";

    include "phpqrcode/qrlib.php";

    $path = "qrcodes/" . $up_img_name;

    QRcode::png($link,$path,'L',5,5);

    $data = "Success";
    
} else {

    $data = "All inputs are required..";
    
}

echo $data;