<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT usuario, id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "php/head.php" ?>
<body>
    <?php include "php/header.php" ?>
    <main>
        <div class="peli-inicio">
            <div class="contenedor">
                <h4 class="titulo"> Avatar: El sentido del agua (2022)</h4>
                <p class="descripcion">Ambientada más de una década después de los acontecimientos de la primera película, 'Avatar: The Way of Water' empieza contando la historia de la familia Sully (Jake, Neytiri y sus hijos), los problemas que los persiguen, lo que tienen que hacer para mantenerse a salvo, las batallas que libran para seguir con vida y las tragedias que sufren.</p>
                <button role="button" class="boton"><i class="fa-solid fa-circle-play"></i><a href="error.php">Reproducir</a></button>

                    
            </div>

        </div>
        <div class="contenedor-destacadas">
            <div class="contenedor-titulo-control">
                <h3>Peliculas Destacadas</h3>
                <div class="indicador-barra"></div>              

            </div>

            <div class="contenedor-principal">
                <button role="button" id="izquierda" class="izquierda"><i class="fa-regular fa-circle-left"></i></button>

                    <div class="contenedor-imgmov">
                        <div class="imgmov">
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img1.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img2.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img3.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img4.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img5.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img6.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img1.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img2.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img4.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img3.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img6.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img5.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img1.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img2.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img4.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img3.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img6.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img5.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img2.jpg" alt=""></a>
                            </div>
                            <div class="pelicula">
                                <a href="error.php"><img src="img/img1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                <button role="button" id="derecha" class="derecha"><i class="fa-regular fa-circle-right"></i></button>
            </div>
        </div>

    </main>



    <script src="/piratix/main.js"></script>
    <script src="https://kit.fontawesome.com/b40dcbd10a.js" crossorigin="anonymous"></script>
    
</body>
</html>
