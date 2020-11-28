<?php include 'header.php';?>

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION[usuario]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'menu.php'; ?>
<div class="container">
    <div class="starter-template">
        <br>
        <br>
        <br>
        <div class="jumbotron">
            <div class="container text-center">
                <h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
                <p>Panel de control | <span class="labrel label-info"><?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
                <p>
                    <a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar Sesión</a>
                </p>
            </div><!-- .container text-center -->
        </div><!-- .jumbotron -->
    </div>    
</div><!-- .container -->

<?php include 'footer.php'; ?>