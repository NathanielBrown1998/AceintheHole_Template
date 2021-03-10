<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $athlete = $_POST['athlete'];

    $email_from = 'nathaniel.brown4@pcc.edu';

    $email_subject = "New Submission From User";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n".
                            "User Status: $athlete.\n";

    $to = "nathaniel.brown4@pcc.edu";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: sent.php");
?>
