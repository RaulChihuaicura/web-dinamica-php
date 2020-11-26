<?php include 'header.php';?>

<?php include 'menu.php';?>

<!-- Agregar el contenido desde aqui para abajo -->
<div class="container">
    <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Recordar
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<!-- Fin contenido -->
<?php include 'footer.php';?>