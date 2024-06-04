<!DOCTYPE html>
<html lang="pt-br">
<?php include "../../../header.php";
require_once('../../../../../db.php');
?>
</header>
<body>
<?php include "../../../menu.php"; ?>

<main id="main" class="main">


<H1>Adicionar reposição parcelada</H1>


<section class="section">
      <div class="row">
        <div class="col-lg-10">
 
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adicionar reposição parcelada</h5>
              

  <!-- General Form Elements -->
  <form method="POST"  action="add.php"    enctype="multipart/form-data">
                
              

<!--Campo Detentor-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Detentor</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="Detentor" placeholder="Insira Detentor aqui"  value="">
                  </div>
                </div>
<!--Final Campo Detentor-->

<!--Campo CpfCnpj-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">CPF/CNPJ</label>
                  <div class="col-sm-7">
                    <input name="CpfCnpj"  class="form-control cpfOuCnpj" type="text"   autocomplete="off" maxlength="14"   placeholder="Digite seu CPF ou CNPJ"  value="">
                  </div>
                </div>
<!--Final Campo CpfCnpj-->




<div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Tipo</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example" name="Tipo">
                      <option>Savana</option>
                      <option>Floresta</option>
                    </select>
                  </div>
                </div>







<!--Campo ImovelVinculado-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Imóvel Vinculado</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="ImovelVinculado" placeholder="Insira o Imóvel Vinculado aqui"  value="">
                  </div>
                </div>
<!--Final Campo ImovelVinculado-->


<!--Campo NumeroAutex-->
          <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número da Autex</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="NumeroAutex" placeholder="Insira Número da Autex aqui"  value="">
                  </div>
                </div>
<!--Final Campo NumeroAutex-->


<!--Campo ValidadeAutex-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Validade da Autex</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date" name="ValidadeAutex"   value="">
                  </div>
                </div>
<!--Final Campo ValidadeAutex-->


<!--Campo ComprovacaoReposicao-->
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Comprovação de Reposição</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="ComprovacaoReposicao" placeholder="Insira Comprovação de Reposição aqui"  value="">
                  </div>
                </div>
<!--Final Campo ComprovacaoReposicao-->





<!--Campo NumeroTcarf-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Tcarf</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="NumeroTcarf" placeholder="Insira o Número do Tcarf aqui"  value="">
                  </div>
                </div>
<!--Final Campo NumeroTcarf-->



<!--Campo Contrato-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Contrato</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="Contrato" placeholder="Insira o Contrato aqui"  value="">
                  </div>
                </div>
<!--Final Campo Contrato-->


<!--Campo Fomentadora-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Fomentadora</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" name="Fomentadora" placeholder="Insira Fomentadora aqui"  value="">
                  </div>
           </div>
<!--Final Campo Fomentadora-->





<!--Campo VolumetriaLiberadaMetrosCubicos-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Volumetria Liberada M<sup>3</sup></label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira a Volumetria Liberada aqui" name="VolumetriaLiberadaMetrosCubicos"   value="">
                  </div>
           </div>
<!--Final Campo VolumetriaLiberadaMetrosCubicos-->

<!--Campo TotalMetrosCubicos-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Voume Total da autex M<sup>3</sup></label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira o Total aqui" name="TotalMetrosCubicos"   value="">
                  </div>
           </div>
<!--Final Campo TotalMetrosCubicos-->

<!--Campo NumeroProcesso-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Número do Processo </label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira Número do processo" name="NumeroProcesso"   value="">
                  </div>
           </div>
<!--Final Campo NumeroProcesso-->

            <!--Campo DataVencimentoDois-->
            <div class="row mb-3">
                          <label for="inputText" class="col-sm-2 col-form-label">1º Comprovação</label>
                            <div class="col-sm-7">
                              <input  class="form-control" type="text" placeholder="1º Comprovação" name="ComprovanteUm"   value="">
                            </div>
                      </div>
            <!--Final Campo DataVencimentoDois-->



          <!--Campo ComprovacaoInicialVintePorcentoMetrosCubicos-->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">1º Comprovação Anexo</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="file" placeholder="Insira Comprovação Inicial 20% aqui" name="Anexo1"   value="">
                  </div>
           </div>
          <!--Final Campo ComprovacaoInicialVintePorcentoMetrosCubicos-->


<!--Campo DataLiberacao-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataLiberacao m³</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataLiberacao"   value="">
                  </div>
           </div>
<!--Final Campo DataLiberacao-->


<!--Campo DataVencimento-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data de Vencimento</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataVencimento"   value="">
                  </div>
           </div>
<!--Final Campo DataVencimento-->



                      <!--Campo DataVencimentoDois-->
                      <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">2º Comprovação</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="text" placeholder="2º Comprovação" name="ComprovanteDois"   value="">
                                    </div>
                              </div>
                      <!--Final Campo DataVencimentoDois-->



                    <!--Campo DoisComprovacao-->
                    <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">2º Comprovação</label>
                                  <div class="col-sm-7">
                                    <input  class="form-control" type="file" placeholder="Insira DoisComprovacao aqui" name="Anexo2"   value="">
                                  </div>
                            </div>
                    <!--Final Campo DoisComprovacao-->

            <!--Campo DataLiberacaoDois-->
            <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Data Liberacao Dois</label>
                          <div class="col-sm-7">
                            <input  class="form-control" type="date"  name="DataLiberacaoDois"   value="">
                          </div>
                    </div>
            <!--Final Campo DataLiberacaoDois-->


<!--Campo DataVencimentoDois-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Data Vencimento Dois</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date" placeholder="Insira DataVencimentoDois aqui" name="DataVencimentoDois"   value="">
                  </div>
           </div>
<!--Final Campo DataVencimentoDois-->
                  <!--Campo TresComprovacao-->
                  <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">3º Comprovação</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="texte" placeholder="3º Comprovação" name="ComprovanteTres"   value="">
                                    </div>
                            </div>
                  <!--Final Campo TresComprovacao-->

                  <!--Campo TresComprovacao-->
                  <div class="row mb-3">
                                  <label for="inputText" class="col-sm-2 col-form-label">3º Comprovação anexo</label>
                                    <div class="col-sm-7">
                                      <input  class="form-control" type="file" placeholder="Insira TresComprovacao aqui" name="Anexo3"   value="">
                                    </div>
                            </div>
                  <!--Final Campo TresComprovacao-->


<!--Campo DataLiberacaoTres-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataLiberacaoTres</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date"  name="DataLiberacaoTres"   value="">
                  </div>
           </div>
<!--Final Campo DataLiberacaoTres-->



<!--Campo DataVencimentoTres-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">DataVencimentoTres</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="date" name="DataVencimentoTres"   value="">
                  </div>
           </div>
<!--Final Campo DataVencimentoTres-->



<!--Campo Obs-->
<div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Obs</label>
                  <div class="col-sm-7">
                    <input  class="form-control" type="text" placeholder="Insira Obs aqui" name="Obs"   value="">
                  </div>
           </div>
<!--Final Campo Obs-->


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Cadastro</label>
                  <div class="col-sm-3">
                    <button type="Submit" name="Enviar" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>

              </form><!-- Finalização formulário cadastrar Reposição parcelada -->

            </div>
          </div>

        </div>


</main>

<?php include "../../../footer.php"; ?>