<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tienda libros electronicos</title>
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
                    <ul>
                        <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Iniciar Sesión</a></li>
                        <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Registrarse</a></li>
                    </ul>
                </div>

                <div class="clearfix"> </div>

            </div>
        </div>
        <div class="logo-navigation-w3layouts">
            <div class="container">
                <div class="logo-w3">
                    <a href=""><h1><img src="images/logo2.png" alt=" " /><span>Inspire</span></h1></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="banner">
            <h3>Encuentra una gran variedad de </h3>
            <h2><span>libros electronicos</span></h2>
            <h4>Registrese para realizar su compra.</h4>
            <div class="arrow">
                <a href="#contact" class="scroll"><img src="images/arrow.png" alt=" " /></a>
            </div>
        </div>
        <div class="logo-navigation-w3layouts">
            <div class="container">

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
                                        <li ><a href="perfil.php"><i class='glyphicon glyphicon-user'></i> Perfil </a></li>       
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
        <!-- about -->
        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Recomendaciones</h2>
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <?php
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->conectar();
                        $rec = $db->consultar("recomendaciones");
                        while ($row = mysqli_fetch_array($rec)) {
                            $id_recomendacion = $row['0'];
                            $i_libroR = $row['1'];
                            $recomendaciones = $db->consultar("libros", "id_libro", $i_libroR);
                            while ($row = mysqli_fetch_array($recomendaciones)) {
                                $id = $row['0'];
                                $categoria = $row['1'];
                                $nombre = $row['2'];
                                $editorial = $row['3'];
                                $autor_libro = $row['4'];
                                $precio = $row['5'];
                                $cantidad = $row['6'];
                                $resumen = $row['7'];
                                $imagen = $row['8'];
                                ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">                               
                                            <div class="productinfo text-center">
                                                <img src="<?php echo $imagen; ?>" alt="">
                                                <h2><span> $ </span> <?php echo $precio ?></h2>
                                                <p> <?php echo $nombre ?><p>
                                                <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                                    <button class="btn btn-agregarC btn-large" name="agregarCarrito" value="<?php echo $id ?>"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"> Agregar a carrito</span></button>  
                                                    <a href="productos.php?id_libro= <?php echo $id; ?>" class = "btn btn-default add-to-cart"><span class = "glyphicon glyphicon-book" aria-hidden = "true"></span></a>
                                                </form>
                                            </div>
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

        </div><!--/recommended_items-->
        <section  class="cuerpo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categorias</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    require_once 'dataBase.php';
                                    $db = new dataBase();
                                    $db->conectar();
                                    $rec = $db->consultar("categorias");
                                    while ($row = mysqli_fetch_array($rec)) {
                                        $id_categoria = $row['0'];
                                        $nombre_categoria = $row['1'];
                                        ?>
                                        <li class="agileits w3layouts"><a href="categorias.php?id_categoria= <?php echo $id_categoria; ?>"><?php echo $nombre_categoria ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div><!--/category-products-->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form id = "buscarL" method = "post" > 
                            <div class="input-group">
                                <input type="text" class="form-control" name= "buscarLibro" id="buscarLibro" placeholder="Ingrese el nombre del libro que desea.">
                                <span class="input-group-btn">
                                    <input type= "submit"  class="btn btn-default" value="Buscar" name= "buscar" id="buscar"> 
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class = "title text-center">Biblioteca</h2>
                            <?php
                            require_once 'dataBase.php';
                            $db = new dataBase();
                            $db->conectar();
                            $rec = $db->consultar("libros");
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
                                                    <button class="btn btn-link btn-large" name="agregarFavoritos" value="<?php echo $id_libro ?>"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> Me interesa</span></button>  
                                                </form>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div><!--features_items-->
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
<div class = "pop-up">
    <div id = "small-dialog" class = "mfp-hide book-form">
        <h3> Iniciar sesión </h3>
        <form action ="conexion.php" method = "post">
            <input type = "text" name = "correo" class = "correo" placeholder = "Correo electronico " required = ""/>
            <input type = "password" name = "contraseñ" class = "contraseñ" placeholder = "Contraseña" required = ""/>
            <div class = "g-recaptcha" data-sitekey = "6LejxRsUAAAAACfpLwaJdr4P00nS4ysPlsmRXnSg"></div>
            <input type = "submit" value = "Ingresar" name = "ingresar" id = "ingresar">
        </form>
    </div>
</div>
<div class = "pop-up">
    <div id = "small-dialog2" class = "mfp-hide book-form">
        <h3>Nuevo Usuario</h3>
        <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
            <input type = "text" name = "nombre" id = "nombre" placeholder = "Nombre " required = ""/>
            <input type = "text" name = "apellidos" id = "apellidos" placeholder = "Apellido " required = ""/>
            <input type = "text" name = "cedula" id = "cedula" placeholder = "Numero de cedula " required = ""/>
            <select name = "ciudad" id = "ciudad" >
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
            <input type= "submit" value="Registrarse" name= "enviarCliente" id="enviarCliente"> 
        </form>
    </div>
</div>

<div class="pop-up"> 
    <div id="informacion" class="mfp-hide book-form">
        <h3><?php echo $nombre ?> </h3>
        <div>
            <img  src="<?php echo $imagen; ?>" alt="">
            <div id="caja">
                <label id="editorial"> Editorial : </label>  <label id="editorial"><?php echo $editorial ?> </label> <br>
                <label id="editorial">Autor : </label>  <label id="editorial"><?php echo $autor ?> </label> <br>
                <label id="editorial">Precio : </label>  <label id="editorial"><?php echo $precio ?> </label> 
            </div>
        </div>
        <div>
            <label id="resumen_libro">Sipnosis </label> 
            <p id="resumen"> <?php echo $resumen ?></p>
        </div>
    </div>
</div>

</body>
</html>