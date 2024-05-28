<?php
session_start();
  require_once('../../../../db.php');
 
//
//
//

    $NovaSenha = $_POST['NovaSenha'];
    $ConfirmarNovaSenha = $_POST['ConfirmarNovaSenha'];
    $SenhaAntiga = $_POST['SenhaAntiga'];
    $usuario = $_SESSION['usuario'];
	$sql = "SELECT * FROM usuario WHERE CpfCnpj LIKE '%$usuario%'";
	
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        $senha = $row['senha'];
        $id = $row['usuario_id'];


        }


 
if ($SenhaAntiga == $senha){
	
	if ($NovaSenha == $ConfirmarNovaSenha){



				$sql = "update usuario set senha = '".$NovaSenha."' where usuario_id=".$id; 
				$result = mysqli_query($conn, $sql);
				if($result){
				$successMsg = 'Senha Alterada';
				header('Location: index.php');
                }


	}else {
		Echo 'senhas não conferem';
	}


} else {

	echo 'Senha antiga incoerrreta';
}
?>