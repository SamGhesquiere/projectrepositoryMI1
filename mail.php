<?php
if(isset($_POST['submit'])){
    $to = "sam.ghesquiere@icloud.com";
    $from = $_POST['email']; 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Kopie van uw bericht:";
    $message = $first_name . " " . $last_name . " heeft het volgende geschreven:" . "\n\n" . $_POST['message'];
    $message2 = "Hier is een kopie van uw mail: " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail is verzonden." . $first_name . ", wij antwoorden u zo snel mogelijk!";
    
    }
?>
