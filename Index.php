<?php

include 'config/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODFAST</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <h1><img src="img/Logo 1.jpg" alt="">FoodFast</h1>
                </div>
                <div class="two columns u-pull-right">
                    <ul>
                        <li class="Submenú">
                            <img src="img/cart.png" alt="">
                            <di id="Carrito">
                                <p class="vacio">Carrito vacio</p>
                                <table id="Lista-Carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Platillos</th>
                                            <th>Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>

                                </table>
                                <a href="#" id="Vaciar-Carrito" 
                                class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="six columnns">
                    <div class="Contenido hero">
                        <h2>PRUEBA UN SERVICIO DIFERENTE</h2>
                        <p>Todo a un excelente precio</p>
                        <form>
                            <input class="u-full-width" type="text" placeholder="¿Qué te gustaria probar?" id="Buscador">
                            <input type="Submit" class="Submit-Buscador">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Barra">
        <div class="container">
            <div class="row">
                <div class=" four columns icono icono1">
                    <p>100 Platillos diferentes <br>
                    Explora los nuevos platillos</p>
                </div>
                <div class=" four columns icono icono2">
                    <p>FoodFast y sus especialidades<br>
                    Prueba las nuevas combinaciones</p>
                </div>
                <div class=" four columns icono icono3">
                    <p>Bebida a tu elección<br>
                    Prueba tu bebida favorita</p>
                </div>
            </div>
        </div>
    </div>

    <div id="Lista-Platillos" class="container">
        <h1 class="Encabezado">Pedidos en línea</h1>
        <div class="row">
            <div class="four columns">
                <div class="Card">
                    <img src="img/Platillo 6.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Pollo a la plancha</h4>
                        <p>Bebida a tu elección</p>
                        <img src="img/estrellas.png">
                        <p class="Precio">$50 <span class="u-pull-right">$90</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="Card">
                    <img src="img/platillo 7.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Cordón Bleu</h4>
                        <p>Bebida a tu elección</p>
                        <img src="img/estrellas.png">
                        <p class="Precio">$65 <span class="u-pull-right">$95</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="Card">
                    <img src="img/platillo3.jpg" class="imagen-platillo u-full-width">
                    <div class="info-card">
                        <h4>Hamburguesa con papas</h4>
                        <p>Bebida a tu elección</p>
                        <img src="img/estrellas.png">
                        <p class="Precio">$50 <span class="u-pull-right">$80</span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <div class="Card">
                        <img src="img/platillo 8.jpg" class="imagen-platillo u-full-width">
                        <div class="info-card">
                            <h4>Lasagna original</h4>
                            <p>Bebida a tu elección</p>
                            <img src="img/estrellas.png">
                            <p class="Precio">$45 <span class="u-pull-right">$85</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="Card">
                        <img src="img/platillo 9.jpg" class="imagen-platillo u-full-width">
                        <div class="info-card">
                            <h4>Club Sándiwch</h4>
                            <p>Bebida a tu elección</p>
                            <img src="img/estrellas.png">
                            <p class="Precio">$40 <span class="u-pull-right">$70</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="Card">
                        <img src="img/platillo 10.jpg" class="imagen-platillo u-full-width">
                        <div class="info-card">
                            <h4>Pizza</h4>
                            <p>Bebida a tu elección</p>
                            <img src="img/estrellas.png">
                            <p class="Precio">$90 <span class="u-pull-right">$120</span></p>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <div class="Card">
                            <img src="img/platillo 11.jpeg" class="imagen-platillo u-full-width">
                            <div class="info-card">
                                <h4>Hot Dog</h4>
                                <p>Bebida a tu elección</p>
                                <img src="img/estrellas.png">
                                <p class="Precio">$30 <span class="u-pull-right">$50</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="7">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="Card">
                            <img src="img/platillo 12.jpg" class="imagen-platillo u-full-width">
                            <div class="info-card">
                                <h4>Nuggets de pollo</h4>
                                <p>Bebida a tu elección</p>
                                <img src="img/estrellas.png">
                                <p class="Precio">$35 <span class="u-pull-right">$60</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="8">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="four columns">
                        <div class="Card">
                            <img src="img/platillo 13.jpg" class="imagen-platillo u-full-width">
                            <div class="info-card">
                                <h4>Orden de tacos</h4>
                                <p>Bebida a tu elección</p>
                                <img src="img/estrellas.png">
                                <p class="Precio">$50 <span class="u-pull-right">$85</span></p>
                                <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="9">Agregar al Carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns">
                            <div class="Card">
                                <img src="img/platillo 14.jpg" class="imagen-platillo u-full-width">
                                <div class="info-card">
                                    <h4>Quesadillas</h4>
                                    <p>Bebida a tu elección</p>
                                    <img src="img/estrellas.png">
                                    <p class="Precio">$55 <span class="u-pull-right">$75</span></p>
                                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="10">Agregar al Carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="Card">
                                <img src="img/platillo 15.jpg" class="imagen-platillo u-full-width">
                                <div class="info-card">
                                    <h4>Buffalo Wings</h4>
                                    <p>Bebida a tu elección</p>
                                    <img src="img/estrellas.png">
                                    <p class="Precio">$75 <span class="u-pull-right">$95</span></p>
                                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="11">Agregar al Carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="four columns">
                            <div class="Card">
                                <img src="img/platillo 16.png" class="imagen-platillo u-full-width">
                                <div class="info-card">
                                    <h4>Pollo Crunch</h4>
                                    <p>Bebida a tu elección</p>
                                    <img src="img/estrellas.png">
                                    <p class="Precio">$100 <span class="u-pull-right">$150</span></p>
                                    <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="12">Agregar al Carrito</a>
                                </div>
                            </div>
                        </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <nav class="Menú">
                        <a class="Enlace" href="#">Pedidos a domicilio</a>
                        <a class="Enlace" href="#">Pedidos en línea</a>
                        <a class="Enlace" href="#">Pedidos por teléfono</a>
                        <a class="Enlace" href="#">Menú</a>
                        <a class="Enlace" href="#">Bebidas</a>
                    </nav>
                </div>
                <div class="four columns">
                    <nav class="Menú">
                        <a class="Enlace" href="#">Restaurant</a>
                        <a class="Enlace" href="#">Ubicación</a>
                        <a class="Enlace" href="#">teléfono</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    




    <script src="js/app.js"></script>
</body>
</html>