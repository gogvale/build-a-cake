<?php

class Email
{
    private $recipient = "mogvale@gmail.com";
    private $headers;

    public $subject;
    public $body;

    function __construct($subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;

        $headers = array("From: build-a-cake@cariocalanches.com",
            "Reply-To: {$this->recipient}",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $this->headers = implode("\r\n", $headers);
    }

    function send_email()
    {
        return mail($this->recipient, $this->subject, $this->body, $this->headers);
    }
}
