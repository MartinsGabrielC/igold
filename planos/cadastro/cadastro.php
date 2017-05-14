<?php
	$nome = filter_input(INPUT_POST,$_POST['nome'],FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,$_POST['email'],FILTER_SANITIZE_STRING);
	$telefone = filter_input(INPUT_POST,$_POST['tel'],FILTER_SANITIZE_STRING);
	$plano = filter_input(INPUT_POST,$_POST['plano'],FILTER_SANITIZE_STRING);
	if(isset($_POST['cel'])){$celular = filter_input(INPUT_POST,$_POST['cel'],FILTER_SANITIZE_STRING);}else{$celular = "";}
	$response = array();
	if($con != null){
		$sql = "INSERT INTO contact (nome,email,telefone,plano,celular) VALUES ($nome,$email,$telefone,$plano,$celular)";
		$con->execute($sql);
		$response['status'] = 'success';
        $response['message'] = 'Cadastro enviado';
	}else{
		$response['status'] = 'error';
        $response['message'] = 'Houve um problema com o seu cadastro';
	}
	echo json_encode($response);
?>
