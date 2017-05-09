<?php

use Respect\Validation\Validator as v;

class NewsletterController extends Controller {

    public function save()
    {
        $email = $_POST['email'];

        $validate = v::email()->validate($email);

        if($validate) {
            $newsletter = new \Models\Newsletter();
            $newsletter->email = $email;
            $newsletter->save();

            $this->getApp()->flash('success', 'Email cadastrado com sucesso!');
        } else {
            $this->getApp()->flash('error', 'Email digitado incorreto, Tente novamente!');
        }

        $this->getApp()->redirect('/#newsletter');
    }

}
