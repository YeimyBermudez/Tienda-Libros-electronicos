<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tienda de libros electronicos</title>
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

                </div>

                <div class="clearfix"> </div>

            </div>
        </div>
        <div class="logo-navigation-w3layouts">
            <div class="container">
                <div class="logo-w3">
                    <a href=""><h1><img src="images/logo2.png" alt=" " /><span>Inspire</span></h1></a>
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
                                        <li><a href="index.php" > <i class='glyphicon glyphicon-home'></i> Volver <span class="sr-only">(current)</span></a></li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- about -->
        <section  class="cuerpo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 padding-right">
                        <?php
                        $id_libro = $_GET['id_libro'];
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->conectar();
                        $rec = $db->consultar("libros", "id_libro", $id_libro);
                        while ($row = mysqli_fetch_array($rec)) {
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
                            <div id="informacion">
                                <h3><?php echo $nombre_libro ?> </h3>
                                <div id="basico">
                                    <div id="imagenLibro">
                                        <img id="fotoLibro" src="<?php echo $imagen_libro; ?>" alt="">
                                    </div>
                                    <div id="caja">
                                        <label id="editorial"> Editorial : </label>  <label id="editorial"><?php echo $editorial_libro ?> </label> <br>
                                        <label id="editorial">Autor : </label>  <label id="editorial"><?php echo $autor_libro ?> </label> <br>
                                        <?php
                                        require_once 'dataBase.php';
                                        $db = new dataBase();
                                        $db->conectar();
                                        $rec = $db->consultar("categorias", "id_categoria", $categoria_libro);
                                        while ($row = mysqli_fetch_array($rec)) {
                                            $id_cate = $row['0'];
                                            $nombre_cate = $row['1'];
                                            ?>
                                            <label id="editorial">Categoria : </label>  <label id="editorial"><?php echo $nombre_cate ?> </label> <br>
                                            <?php
                                        }
                                        ?>
                                        <label id="editorial">Precio : </label>  <label id="editorial"><?php echo $precio_libro ?> </label> <br>
                                        <label id="resumen_libro">Sipnosis </label> 
                                        <p id="resumen"> <?php echo $resumen_libro ?></p>
                                        <div id="botones">
                                            <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                                <button class="btn btn-agregarC btn-large" name="agregarCarrito" value="<?php echo $id_libro ?>"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Agregar a carrito</span></button>  
                                                <a href="#" class="btn btn-default add-to-cart"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>  Me gusta</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    </section><!--features_items-->


                </div>
            </div>
        </div>
    </div>
</section>
<!--//Gallery -->
<div class = "footer-w3l">
    <p> &copy;
        2017 Inspire . All Rights Reserved | Design by <a href = "http://w3layouts.com">W3layouts</a></p>
</div>




</body>
</html>