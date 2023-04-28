<?php
if($_POST["submit"]){
    $myEmail = 'yx_wang@utexas.edu';
    $to      = $myEmail;
    $subject = 'NEW Message from github page';
    $sender=$_POST["name"];
    $message = $_POST["message"];
    $mailBody="message from: $sender\n $message";

    mail($to, $subject, $mailBody);
    header("Location: https://yaxinw.github.io/")
}
    
?>