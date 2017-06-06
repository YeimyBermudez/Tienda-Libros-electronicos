<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cliente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- css -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--// css -->
        <!-- font -->
        <link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- //font -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- Popup-Box-JavaScript -->
        <script src="js/modernizr.custom.97074.js"></script>
        <script src="js/jquery.chocolat.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.gallery-grids a').Chocolat();
            });
        </script>
        <!-- //Popup-Box-JavaScript -->
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //start-smoth-scrolling -->
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>	
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="w3l_header_left"> 
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+ (031) 5362297 </li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@book.com</a></li>
                    </ul>
                </div>
                <div class="w3l_header_right">
                    <form id="cerrar" method = "post" action = "cerrar.php" >
                        <ul>
                            <li><a  href="index.php"><span class="glyphicon glyphicon-user" id ='cerrarSesion' aria-hidden="true"></span>Cerrar Sesión</a></li>
                        </ul>
                    </form>
                </div>


                <div class="clearfix"> </div>

            </div>
        </div>
        <div class="logo-navigation-w3layouts">
            <div class="container">
                <div class="logo-w3">
                    <a href="#"><h1><img src="images/logo2.png" alt=" " /><span>Inspire</span></h1></a>
                </div>
                <div class="navigation agileits w3layouts">
                    <nav class="navbar agileits w3layouts navbar-default">
                        <div class="navbar-header agileits w3layouts">
                            <button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                                <span class="sr-only agileits w3layouts">Toggle navigation</span>
                                <span class="icon-bar agileits w3layouts"></span>
                                <span class="icon-bar agileits w3layouts"></span>
                                <span class="icon-bar agileits w3layouts"></span>
                            </button>
                        </div>
                        <nav class="navbar navbar-default ">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php" > <i class='glyphicon glyphicon-home'></i> Principal <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#datos" > <i class='glyphicon glyphicon-user'></i> Datos personales </a></li>
                                        <li ><a href="#biblioteca"><i class='glyphicon glyphicon-list-alt'></i> Biblioteca </a></li>    
                                        <li ><a href="#gustos"><i class='glyphicon glyphicon-heart'></i> Gustos</a></li>   
                                        <li ><a href="carrito.php"><i class='glyphicon glyphicon-shopping-cart'></i> Carrito</a></li>   
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="bienvenida">
            <label id ="bienve"> Bienvenid@ : <?php echo $_SESSION['nombre'], "    ", $_SESSION['apellido'] ?> </label>
        </div> 
        <section id="cuerpo">
            <div class="container">
                <div class="row">
                    <div class="bibliotecas">
                        <div class="features_items" id="datos"><!--features_items-->
                            <h2 class="title text-center">Datos personales</h2>                       
                            <label id ="bienve"> N° Cedula:  <?php echo $_SESSION['id_cliente'] ?> </label><br>
                            <label id ="bienve"> Nombre :   <?php echo $_SESSION['nombre'], "    ", $_SESSION['apellido'] ?> </label><br>
                            <label id ="bienve"> Ciudad:  <?php echo $_SESSION['ciudad'] ?> </label><br>
                            <label id ="bienve"> Direccion:  <?php echo $_SESSION['direccion'] ?> </label><br>
                            <label id ="bienve"> Email :  <?php echo $_SESSION['email'] ?> </label><br>
                            <label id ="bienve"> Contraseña:  <?php echo $_SESSION['password'] ?> </label><br>
                        </div><!--features_items-->
                        <div class="features_items" id="biblioteca"><!--features_items-->
                            <h2 class="title text-center">Biblioteca</h2>
                        </div><!--features_items-->
                        <div class="features_items" id ="gustos"><!--features_items-->
                            <h2 class="title text-center">Gustos e intereses</h2>    
                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php
                                        $id_clienteR = $_SESSION['id_cliente'];
                                        require_once 'dataBase.php';
                                        $db = new dataBase();
                                        $db->conectar();
                                        $fav = $db->consultar("favoritos", "id_cliente", $id_clienteR);
                                        while ($row = mysqli_fetch_array($fav)) {
                                            $id_favorito = $row['0'];
                                            $id_cliente = $row['1'];
                                            $id_libroF = $row['2'];
                                            $favoritos = $db->consultar("libros", "id_libro", $id_libroF);
                                            while ($row = mysqli_fetch_array($favoritos)) {
                                                $id_libro = $row['0'];
                                                $categoria_libro = $row['1'];
                                                $nombre_libro = $row['2'];
                                                $editorial_libro = $row['3'];
                                                $autor_libro = $row['4'];
                                                $precio_libro = $row['5'];
                                                $cantidad_libro = $row['6'];
                                                $resumen_libro = $row['7'];
                                                $imagen_libro = $row['8'];
                                                ?>
                                                <div class = "col-sm-4">
                                                    <div class = "product-image-wrapper">
                                                        <div class = "single-products">
                                                            <div class = "productinfo text-center">
                                                                <img src="<?php echo $imagen_libro ?>" alt="">
                                                                <h2> $ <?php echo $precio_libro ?></h2>
                                                                <p><?php echo $nombre_libro ?></p>
                                                                <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                                                    <button class="btn btn-agregarC btn-large" name="agregarCarrito" value="<?php echo $id_libro ?>"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Agregar a carrito</span></button>  
                                                                </form>
                                                            </div>
                                                            <div class = "product-overlay">
                                                                <div class = "overlay-content">
                                                                    <p><?php echo $nombre_libro ?></p>

                                                                    <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                                                        <button class="btn btn-agregarC btn-large" name="agregarCarrito" value="<?php echo $id_libro ?>"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Agregar a carrito</span></button>  
                                                                    </form>
                                                                    <a href="productos.php?id_libro= <?php echo $id_libro; ?>" class = "btn btn-default add-to-cart"><span class = "glyphicon glyphicon-book" aria-hidden = "true"></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class = "choose">
                                                            <ul class = "nav nav-pills nav-justified">
                                                                <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                                                    <button class="btn btn-link btn-large" name="borrarFavoritos" value="<?php echo $id_favorito ?>"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"> No me interesa</span></button>  
                                                                </form>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--features_items-->
        </div>
    </section> <!--/#cart_items-->
    <div class="footer-w3l">
        <p> &copy; 2017 Inspire . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</body>
</html>