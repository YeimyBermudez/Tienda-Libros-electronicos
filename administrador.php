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
        <script type="text/javascript" src="js/mostrar.js"></script>

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
                                        <li><a href="index.php" > <i class='glyphicon glyphicon-home'></i> Principal <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#biblioteca" > <i class='glyphicon glyphicon-list-alt'></i> Biblioteca </a></li>
                                        <li ><a href="#recomendaciones"><i class='glyphicon glyphicon-stats'></i> Recomendaciones </a></li>    
                                        <li ><a href="#clientes"><i class='glyphicon glyphicon-user'></i> Clientes </a></li> 
                                        <li ><a href="#categorias"><i class='glyphicon glyphicon-tasks'></i> Categorias </a></li>    
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
            <label id ="bienve"> Bienvenid@ : <?php echo $_SESSION['nombre'], "   " , $_SESSION['apellido'] ?> </label>
        </div> 
        <!-- about -->
        <div id="biblioteca" >
            <div class="features_items"><!--features_items-->
                <h2 class = "title text-center">Biblioteca</h2>
                <div id="datosBusqueda"
                     <div class="nuevo">
                        <ul>                      
                            <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Agregar Libro</a></li>
                        </ul>
                    </div><br>
                    <form class="form-horizontal" role="form" id="datos_cotizacion">
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Nombre  del producto" onkeyup='load(1);'>
                            </div>
                            <button type="button" class="btn btn-default" onclick='load(1);'>
                                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                            <span id="loader"></span>
                        </div>
                    </form>
                </div>
                <section id="cart_items">
                    <div class="container">
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Libro</td>
                                        <td class="image">Nombre</td>
                                        <td class="image">Categoria</td>
                                        <td class="price">Editorial</td>
                                        <td class="price">Autor</td>
                                        <td class="price">Precio</td>
                                        <td class="quantity">Cantidad</td>
                                        <td class="quantity">Acciones</td>
                                        <td></td>
                                    </tr>
                                </thead>
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
                                    <tbody>
                                        <tr>
                                            <td class="cart_product">
                                                <a href=""><img id="foto" src="<?php echo $imagen_libro ?>" alt=""></a>    
                                            </td>
                                            <td class="cart_description">
                                                <h4><?php echo $nombre_libro ?></h4>
                                            </td>
                                            <td class="cart_price">
                                                <?php
                                                require_once 'dataBase.php';
                                                $db = new dataBase();
                                                $db->conectar();
                                                $t = $db->consultar("categorias", "id_categoria", $categoria_libro);
                                                while ($row = mysqli_fetch_array($t)) {
                                                    $id_cate = $row['0'];
                                                    $nombre_cate = $row['1'];
                                                    ?>
                                                    <h4><?php echo $nombre_cate ?> </h4>
                                                    <?php
                                                }
                                                ?>
                                            </td>

                                            <td class="cart_total">
                                                <h4><?php echo $editorial_libro ?> </h4>
                                            </td>
                                            <td class="cart_total">
                                                <h4><?php echo $autor_libro ?> </h4>
                                            </td>
                                            <td class="cart_total">
                                                <h4><?php echo $precio_libro ?> </h4>
                                            </td>
                                            <td class="cart_total">
                                                <h4><?php echo $cantidad_libro ?> </h4>
                                            </td>
                                    <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                        <td class="cart_total">
                                          
                                            <button class="btn btn-warning btn-large" name="agregarRec" value="<?php echo $id_libro ?>"><span class = "glyphicon glyphicon-bookmark" aria-hidden = "true"></span> </button>
                                            <button class="btn btn-danger btn-large" name="borrarLibro" value="<?php echo $id_libro ?>"><span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span> </button>
                                        </td>
                                    </form>
                                    </tr>


                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </section> <!--/#cart_items-->
            </div>
        </div>
        <div id="recomendaciones">
            <div class="features_items"><!--features_items-->
                <h2 class = "title text-center">Recomendaciones</h2>
                <div id="datosBusqueda"
                     <form class="form-horizontal" role="form" id="datos_cotizacion">
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Nombre  del libro" onkeyup='load(1);'>
                            </div>
                            <button type="button" class="btn btn-default" onclick='load(1);'>
                                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                            <span id="loader"></span>
                        </div>
                    </form>
                </div>
                <section id="cart_items">
                    <div class="container">
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Libro</td>
                                        <td class="image">Nombre</td>
                                        <td class="image">Categoria</td>
                                        <td class="price">Editorial</td>
                                        <td class="price">Autor</td>
                                        <td class="price">Precio</td>
                                        <td class="quantity">Acciones</td>
                                        <td></td>
                                    </tr>
                                </thead>
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
                                                    <h4><?php echo $nombre ?></h4>
                                                </td>
                                                <td class="cart_price">
                                                    <?php
                                                    require_once 'dataBase.php';
                                                    $db = new dataBase();
                                                    $db->conectar();
                                                    $t = $db->consultar("categorias", "id_categoria", $categoria);
                                                    while ($row = mysqli_fetch_array($t)) {
                                                        $id_cate = $row['0'];
                                                        $nombre_cate = $row['1'];
                                                        ?>
                                                        <h4><?php echo $nombre_cate ?> </h4>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>

                                                <td class="cart_total">
                                                    <h4><?php echo $editorial ?> </h4>
                                                </td>
                                                <td class="cart_total">
                                                    <h4><?php echo $autor ?> </h4>
                                                </td>
                                                <td class="cart_total">
                                                    <h4><?php echo $precio ?> </h4>
                                                </td>
                                        <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                            <td class="cart_total">
                                                <button class="btn btn-danger btn-large" name="borrarRecomendacion" value="<?php echo $id_recomendacion ?>"><span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span> </button>
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
            </div>
        </div>
        <div id="clientes" >
            <div class="features_items"><!--features_items-->
                <h2 class = "title text-center">Clientes</h2>
                <div id="datosBusqueda"
                     <form class="form-horizontal" role="form" id="datos_cotizacion">
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Nombre  del cliente" onkeyup='load(1);'>
                            </div>
                            <button type="button" class="btn btn-default" onclick='load(1);'>
                                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                            <span id="loader"></span>
                        </div>
                    </form>
                </div>
                <section id="cart_items">
                    <div class="container">
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Cedula</td>
                                        <td class="image">Nombre</td>
                                        <td class="image">Apellidos</td>
                                        <td class="image">Ciudad</td>
                                        <td class="price">Email</td>

                                        <td></td>
                                    </tr>
                                </thead>
                                <?php
                                require_once 'dataBase.php';
                                $db = new dataBase();
                                $db->conectar();
                                $rec = $db->consultar("clientes");
                                while ($row = mysqli_fetch_array($rec)) {

                                    $id_cliente = $row['0'];
                                    $nombre_cliente = $row['1'];
                                    $apellidos_cliente = $row['2'];
                                    $ciudad_cliente = $row['3'];
                                    $celular_cliente = $row['4'];
                                    $direccion_cliente = $row['5'];
                                    $email_cliente = $row['6'];
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td class="cart_product">
                                                <h4><?php echo $id_cliente ?></h4>
                                            </td>
                                            <td class="cart_description">
                                                <h4><?php echo $nombre_cliente ?></h4>
                                            </td>
                                            <td class="cart_description">
                                                <h4><?php echo $apellidos_cliente ?></h4>
                                            </td>
                                            <td class="cart_total">
                                                <h4><?php echo $ciudad_cliente ?> </h4>
                                            </td>
                                            <td class="cart_total">
                                                <h4><?php echo $email_cliente ?> </h4>
                                            </td>

                                        </tr>
                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </section> <!--/#cart_items-->
            </div>
        </div>
        <div id="categorias">
            <div class="features_items"><!--features_items-->
                <h2 class = "title text-center">Categorias</h2>
                <div id="datosBusqueda"
                     <div class="nuevo">
                        <ul>                      
                            <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Agregar Categoria</a></li>
                        </ul>
                    </div><br>
                    <form class="form-horizontal" role="form" id="datos_cotizacion">
                        <div class="form-group row">
                            <label for="q" class="col-md-2 control-label">Nombre</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="q" placeholder="Nombre  del producto" onkeyup='load(1);'>
                            </div>
                            <button type="button" class="btn btn-default" onclick='load(1);'>
                                <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                            <span id="loader"></span>
                        </div>
                    </form>
                </div>
                <section id="cart_items">
                    <div class="container">
                        <div class="table-responsive cart_info">
                            <table class="table table-condensed">
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image"> Id </td>
                                        <td class="image"> Categoria</td>
                                        <td class="image"> Acciones </td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <?php
                                require_once 'dataBase.php';
                                $db = new dataBase();
                                $db->conectar();
                                $rec = $db->consultar("categorias");
                                while ($row = mysqli_fetch_array($rec)) {
                                    $id_ca = $row['0'];
                                    $nombre_ca = $row['1'];
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td class="cart_product">
                                                <h4><?php echo $id_ca ?></h4>
                                            </td>
                                            <td class="cart_description">
                                                <h4><?php echo $nombre_ca ?></h4>
                                            </td>
                                    <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                                        <td class="cart_total">
                                           
                                            <button class="btn btn-danger btn-large" name="borrarCategoria" value="<?php echo $id_ca ?>"><span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span> </button>
                                        </td>
                                    </form>
                                    </tr>

                                    </tr>


                                    </tbody>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </section> <!--/#cart_items-->
            </div>
        </div>
        <!--//Gallery -->
        <div class = "footer-w3l">
            <p> &copy;
                2017 Inspire . All Rights Reserved | Design by <a href = "http://w3layouts.com">W3layouts</a></p>
        </div>
        <div class = "pop-up">
            <div id = "small-dialog2" class = "mfp-hide book-form">
                <h3>Nuevo Libro</h3>
                <form id = "nuevoUsuario" method = "post" action = "eventos.php" enctype="multipart/form-data" >
                    <input type = "text" name = "nombreLibro" id = "nombreLibro" placeholder = "Nombre del  libro" required = ""/>
                    <input type = "text" name = "autor" id = "autor" placeholder = "Autor" required = ""/>
                    <input type = "text" name = "editorial" id = "editorial" placeholder = "Editorial " required = ""/>
                    <select name = "categoria" id = "categoria" >
                        <option disabled selected hidden> Categoria</option>
                        <?php
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->Conectar();
                        $res = $db->consultar("categorias");
                        while ($row = mysqli_fetch_array($res)) {
                            $id_categori = $row['id_categoria'];
                            $nombre_categori = $row['nombre'];
                            ?>
                            <option value="<?php echo $id_categori ?>"><?php echo $nombre_categori ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <input type="text" name="precio" id="precio" placeholder="Precio " required=""/>
                    <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" required=""/>
                    <input type="text" name="resumen" id="resumen" class="email" placeholder="Resumen" required=""/>
                    <label for="fotografia" id="foto"> Imagen:</label> <input name="foto" type="file" id ="foto"  required/>
                    <input type= "submit" value="Guardar" name= "guardarLibro" id="guardarLibro"> 
                </form>
            </div>
        </div>
        <div class = "pop-up">
            <div id = "small-dialog" class = "mfp-hide book-form">
                <h3>Nueva Categoria</h3>
                <form id = "nuevoUsuario" method = "post" action = "eventos.php" >
                    <input type = "text" name = "nombreCategoria" id = "nombreCategoria" placeholder = "Nombre de la categoria" required = ""/>
                    <input type= "submit" value="Guardar" name= "guardarCategoria" id="guardarLibro"> 
                </form>
            </div>
        </div>

    </body>
</html>
