<?php include 'header.php';?>

<?php include 'menu.php';?>

<!-- Agregar el contenido desde aqui para abajo -->
<div class="container">
    <div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 col-md offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="registroCode.php" method="POST" role="form">
                            <legend>Registro de usuario</legend>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Ingresa tu nombre">
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="txtEmail" class="form-control" id="email" autofocus required placeholder="Ingresa tu e-mail">
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Usuario">
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="txtPassword" class="form-control" id="password" autofocus required placeholder="******">
                            </div><!-- .form-group -->
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </form>
                    </div><!-- .panel-body -->
                </div><!-- .panel panel-default -->
            </div><!-- .col-md-4 col-md offset-4 -->
        </div><!-- .row -->
    </div>
</div><!-- .container -->


<!-- Fin contenido -->
<?php include 'footer.php';?>