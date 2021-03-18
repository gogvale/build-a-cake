<?php
function mailSender($subject, $body, $email = null)
{
    $to = "gogvale2011@gmail.com";

    $message = "<b>This is HTML message.</b>";
    $message .= "<h1>This is headline.</h1>";
    $message .= "<pre>" . $body . "</pre>";

    $header = "From:build-a-cake@cariocalanches.com \r\n";
    $header .= "Cc:" . $email . " \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail($to, $subject, $message, $header);

    if ($retval == true) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }
}
