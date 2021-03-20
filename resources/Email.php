<?php

class Email{
    public $recipient = "mogvale@gmail.com";
    public $subject;
    public $body;
    public $headers;

    function __construct($subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;

        $headers = array("From: buildacake@buildacakemty.com",
            "Reply-To: {$this->recipient}",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $this->headers = implode("\r\n", $headers);
    }

    function send_email(){
        return mail($this->recipient, $this->subject, $this->body, $this->headers);
    }

}