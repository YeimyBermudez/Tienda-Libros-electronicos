<?php

session_start();

require 'dataBase.php';
if (isset($_POST['enviarCliente'])) {
    $db = new dataBase();
    $db->conectar();
    $tipo = "Cliente";
    $db->insertar(array($_POST['cedula'], $_POST['nombre'], $_POST['apellidos'], $_POST['ciudad'], $_POST['telefono'], $_POST['direccion'], $_POST['correoElectronico'], $_POST['contraseña'], $tipo), "clientes");
    header('Location: index.php');
}
if (isset($_POST['guardarCategoria'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertarDatos(array($_POST['nombreCategoria']), "categorias");
    require 'administrador.php';
}
if (isset($_POST['agregarRec'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertarRecomendacion(array($_POST['agregarRec']), "recomendaciones");
    header('Location: administrador.php');
}
if (isset($_POST['agregarCarrito'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertarCarrito(array($_POST['agregarCarrito']), "carrito");
    header('Location: index.php');
}
if (isset($_POST['agregarFavoritos'])) {
    $db = new dataBase();
    $db->conectar();
    $idFav = $_SESSION['id_cliente'];
    $db->insertarFavoritos(array($idFav, $_POST['agregarFavoritos']), "favoritos");
    header('Location: index.php');
}

if (isset($_POST['guardarLibro'])) {
    $db = new dataBase();
    $db->conectar();
    $foto = $_FILES["foto"]["name"];
    $tr = explode(".", $foto);
    $exten = $_POST['nombreLibro'] . "." . end($tr);
    $ruta = $_FILES["foto"]["tmp_name"];
    $destino = "libros/" . $foto;
    $destino2 = "libros/" . $exten;
    copy($ruta, $destino);
    rename($destino, $destino2);
    $db->insertarLibro(array($_POST['categoria'], $_POST['nombreLibro'], $_POST['editorial'], $_POST['autor'], $_POST['precio'], $_POST['cantidad'], $_POST['resumen'], $destino2), "libros");
    header('Location: administrador.php');
}
if (isset($_POST['borrarLibro'])) {
    $db = new dataBase();
    $db->conectar();
    $id_libro = $_POST['borrarLibro'];
    $db->eliminarLibro($id_libro);
    header('Location: administrador.php');
}
if (isset($_POST['borrarCategoria'])) {
    $db = new dataBase();
    $db->conectar();
    $id_cat = $_POST['borrarCategoria'];
    $db->eliminarCategoria($id_cat);
    header('Location: administrador.php');
}
if (isset($_POST['borrarRecomendacion'])) {
    $db = new dataBase();
    $db->conectar();
    $id_rec = $_POST['borrarRecomendacion'];
    $db->eliminarRecomendacion($id_rec);
    header('Location: administrador.php');
}
if (isset($_POST['borrarCarrito'])) {
    $db = new dataBase();
    $db->conectar();
    $id_carrito = $_POST['borrarCarrito'];
    $db->eliminarCarrito($id_carrito);
    header('Location: carrito.php');
}
if (isset($_POST['borrarFavoritos'])) {
    $db = new dataBase();
    $db->conectar();
    $id_fav = $_POST['borrarFavoritos'];
    $db->eliminarFavoritos($id_fav);
    header('Location: perfil.php');
}
?>
