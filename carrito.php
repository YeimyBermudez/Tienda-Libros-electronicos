
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
                                        <li><a href="perfil.php" > <i class='glyphicon glyphicon-list-alt'></i> Perfil </a></li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Libro</td>
                                <td class="image">Nombre</td>
                                <td class="price">Precio</td>
                                <td class="quantity">Cantidad</td>
                                <td class="total">Total</td>
                                <td class="accion">Acciòn</td>
                            </tr>
                        </thead>
                        <?php
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->conectar();
                        $rec = $db->consultar("carrito");
                        while ($row = mysqli_fetch_array($rec)) {
                            $id_carrito = $row['0'];
                            $id_libro = $row['1'];
                            $carrito = $db->consultar("libros", "id_libro", $id_libro);
                            while ($row = mysqli_fetch_array($carrito)) {
                                $id = $row['0'];
                                $categoria = $row['1'];
                                $nombre = $row['2'];
                                $editorial = $row['3'];
                                $autor = $row['4'];
                                $precio = $row['5'];
                                $cantidad = $row['6'];
                                $resumen = $row['7'];
                                $imagen = $row['8'];
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img id="foto" src="<?php echo $imagen ?>" alt=""></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><?php echo $nombre ?></a></h4>

                                        </td>
                                        <td class="cart_price">
                                            <h4><span>$</span><?php echo $precio ?></h4>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href=""></a>
                                                <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">$59</p>
                                        </td>
                                <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                    <td class="cart_total">
                                        <button class="btn btn-danger btn-large" name="borrarCarrito" value="<?php echo $id_carrito ?>"><span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span> </button>
                                    </td>
                                </form>

                                </tr>


                                </tbody>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </section> <!--/#cart_items-->
        <footer class="footer-w3l">
            <p> &copy; 2017 Inspire . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </footer>
        <div class="pop-up"> 
            <div id="small-dialog" class="mfp-hide book-form">
                <h3> Iniciar sesiòn  </h3>
                <form action="#" method="post">
                    <input type="text" name="correo" class="email" placeholder="Correo electronico" required=""/>
                    <input type="password" name="contraseñ" class="password" placeholder="Contraseña" required=""/>	
                    <input type="submit" value="Ingresar">
                    <div class="g-recaptcha" data-sitekey="6LejxRsUAAAAACfpLwaJdr4P00nS4ysPlsmRXnSg"></div>
                </form>
            </div>
        </div>
        <div class="pop-up"> 
            <div id="small-dialog2" class="mfp-hide book-form">
                <h3>Nuevo Usuario</h3>
                <form action="#" method="post">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required=""/>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos " required=""/>
                    <input type="text" name="cedula" id="cedula" placeholder="Numero de cedula " required=""/>
                    <select name ="ciudad" id="ciudad" >
                        <option disabled selected hidden> Ciudad </option>
                        <?php
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->Conectar();
                        $res = $db->consultar("ciudad", "nombre");
                        while ($row = mysqli_fetch_array($res)) {
                            echo '<option>';
                            echo $row['nombre'];
                            echo '</option>';
                        }
                        ?>
                    </select>
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion " required=""/>
                    <input type="text" name="telefono" id="telefono" placeholder="Telefono / celular " required=""/>
                    <input type="text" name="correoElectronico" id="correoElectronico" class="email" placeholder="Correo electronico" required=""/>
                    <input type="password" name="contraseña" id="contraseña" class="password" placeholder="Contraseña" required=""/>
                    <input type="submit" value="Registrarse"  name ="registrarse" id="registrarse">
                </form>
            </div>
        </div>
    </body>
</html>