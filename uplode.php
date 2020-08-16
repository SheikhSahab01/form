<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

$name = $_POST['Name'];
$email = $_POST['Email'];
$mobile = $_POST['mobile'];
$Registration = $_POST['Registration'];
$College = $_POST['College'];
$Gender = $_POST['Gender'];
$Event = $_POST['Event'];
$Payment = $_FILES['Payment'];

//print_r($Payment); 

$filename = $Payment['name'];
$filepath = $Payment['tmp_name']; 
$fileerror = $Payment['error'];

if($fileerror == 0){
     $destfile = 'uplode/'.$filename;
    //  echo "$destfile ";
    move_uploaded_file($filepath, $destfile);

    $insertuery = "insert into factum_data(Name,Email,mobile,Registration,College,Gender,Event,Payment)
     values('$name','$email','$mobile','$Registration','$College','$Gender','$Event','$destfile')";

    $query = mysqli_query($con, $insertuery);
}


}else{
    echo"no button has clicked";
}


?>


    <div id="thanks">
    <img id="success-img" src="https://media0.giphy.com/media/hvMz6f9pEqCMFHYqGg/giphy.gif?cid=ecf05e47t3llu70d1py6xrbioa5c5wjx278grxx09rv4at1r&rid=giphy.gif" alt="" srcset="">
    <h2>Thanks For Registering With  </h2>
    <h2>FACTUM CLUB</h2>
  <a href="index.php"> <button class="sub-btn">Submit Another Response </button></a>  
    </div>

</body>
</html>