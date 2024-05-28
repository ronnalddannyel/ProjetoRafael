<?php
session_start();
require_once('../../../../db.php');
$upload_dir = '../ArquivosEnviados/';

if(isset($_POST['Enviar'])){


    
    $NomeCompleto = $_POST['fullName'];
 



    $Telefone = $_POST['phone'];
    $Email = $_POST['Email'];
    $Endereco = $_POST['address'];
    $usuario = $_SESSION['usuario'];
    


    //
    
    

    $CpfCnpj = $_POST['CpfCnpj'];
    $NomeDaMae = $_POST['NomeDaMae'];
    $DataDeNascimento = $_POST['DataDeNascimento'];
   

    
    $sql3 = "SELECT * FROM usuario WHERE CpfCnpj LIKE '%$usuario%'";
    $result3 = mysqli_query($conn, $sql3);
        if(mysqli_num_rows($result3)){
            $row2 = mysqli_fetch_assoc($result3);
           

        }

//Foto 3x4




$NomeDoFoto3x4 = $_FILES['Foto3x4']['name'];
$NomeTemporarioFoto3x4 = $_FILES['Foto3x4']['tmp_name'];
$TamanhoDoFoto3x4 = $_FILES['Foto3x4']['size'];



if($NomeDoFoto3x4){

    $ExtensaoFoto3x4 = strtolower(pathinfo($NomeDoFoto3x4, PATHINFO_EXTENSION));
    $PermitirExtensaoFoto3x4  = array('jpeg', 'jpg', 'png');
    $NovoNomeFoto3x4 = time().'_'.rand(1000,9999).'.'.$ExtensaoFoto3x4;

    if(in_array($ExtensaoFoto3x4, $PermitirExtensaoFoto3x4)){
          if($TamanhoDoFoto3x4 < 5000000){
                unlink($upload_dir.$row2['Foto3x4']); //nome coluna
                move_uploaded_file($NomeTemporarioFoto3x4, $upload_dir.$NovoNomeFoto3x4); 
        }else{
            $errorMsg = 'Arquivo muito grande';
            echo $errorMsg;
        }
    }else{
        $errorMsg = 'Selecione um arquivo válido';
        echo $errorMsg;
    }
}else{

    $NovoNomeFoto3x4 = $row2['Foto3x4']; //nome coluna
}

















//Documento com foto

        $NomeDoArquivo1 = $_FILES['ArquivoEnviado1']['name'];
        $NomeTemporarioArquivo1 = $_FILES['ArquivoEnviado1']['tmp_name'];
        $TamanhoDoArquivo1 = $_FILES['ArquivoEnviado1']['size'];
    
     
        
        if($NomeDoArquivo1){
       
            $ExtensaoArquivo1 = strtolower(pathinfo($NomeDoArquivo1, PATHINFO_EXTENSION));
            $PermitirExtensao1  = array('pdf', 'jpeg', 'jpg', 'png');
            $NovoNomeArquivo1 = time().'_'.rand(1000,9999).'.'.$ExtensaoArquivo1;
        
            if(in_array($ExtensaoArquivo1, $PermitirExtensao1)){
                  if($TamanhoDoArquivo1 < 5000000){
                        unlink($upload_dir.$row2['arquivo']); //nome coluna
                        move_uploaded_file($NomeTemporarioArquivo1 ,$upload_dir.$NovoNomeArquivo1); 
                }else{
                    $errorMsg = 'Arquivo muito grande';
                    echo $errorMsg;
                }
            }else{
                $errorMsg = 'Selecione um arquivo válido';
                echo $errorMsg;
            }
        }else{
        
            $NovoNomeArquivo1 = $row2['arquivo']; //nome coluna
        }
    










//Comprovante de Residência









$NomeDoComprovanteDeResidencia = $_FILES['ComprovanteDeResidencia']['name'];
$NomeTemporarioComprovanteDeResidencia = $_FILES['ComprovanteDeResidencia']['tmp_name'];
$TamanhoDoComprovanteDeResidencia = $_FILES['ComprovanteDeResidencia']['size'];



if($NomeDoComprovanteDeResidencia){

    $ExtensaoComprovanteDeResidencia = strtolower(pathinfo($NomeDoComprovanteDeResidencia, PATHINFO_EXTENSION));
    $PermitirExtensaoComprovanteDeResidencia  = array('pdf', 'jpeg', 'jpg', 'png');
    $NovoNomeComprovanteDeResidencia = time().'_'.rand(1000,9999).'.'.$ExtensaoComprovanteDeResidencia;

    if(in_array($ExtensaoComprovanteDeResidencia, $PermitirExtensaoComprovanteDeResidencia)){
          if($TamanhoDoComprovanteDeResidencia < 5000000){
                unlink($upload_dir.$row2['ComprovanteDeResidencia']); //nome coluna
                move_uploaded_file($NomeTemporarioComprovanteDeResidencia ,$upload_dir.$NovoNomeComprovanteDeResidencia); 
        }else{
            $errorMsg = 'Arquivo muito grande';
            echo $errorMsg;
        }
    }else{
        $errorMsg = 'Selecione um arquivo válido';
        echo $errorMsg;
    }
}else{

    $NovoNomeComprovanteDeResidencia = $row2['ComprovanteDeResidencia']; //nome coluna
}













//Envio para o banco de dados

    if(!isset($errorMsg)){        

    $sql = "SELECT * FROM usuario WHERE CpfCnpj LIKE '%$usuario%'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);
            $senha = $row['senha'];
            $id = $row['usuario_id'];
        }
                            
    $sql = "update usuario 
            set 
            Nome = '".$NomeCompleto."',
            Email = '".$Email."',
            Endereco = '".$Endereco."',
            Telefone = '".$Telefone."',
            arquivo = '".$NovoNomeArquivo1."',
            Foto3x4 = '".$NovoNomeFoto3x4."',
            ComprovanteDeResidencia = '".$NovoNomeComprovanteDeResidencia."',
            CpfCnpj = '".$CpfCnpj."',
            NomeDaMae = '".$NomeDaMae."',
            DataDeNascimento = '".$DataDeNascimento."'
            
    where usuario_id=".$id;

    $result = mysqli_query($conn, $sql);
    if($result){
    $successMsg = 'New record updated successfully';
    header('Location: index.php');

    //header('Location:index.php');
    }else{
    $errorMsg = 'Error '.mysqli_error($conn);
    
    }

    }
}