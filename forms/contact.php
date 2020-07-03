<?php 

if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['group']) && isset($_POST['phone']) ){

    $to = "danhow17@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $group = $_POST['group'];
    $phone = $_POST['phone'];
    $_POST = array();

    $subject = "Website enquiry from " . $name;
    $message = $name . " Has submitted their information on the website and have indicated they are a/an " . $group . " Please contact them on - " . $phone . "or via email - " . $from.

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<script>alert('message successfully sent'); history.go(-1);</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    } else {
      echo "<script>alert('Please fill in all the fields with relevant information'); history.go(-1);</script>";
    }
?>