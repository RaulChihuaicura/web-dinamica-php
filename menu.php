<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" alt="logo" style="width:60px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="index.php" class="nav-link" href="#">Principal</a>
    </li>
    <?php  if (!isset($_SESSION["usuario"])) {?>
      <li class="nav-item">
        <a href="login.php" class="nav-link" href="#">Login</a>
      </li> <!-- nav-item -->
      <li class="nav-item">
        <a href="resgistro.php" class="nav-link" href="#">Registro</a>
      </li>
    <?php } else{
      ?>
      <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
        <li class="nav-item">
          <a href="admin.php" class="nav-link" href="#">Admin</a>
        </li>
        <?php } else {?>
          <li class="nav-item">
            <a href="usuario.php" class="nav-link" href="#">Usuario</a>
          </li>  
        <?php }
      }?>
    
    
  </ul>
</nav>