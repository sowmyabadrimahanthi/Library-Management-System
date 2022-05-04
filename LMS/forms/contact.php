<?php
    $con = mysqli_connect("localhost","root","","lms");
    if($con){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $sql = "Insert into respond values('','$name','$email','$phone','$message')";
            if(mysqli_query($con, $sql)){
                echo 'OK';
            }
            else{
                echo mysqli_error($con);
            }
        }
    }
    else{
        echo mysqli_connect_error();
    }
?>