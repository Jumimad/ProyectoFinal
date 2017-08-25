<?php include (HTML_DIR . 'overall/head.php');  ?>

<body>

<div class="row">
    <div class="container">
        <form class="login" action="php/ingreso.php" method="post">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" placeholder="Usuario" autofocus name="usuario">
            <input type="password" class="login-input" placeholder="Contraseña" name="password">
            <input type="submit" value="Acceder" class="login-button" name="acceder">

        </form>
    </div>
</div>

<?php include (HTML_DIR . 'overall/footer.php'); ?>
</body>
</html>