<?php


interface SendMailInterface
{
    public function setSendToEmailAddress($emailAddress);
    public function setSubjectName($subject);
    public function setEmailContents($body);
    public function setHeaders($headers);
    public function getHeaders();
    public function getHeadersText();
    public function sendEmailNow();
}
 
/**
 * Implementando la interfaz
 */
class SendMail implements SendMailInterface
{
    public $to, $subject, $body;
    public $headers = array();
 
    public function setSendToEmailAddress($emailAddress)
    {
        $this->to = $emailAddress;
    }
    
    public function setSubjectName($subject)
    {
        $this->subject = $subject;
    }
 
    public function setEmailContents($body)
    {
        $this->body = $body;
    }
 
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
 
    public function getHeaders()
    {
        return $this->headers;
    }
 
    public function getHeadersText()
    {
        $headers = "";
        foreach ($this->getHeaders() as $header) {
            $headers .= $header . "\r\n";
        }
    }
 
    public function sendEmailNow()
    {
        mail($this->to, $this->subject, $this->body, $this->getHeadersText());
    }
}
 
/**
 * Fachada en Sendmail para mejorar los nombres de los metodos.
 */
class SendMailFacade
{
    private $sendMail;
 
    public function __construct(SendMailInterface $sendMail)
    {
        $this->sendMail = $sendMail;
    }
 
    public function setTo($to)
    {
        $this->sendMail->setSendToEmailAddress($to);
        return $this;
    }
    
    public function setSubject($subject)
    {
        $this->sendMail->setSubjectName($subject);
        return $this;
    }
 
    public function setBody($body)
    {
        $this->sendMail->setEmailContents($body);
        return $this;
    }
 
    public function setHeaders($headers)
    {
        $this->sendMail->setHeaders($headers);
        return $this;
    }
 
    public function send()
    {
        $this->sendMail->sendEmailNow();
    }
}
?>