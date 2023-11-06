
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand"  href="#"> cabelos</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse data-bs-target=#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navSupportedContent">
  <ul class="navbar-nav me-auto mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">home</a>
    </li> 
    <?php
      if(isset($_SESSION['tipo'])){
    echo"
    <div class='d-flex'>
    <a class='btn btn-outline-danger' href='../login/logout.php'>Sair</a>
    </div>";
}else{
    echo"
    <div class'd-flex'>
    <a class='btn btn-outline-primary' href='../login/index.php'>Entrar</a>
    </div>";
}
?>
<h1>voce eh um administrador parabens</h1>