<?php
  function activeMenu($item = 'home') {
    $page = $_GET['page'];
    $active = ($item == $page) ? 'active' : FALSE;
    return $active;
  }
?>
<header>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-fixed-top">
        <div class="container menu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <span><a class="navbar-brand" href="http://www.senati.edu.pe/web/" target="_blank"><img class="logo" src="img/logo.png"></a></span>
          </div>
          <div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="<?php echo activeMenu(''); ?>"><a href="index.php">HOME</a></li>
                <li class="<?php echo activeMenu('school'); ?>"><a href="index.php?page=school">LA ESCUELA</a></li>
                <li class="<?php echo activeMenu('careers'); ?>"><a href="index.php?page=careers">CARRERAS</a></li>
                <li class="<?php echo activeMenu('graduates'); ?>"><a href="index.php?page=graduates">DIPLOMADOS</a></li>
                <li class="<?php echo activeMenu('information'); ?>"><a href="index.php?page=information">SOLICITAR INFORMACIÓN</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>