<?php
if(isset($_POST['submit'])){
    $to = "adarshjn444@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirect back to the previous page
}
?>
