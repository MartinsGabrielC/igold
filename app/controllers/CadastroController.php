<?php

use Respect\Validation\Validator as v;

class CadastroController extends Controller {

    public function send()
    {
        $message = 'Nome: ' . $_POST['nome'] . '<br>';
        if($_POST['tipopessoa'] === 'pessoafisica') {
            $message .= 'CPF: ' . $_POST['cpf'] . '<br>';
            $message .= 'RG: ' . $_POST['rg'] . '<br>';
        } else {
            $message .= 'CNPJ: ' . $_POST['cnpj'] . '<br>';
        }
        $message .= 'Telefone: ' . $_POST['tel'] . '<br>';
        $message .= 'Celular: ' . $_POST['cel'] . '<br>';
        $message .= 'Email: ' . $_POST['email'] . '<br>';
        $message .= 'Estado: ' . $_POST['estado'] . '<br>';
        $message .= 'Cidade: ' . $_POST['cidade'] . '<br>';
        $message .= 'Bairro: ' . $_POST['bairro'] . '<br>';
        $message .= 'Endereço: ' . $_POST['endereco'] . '<br>';
        $message .= 'CEP: ' . $_POST['cep'] . '<br>';
        $message .= 'Complemento: ' . $_POST['compl'] . '<br>';
        $message .= '<hr>';
        $message .= 'Código do Cliente: ' . $_POST['cod'] . '<br>';
        $message .= 'Atendimento por revendedor: ' . $_POST['att'] . '<br>';
        $message .= 'Nome do revendedor: ' . $_POST['nomerev'] . '<br>';
        $message .= 'Número da máquina: ' . $_POST['nummaq'] . '<br>';
        $message .= 'Número da máquina 2: ' . $_POST['nummaq2'] . '<br>';

        try {
            // Create the Transport
            $transport = Swift_MailTransport::newInstance();

            // Create the Mailer using your created Transport
            $mailer = Swift_Mailer::newInstance($transport);

            // Create a message
            $message = Swift_Message::newInstance('Cadastro Cliente')
                ->setFrom(array('noreply@chavesgold.com.br' => 'Site'))
                ->setTo(array('gtech@chavesgold.com.br'))
                ->setBody($message)
                ->setContentType('text/html');

            // Send the message
            $result = $mailer->send($message);

            if($result) {
                $this->getApp()->flash('success', 'Cadastro efetuado com sucesso!');
            }

        } catch (Exception $e) {
            $this->getApp()->flash('error', 'Erro! Não foi possivel efetuar o cadastro, tente novamente mais tarte.');
        }

        $this->getApp()->redirectTo('cadastro');
    }

    public function sendNew()
    {
        $message = 'Nome: ' . $_POST['nome'] . '<br>';
        if($_POST['tipopessoa'] === 'pessoafisica') {
            $message .= 'CPF: ' . $_POST['cpf'] . '<br>';
            $message .= 'RG: ' . $_POST['rg'] . '<br>';
        } else {
            $message .= 'CNPJ: ' . $_POST['cnpj'] . '<br>';
        }
        $message .= 'Telefone: ' . $_POST['tel'] . '<br>';
        $message .= 'Celular: ' . $_POST['cel'] . '<br>';
        $message .= 'Email: ' . $_POST['email'] . '<br>';
        $message .= 'Estado: ' . $_POST['estado'] . '<br>';
        $message .= 'Cidade: ' . $_POST['cidade'] . '<br>';
        $message .= 'Bairro: ' . $_POST['bairro'] . '<br>';
        $message .= 'Endereço: ' . $_POST['endereco'] . '<br>';
        $message .= 'CEP: ' . $_POST['cep'] . '<br>';
        $message .= 'Complemento: ' . $_POST['compl'] . '<br>';

        try {
            // Create the Transport
            $transport = Swift_MailTransport::newInstance();

            // Create the Mailer using your created Transport
            $mailer = Swift_Mailer::newInstance($transport);

            // Create a message
            $message = Swift_Message::newInstance('Cadastro Novo Cliente')
                ->setFrom(array('noreply@chavesgold.com.br' => 'Site'))
                ->setTo(array('gtech@chavesgold.com.br'))
                ->setBody($message)
                ->setContentType('text/html');

            // Send the message
            $result = $mailer->send($message);

            if($result) {
                $this->getApp()->flash('success', 'Cadastro efetuado com sucesso!');
            }

        } catch (Exception $e) {
            $this->getApp()->flash('error', 'Erro! Não foi possivel efetuar o cadastro, tente novamente mais tarte.');
        }

        $this->getApp()->redirectTo('cadastro-novo-cliente');
    }

}
