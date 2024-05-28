<!DOCTYPE html>
<html lang="pt-br">
<?php include "../../header.php"; 
$upload_dir = '../../ArquivosEnviados/';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
</header>
<body>
<?php include "../../menu.php"; ?>


<?php
  require_once('../../../../db.php');
  $usuario = $_SESSION['usuario'];
  
  $sql = "SELECT * FROM usuario WHERE CpfCnpj LIKE '%$usuario%'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)){
  $row = mysqli_fetch_assoc($result);

  
    
  }






  
?>



  
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Minha conta</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Início</a></li>
          <li class="breadcrumb-item active">Minha conta</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="<?php echo $upload_dir.$row['Foto3x4'] ?>" alt="Profile" class="rounded-circle" >
              <h2>Usuario: <?php echo $row['usuario']; ?> </h2>
              <h3>CPF/CNPJ: <?php echo $row['CpfCnpj']; ?></h3>
              
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Visão geral</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar perfil</button>
                </li>



                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Mudar senha</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Detalhes do perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nome Completo</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Nome']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Endereço</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Endereco']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telefone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Telefone']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['Email']; ?></div>
                  </div>
                  <!--- <a href="Gerar_Pdf/gerar_pdf.php">Gerar Comprovante</a> --->
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                   <!--  Editar perfil -->
                   <form action="EditarPerfil.php" method="POST" enctype="multipart/form-data">


                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nome completo</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $row['Nome']; ?>">
                      </div>
                    </div>



                    <div class="row mb-3">
                    <div class="row">
                    <div  class="col-md-4 col-lg-3 col-form-label">Documento com foto</div>
                    <div class="col-md-8 col-lg-9">
                    <input type="file" class="form-control" name="ArquivoEnviado1" >
                    <a href="<?php echo $upload_dir.$row['arquivo'] ?>" >Ver documento</a>
                    </div>
                    </div>
                    </div>


                    <div class="row mb-3">
                    <div class="row">
                    <div  class="col-md-4 col-lg-3 col-form-label">Comprovante de Residência</div>
                    <div class="col-md-8 col-lg-9">
                    <input type="file" class="form-control" name="ComprovanteDeResidencia" >
                    <a href="<?php echo $upload_dir.$row['ComprovanteDeResidencia'] ?>" >Ver documento</a>
                    </div>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <div class="row">
                    <div  class="col-md-4 col-lg-3 col-form-label">Foto 3x4</div>
                    <div class="col-md-8 col-lg-9">
                    <input type="file" class="form-control" name="Foto3x4" >
                    </div>
                    </div>
                    </div>

            


                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">CPF/CNPJ</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="CpfCnpj" type="text" class="form-control CpfCnpj"  value="<?php echo $row['CpfCnpj']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Nome da Mãe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="NomeDaMae" type="text" class="form-control"  value="<?php echo $row['NomeDaMae']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Sua data de Nascimento </label>
                      <div class="col-md-8 col-lg-9">
                        <input name="DataDeNascimento" type="date" class="form-control"  value="<?php echo $row['DataDeNascimento']; ?>">
                      </div>
                    </div>



                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Endereço</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control"  value="<?php echo $row['Endereco']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">telefone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $row['Telefone']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Email" type="email" class="form-control" value="<?php echo $row['Email']; ?>">
                      </div>
                    </div>

 
                    <div class="text-center">
                      <button type="submit" name="Enviar" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                  </form><!-- Final editar perfil -->
                </div>

        
                <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Formulário de mudar senha -->
                    <form action="EditSenha.php" method="POST">

                    <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Senha atual</label>
                       <div class="col-md-8 col-lg-9">
                         <input name="SenhaAntiga" type="password" class="form-control" id="currentPassword" require>
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nova senha</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="NovaSenha" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Confirme a nova senha</label>
                      <div class="col-md-8 col-lg-9">
                         <input name="ConfirmarNovaSenha" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                          <button type="submit" class="btn btn-primary">Mudar senha</button>
                    </div>
                    </form><!-- Final formulário de mudar senha -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>




 






  </main><!-- End #main -->




  <script>
var options = {
onKeyPress: function (cpf, ev, el, op) {
var masks = ['000.000.000-000', '00.000.000/0000-00'];
$('.CpfCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
}
}

$('.CpfCnpj').length > 11 ? $('.CpfCnpj').mask('00.000.000/0000-00', options) : $('.CpfCnpj').mask('000.000.000-00#', options);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>



</body>
<?php include "../../footer.php"; ?>
</html>