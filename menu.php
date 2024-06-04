<? include ('config.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="#" alt="">
    <span class="d-none d-lg-block">Colônia de Pesca</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->
<a class="btn btn-outline-success" href="<?php echo $url ?>logout.php"><strong>Logout</strong></a>

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">

  </form>
</div><!-- End Search Bar -->



  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar - menu ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>Modulos/Painel/">
      <i class="bi bi-grid"></i>
      <span>Minha Conta</span>
    </a>
  </li><!-- Final minha conta teste-->

  <li class="nav-item">
    <a class="nav-link " href="#">
      <i class="bi bi-grid"></i>
      <span>Adiconar usuário</span>
    </a>
  </li><!-- Final minha conta teste-->


  <li class="nav-item">
    <a class="nav-link " href="<?php echo $url ?>Modulos/Pescador/">
      <i class="bi bi-grid"></i>
      <span>Pescadores</span>
    </a>
  </li><!-- Final minha conta teste-->


  <li class="nav-item">
    <a class="nav-link " href="#">
      <i class="bi bi-grid"></i>
      <span>Ver pasta pescador</span>
    </a>
  </li><!-- Final minha conta teste-->








</ul>
</aside><!-- End Sidebar-->
