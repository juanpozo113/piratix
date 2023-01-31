<header>
        <div class="contenedor">
            <h2 class="logo">PIRATIX</h2>
            <?php if(!empty($user)): ?>
                <h2 style="color: white">Bienvenido <span style="color:rgb(41, 154, 182)"> <?= $user['usuario']; ?></span> </h2>
                <?php endif; ?>
            <nav>                
                <a href="index.php">Inicio</a>                
                <a href="error.php">Series</a>
                <a href="error.php">Peliculas</a>
                <?php if(!empty($user)): ?>
                <a href="logout.php">Salir</a>
                <?php else: ?>
                <a href="login.php">Entrar</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>