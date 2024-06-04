<?php
require_once('../../../../db.php');
$upload_dir = '../../ArquivosEnviados/';

if (isset($_POST['Enviar'])) {

    $nome = $_POST['nome'];
    $nomePai = $_POST['nomePai'];
    $nomeMae = $_POST['nomeMae'];
    $dataDeNascimento = $_POST['dataDeNascimento'];
    $naturalidade = $_POST['naturalidade'];
    $uf = $_POST['uf'];
    $estadoCivil = $_POST['estadoCivil'];
    $rg = $_POST['rg'];
    $dataPrimeirorg = $_POST['dataPrimeirorg'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $nomeDependente = $_POST['nomeDependente'];
    $rgp = $_POST['rgp'];
    $dataNascimenteoDependente = $_POST['dataNascimenteoDependente'];
    $tituloDeEleitor = $_POST['tituloDeEleitor'];
    $secao = $_POST['secao'];
    $zona = $_POST['zona'];
    $pis = $_POST['pis'];
    $nit = $_POST['nit'];



	$NomeDoAnexo1 = $_FILES['Anexo1']['name'];
	$NomeTemporarioAnexo1 = $_FILES['Anexo1']['tmp_name'];
	$TamanhoDoAnexo1 = $_FILES['Anexo1']['size'];



	if($NomeDoAnexo1){

		$ExtensaoAnexo1 = strtolower(pathinfo($NomeDoAnexo1, PATHINFO_EXTENSION));
		$PermitirExtensaoAnexo1  = array('pdf');
		$NovoNomeAnexo1 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo1;

		if(in_array($ExtensaoAnexo1, $PermitirExtensaoAnexo1)){
			if($TamanhoDoAnexo1 < 5000000){
	
					move_uploaded_file($NomeTemporarioAnexo1 ,$upload_dir.$NovoNomeAnexo1); 
			}else{
				$errorMsg = 'Arquivo muito grande';
				echo $errorMsg;
			}
		}else{
			$errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}





			

		if(!isset($errorMsg)){
			$sql = "insert into pescador (nome, nomePai, nomeMae, dataDeNascimento, foto3x4, naturalidade, uf, estadoCivil, rg, dataPrimeirorg, cpf, escolaridade, logradouro, bairro, cep, cidade, email, nomeDependente, rgp, dataNascimenteoDependente, tituloDeEleitor, secao, zona, pis, nit)
						values('".$nome."','".$nomePai."', '".$nomeMae."', '".$dataDeNascimento."', '".$foto3x4."', '".$naturalidade."', '".$uf."', '".$estadoCivil."', '".$rg."', '".$dataPrimeirorg."', '".$CpfCnpj."', '".$escolaridade."', '".$logradouro."', '".$bairro."', '".$cep."', '".$cidade."', '".$email."', '".$nomeDependente."', '".$rgp."', '".$dataNascimenteoDependente."', '".$tituloDeEleitor."', '".$secao."', '".$zona."', '".$pis."', '".$nit."')";

				$result = mysqli_query($conn, $sql);
			if($result){
				echo $successMsg = 'Cadastro concluído';
				header('Location: ./');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
				echo $errorMsg;
			}
		}
}
?>
