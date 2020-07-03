<?php 

  if(isset($_POST['news_email'])) {

    $to = "danhow17@gmail.com"; // this is your Email address
    $from = $_POST['news_email']; // this is the sender's Email address
    $_POST = array();

    $subject = "Newsletter application from " . $from;
    $message = $from . " Has indicated that they would like their email added to the newsletter via website";

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<script>alert('Email successfully added'); history.go(-1);</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
  } else {
    echo "<script>alert('Please fill in a valid email address'); history.go(-1);</script>";
  }
?>