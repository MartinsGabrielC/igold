<?php

use Respect\Validation\Validator as v;

class ContatoController extends Controller {

    public function send()
    {
        $message = 'Nome: ' . $_POST['name'] . '<br>';
        $message .= 'Email: ' . $_POST['email'] . '<br>';
        $message .= 'Mensagem: ' . $_POST['message'] . '<br>';

        try {
            // Create the Transport
            $transport = Swift_MailTransport::newInstance();

            // Create the Mailer using your created Transport
            $mailer = Swift_Mailer::newInstance($transport);

            // Create a message
            $message = Swift_Message::newInstance('Contato Site')
                ->setFrom(array('noreply@chavesgold.com.br' => 'Contato Site'))
                ->setTo(array('gtech@chavesgold.com.br'))
                ->setBody($message)
                ->setContentType('text/html');

            // Send the message
            $result = $mailer->send($message);

            if($result) {
                $this->getApp()->flash('success', 'Email enviado com sucesso!');
            }

        } catch (Exception $e) {
            $this->getApp()->flash('error', 'Erro! Não foi possivel enviar o formulário de contato, tente novamente mais tarte.');
        }

        $this->getApp()->redirect('/#contato');
    }

}
