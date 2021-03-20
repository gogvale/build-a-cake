<?php

class Email{
    private $recipient;
    private $subject;
    private $body;

    function __construct($recipient, $subject, $body)
    {
        $this->$recipient = $recipient;
        $this->$subject = $subject;
        $this->$body = $body;
    }

    function send_email(){
        return mail($this->recipient, $this->subject, $this->body);
    }

}