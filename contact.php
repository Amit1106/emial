<?php


    $to = "amitpatil.ap1106@gmail.com";
    $subject = "Response from website";
    $message = "I am very thankful to you";
    $headers = "From: swapnilpatil.sp1106@gmail.com";

    if(mail($to, $subject, $message, $headers)){
        echo "mail send sucessfully";
    }
    else{
        echo "can not send mail";
    }


?>
