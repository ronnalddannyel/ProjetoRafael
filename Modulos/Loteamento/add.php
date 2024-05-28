<?php
require_once('../../../../db.php');
$upload_dir = '../../ArquivosEnviados/';


if (isset($_POST['Enviar'])) {
   	
	$Detentor = $_POST['Detentor'];
	$CpfCnpj = $_POST['CpfCnpj'];
	$Tipo = $_POST['Tipo'];
	$ImovelVinculado = $_POST['ImovelVinculado'];
    $NumeroAutex = $_POST['NumeroAutex'];
	$ValidadeAutex = $_POST['ValidadeAutex'];
	$ComprovacaoReposicao = $_POST['ComprovacaoReposicao'];
	$NumeroTcarf = $_POST['NumeroTcarf'];
	$Contrato = $_POST['Contrato'];
	$Fomentadora = $_POST['Fomentadora'];
	$VolumetriaLiberadaMetrosCubicos = $_POST['VolumetriaLiberadaMetrosCubicos'];
	$TotalMetrosCubicos = $_POST['TotalMetrosCubicos'];
	$NumeroProcesso = $_POST['NumeroProcesso'];
	$ComprovanteUm = $_POST['ComprovanteUm'];
	$DataLiberacao = $_POST['DataLiberacao'];
	$DataVencimento = $_POST['DataVencimento'];
	$ComprovanteDois = $_POST['ComprovanteDois'];
	$DataLiberacaoDois = $_POST['DataLiberacaoDois'];
	$DataVencimentoDois = $_POST['DataVencimentoDois'];
	$ComprovanteTres = $_POST['ComprovanteTres'];
	$DataLiberacaoTres = $_POST['DataLiberacaoTres'];
	$DataVencimentoTres = $_POST['DataVencimentoTres'];
	$Obs = $_POST['Obs'];







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



	$NomeDoAnexo2 = $_FILES['Anexo2']['name'];
	$NomeTemporarioAnexo2 = $_FILES['Anexo2']['tmp_name'];
	$TamanhoDoAnexo2 = $_FILES['Anexo2']['size'];



	if($NomeDoAnexo2){

		$ExtensaoAnexo2 = strtolower(pathinfo($NomeDoAnexo2, PATHINFO_EXTENSION));
		$PermitirExtensaoAnexo2  = array('pdf');
		$NovoNomeAnexo2 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo2;

		if(in_array($ExtensaoAnexo2, $PermitirExtensaoAnexo2)){
			if($TamanhoDoAnexo2 < 5000000){
	
					move_uploaded_file($NomeTemporarioAnexo2 ,$upload_dir.$NovoNomeAnexo2); 
			}else{
				$errorMsg = 'Arquivo muito grande';
				echo $errorMsg;
			}
		}else{
			$errorMsg = 'Selecione um arquivo válido';
			echo $errorMsg;
		}
	}





	$NomeDoAnexo3 = $_FILES['Anexo3']['name'];
	$NomeTemporarioAnexo3 = $_FILES['Anexo3']['tmp_name'];
	$TamanhoDoAnexo3 = $_FILES['Anexo3']['size'];



	if($NomeDoAnexo3){

		$ExtensaoAnexo3 = strtolower(pathinfo($NomeDoAnexo3, PATHINFO_EXTENSION));
		$PermitirExtensaoAnexo3  = array('pdf');
		$NovoNomeAnexo3 = time().'_'.rand(1000,9999).'.'.$ExtensaoAnexo3;

		if(in_array($ExtensaoAnexo3, $PermitirExtensaoAnexo3)){
			if($TamanhoDoAnexo3 < 5000000){
	
					move_uploaded_file($NomeTemporarioAnexo3 ,$upload_dir.$NovoNomeAnexo3); 
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
			$sql = "insert into ReposicaoParcelada (Detentor, CpfCnpj, Tipo, ImovelVinculado, NumeroAutex, ValidadeAutex, ComprovacaoReposicao, NumeroTcarf, Contrato, Fomentadora,  VolumetriaLiberadaMetrosCubicos, TotalMetrosCubicos, NumeroProcesso, ComprovanteUm, DataLiberacao, DataVencimento, ComprovanteDois, DataLiberacaoDois, DataVencimentoDois, ComprovanteTres, DataLiberacaoTres, DataVencimentoTres, Obs, Anexo1, Anexo2, Anexo3)
						values('".$Detentor."','".$CpfCnpj."', '".$Tipo."','".$ImovelVinculado."','".$NumeroAutex."','".$ValidadeAutex."', '".$ComprovacaoReposicao."', '".$NumeroTcarf."', '".$Contrato."', '".$Fomentadora."', '".$VolumetriaLiberadaMetrosCubicos."', '".$TotalMetrosCubicos."', '".$NumeroProcesso."', '".$ComprovanteUm."', '".$DataLiberacao."', '".$DataVencimento."', '".$ComprovanteDois."', '".$DataLiberacaoDois."', '".$DataVencimentoDois."', '".$ComprovanteTres."', '".$DataLiberacaoTres."', '".$DataVencimentoTres."', '".$Obs."', '".$NovoNomeAnexo1."', '".$NovoNomeAnexo2."', '".$NovoNomeAnexo3."')";
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
