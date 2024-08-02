<!DOCTYPE html>
<html lang="pt-br">
<?php include "../estilo.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
</header>
<body>




<main id="main" class="main">

<H1>Cadastro FEMARH</H1>


<section class="section">
      <div class="row">
        <div class="col-lg-10">
        <H3 style="color: blue; text-decoration: underline;"><a class="nav-link " href="<?php echo $url ?>./"><strong >Fazer login</STRONG></a></H3>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cadastro usuário único</h5>
              

              <!-- General Form Elements -->
              <form method="POST"  action="./add.php"    enctype="multipart/form-data">
                
              
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Descrição da Denúncia</label>
               
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="DescricaoDenuncia"  placeholder="Digite seu nome completo"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Ofício da Denúncia</label>
                  <div class="col-sm-7">
                    <input name="DenunciaOficio"  class="form-control cpfOuCnpj" type="text"   autocomplete="off" maxlength="14"   placeholder="Digite seu CPF ou CNPJ"  value="" required>
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Órgão</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Orgao"  placeholder="Digite um usuario para acesso"  value="" required>
                  </div>
                </div>


                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Município</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Municipio"  placeholder="Digite sua nova senha"  value="" required>
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Localidade</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Localidade"  placeholder="Digite seu telefone"  value="" required>
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Mês</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Mes"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Processo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Processo"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Situação</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Situacao"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Relatório do Processo</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="ProcessoRelatorio"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Fiscal</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Fiscal"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Observação</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="Observacao"  placeholder="Digite seu e-mail"  value="">
                  </div>
                </div>

<!--Documento com foto-->

                   <div class="row mb-3">
                  <div class="row">
                  <div  class="col-md-4 col-lg-3 col-form-label">Documento com foto(.pdf)</div>
                  <div class="col-md-8 col-lg-9">
                  <input type="file" class="form-control" name="ArquivoEnviado1" required>
                                   </div>
                  </div>
                  </div>

<!--Comprovante de Residência-->
                  <div class="row mb-3">
                    <div class="row">
                      <div  class="col-md-4 col-lg-3 col-form-label">Comprovante de Residência(.pdf)</div>
                        <div class="col-md-8 col-lg-9">
                          <input type="file" class="form-control" name="ComprovanteDeResidencia" required>
                        </div>
                    </div>
                  </div>


                  
<!--Foto de Perfil-->
                  <div class="row mb-3">
                    <div class="row">
                      <div  class="col-md-4 col-lg-3 col-form-label">Foto de Perfil</div>
                        <div class="col-md-8 col-lg-9">
                        <input type="file" class="form-control" name="Foto3x4" required>
                      </div>
                    </div>
                  </div>




                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cadastro</label>
                  <div class="col-sm-3">
                    <button type="submit" name="Enviar" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>

              </form><!-- Finalização formulário Estoque de Peixe -->

            </div>
          </div>

        </div>



</main>


</body>

<script>
var options = {
onKeyPress: function (cpf, ev, el, op) {
var masks = ['000.000.000-000', '00.000.000/0000-00'];
$('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
}
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<?php include "../footer.php"; ?>
</html>