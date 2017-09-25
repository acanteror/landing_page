<?php
namespace LandingBundle\Manager;

use LandingBundle\Entity\Message;
use Symfony\Component\Templating\EngineInterface;

class Mailer{

    /** @var  \Swift_Mailer*/
    private $mailer;
    private $from;
    private $templating;
    private $container;

    function __construct($mailer, $from, EngineInterface $templating, $container)
    {
        $this->mailer = $mailer;
        $this->from = $from;
        $this->templating = $templating;
        $this->container = $container;

    }

    function sendEmail($params = array()){

        $message = \Swift_Message::newInstance()
            ->setSubject($params['subject'])
            ->setFrom($this->from)
            ->setContentType("text/html")
            ->setTo($params['to'])
            ->setBody($params['body']);
        $this->mailer->send($message);
    }

    function sendMessageReceivedEmail (Message $message)
    {

        $subject = "Solicitud de información recibida";
        $to = $message->getEmail();
        $body = $this->templating->render(
            '@Landing/Default/mail.html.twig',
            array('message' => $message)
        );

        $params = array(
            'subject' => $subject,
            'to' => $to,
            'body' => $body
        );

        $this->sendEmail($params);

    }

}