
<section class="section profile">
      <div class="row">
        <div class="col-xl-10">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-inicio" id="inic">Início</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-usuarios" id="usuarios">Usuários</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-fornecedores" id="faz">Fornecedores</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-entrada" id="cred">Entrada</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-saida" id="int">Saída</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-estoque" id="rep">Estoque</button>
                </li>
                             
              </ul>



              <div class="tab-content pt-2">
                <!--- Início da IndexView Início --->
                <div class="tab-pane fade show profile-inicio" id="profile-inicio">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Serviços de administração do modulo Único: Femarh Interno</h5>
                  <div style="text-align: center;"><img src="" alt="">
                  </div>
                </div>
                <!--- Final da IndexView Início --->


                <!--- Início da IndexView Fomentadora --->
                <div class="tab-pane fade show profile-overview" id="profile-usuarios">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Adicionar usuários</h5>
                  <?php include "./Usuarios/IndexView.php"; ?>
                </div>
                <!--- Final da IndexView Fomentadora --->


                <!-- -  Início da IndexView Fazenda --->
                <div class="tab-pane fade show profile-edit" id="profile-fazenda">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Fazendas</h5>
                  <?php include "./Fazenda/IndexView.php"; ?>
                </div>
                <!-- - -   Final Index Fazenda  - - - -->


                <!-- -  Início da IndexView Interessado --->
                <div class="tab-pane fade show profile-interessado" id="profile-interessado">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Consumidores</h5>
                  <?php include "./Interessado/IndexView.php"; ?>
                </div>
                <!-- - Final Index Interessado  - -->


                <!-- -  Início da IndexView Crédito --->
                <div class="tab-pane fade show profile-credito" id="profile-credito">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Créditos Florestais</h5>
                  <?php include "./Credito/IndexView.php"; ?>
                </div>
                <!-- - Final Index Crédito  - -->


                <!-- -  Início da IndexView Reposicao --->
                <div class="tab-pane fade show profile-reposicao" id="profile-reposicao">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Reposições Florestais</h5>
                  <?php include "./Reposicao/IndexViewReposicao.php"; ?>
                </div>
                <!-- - Final Index Reposição  - -->


                <!-- -  Início da IndexView Saldo --->
                <div class="tab-pane fade show profile-saldo" id="profile-saldo">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Saldos das Fazendas</h5>
                  <?php include "./Saldo/IndexView.php"; ?>
                </div>
                <!-- - - - - - -     Final Index Saldo      - - - - - -->

                <!-- -  Início da Gráfico --->
                <!-- <div class="tab-pane fade show profile-grafico" id="profile-grafico">
                  <h5 class="card-title" style="font-size: 22px; text-align: center;">Relação Geral de Dados Estatísticos</h5>
                  <?php // include "./Grafico/Fazenda.php"; ?>
                </div> -->
                <!-- - - - - - -     Final Gráfico      - - - - - -->

              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->



  <!-- - - - - -    Script Selecionador de Abas     - - - - - - - -->

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('tab');
    console.log(tab);

    function active() {

      const navItems = document.querySelectorAll('.nav-link');
      navItems.forEach(navItem => {
        navItem.classList.remove('active');
      });

      const tabContents = document.querySelectorAll('.tab-pane');
      tabContents.forEach(tabContent => {
        tabContent.classList.remove('active');
      });

      if (tab == 'tab1') {

        const tab = document.getElementById('usuarios');
        tab.classList.add('active');

        const div = document.getElementById('profile-usuarios');
        div.classList.add('active');

      } else if (tab == 'tab2') {
        const tab = document.getElementById('faz');
        tab.classList.add('active');

        const div = document.getElementById('profile-fazenda');
        div.classList.add('active');


      } else if (tab == 'tab3') {
        const tab = document.getElementById('int');
        tab.classList.add('active');

        const div = document.getElementById('profile-interessado');
        div.classList.add('active');


      } else if (tab == 'tab4') {
        const tab = document.getElementById('cred');
        tab.classList.add('active');

        const div = document.getElementById('profile-credito');
        div.classList.add('active');


      } else if (tab == 'tab5') {
        const tab = document.getElementById('rep');
        tab.classList.add('active');

        const div = document.getElementById('profile-reposicao');
        div.classList.add('active');

      } else if (tab == 'tab6') {
        const tab = document.getElementById('sald');
        tab.classList.add('active');

        const div = document.getElementById('profile-saldo');
        div.classList.add('active');

      // } else if (tab == 'tab7') {
      //   const tab = document.getElementById('grafic');
      //   tab.classList.add('active');

      //   const div = document.getElementById('profile-grafico');
      //   div.classList.add('active');

      } else {

        const tab = document.getElementById('inic');
        tab.classList.add('active');

        const div = document.getElementById('profile-inicio');
        div.classList.add('active');

      }

    }

    active();
  </script>

  <!-- - - - - -    Fim Script Selecionador de Abas     - - - - - - - -->