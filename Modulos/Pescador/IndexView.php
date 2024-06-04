

    </div><!--  Final breadcumb-->
<!-- Início painel de declarações -->
<div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Cadastros</h5>
                  <a href="Criar.php" class="btn btn-success">Adicionar</a>
                  
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Quadra</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Lote</th>
                        <th scope="col">Entrada</th>
                        <th scope="col">Opções</th>
                    
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                        $sql = "SELECT * FROM dadoslotes ";
                      
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)){
                          while($row = mysqli_fetch_assoc($result)){
                     ?>


                      <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['quantidade'] ?></td>
                      <td><?php echo $row['tipo'] ?></td>
                      <td><?php echo $row['lote'] ?></td>
                      <td><?php echo $row['entrada'] ?></td>
                      <td>
                      <!--Enviar ID--->
                      <form action="./Editar.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="IdEstoque"  value="<?php echo base64_encode($row['id']); ?>" >
                      <button type="submit" name="Ret"  class="btn btn-info"><i class="bx bxs-pencil"></i></button>   
                      <!--Fim enviar ID--->     
                      </form>      
                      <form action="./Deletar.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="IdEstoque"  value="<?php echo base64_encode($row['id']); ?>" >
                      <button type="submit" name="Ret"  class="btn btn-danger"><i class="bx bxs-trash"></i></button>   
                      <!--Fim enviar ID--->     
                      </form> 
                      </td>
                      </tr>



                      <?php
                              }
                            }
                          
                          ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!--Final painel de declarações -->


</main>


<?php include "../../footer.php"; ?>
