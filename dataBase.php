<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dataBase
 *
 * @author Administrador
 */
class dataBase {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;

    function dataBase() {
        $this->usuario = "root";
        $this->contraseña = "";
        $this->servidor = "localhost";
        $this->nomBD = "tiendalibros";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->contraseña) or died("error al conectar la base  de datos" . mysql_error());
        mysqli_select_db($this->link, $this->nomBD);
        echo '';
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . " values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }

    function insertarDatos($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . "(nombre)  values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }

    function insertarLibro($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . "(id_categoria, nombre_libro, editorial, autor, precio, cantidad, resumen, imagen)  values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }

    function insertarRecomendacion($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . "(id_libro)  values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }

    function insertarCarrito($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . "(id_libro)  values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }
      function insertarFavoritos($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . " '" . $val . "' , ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . "(id_cliente, id_libro)  values(" . $valoresFila . ");") or die(' la consulta fallo ' . mysqli_error($this->link));
    }

    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = " select * from " . $tabla;
        } else if ($dato == "") {
            $query = " select " . $campo . " from " . $tabla;
        } else {
            $query = " select * from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysqli_query($this->link, $query);
//        $res=  mysql_query($query);
        return $res;
    }

    function ActualizarActivo($fila = array(), $tabla = "", $id_activo = "") {
        $actualizar = "update " . $tabla . " set tipo_activo='$fila[0]',id_cliente='$fila[1]' , categoria='$fila[2]',"
                . " marca='$fila[3]', modelo='$fila[4]', descripcion='$fila[5]', notas='$fila[6]"
                . "' where id_Activo='$id_activo'";
        $res = mysqli_query($this->link, $actualizar)or die("no se pudo actualizar" . mysqli_error($this->link));
        return $res;
    }

    function ActualizarCliente($fila = array(), $tabla = "", $id_cliente = "") {
        $actualizar = "update " . $tabla . " set correo='$fila[0]', num_hijos='$fila[1]', foto='$fila[2]' where id_cliente='$id_cliente'";
        $res = mysqli_query($this->link, $actualizar)or die("no se pudo actualizar" . mysqli_error($this->link));
        return $res;
    }

    function eliminarCategoria($id_categoria = "") {
        $eliminar = "delete from categorias where id_categoria='$id_categoria'";
        mysqli_query($this->link, $eliminar)or die("no se pudo eliminar" . mysqli_error($this->link));
    }

    function eliminarLibro($id_libro = "") {
        $eliminar = "delete from libros where id_libro='$id_libro'";
        mysqli_query($this->link, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }

    function eliminarRecomendacion($id_recomendacion = "") {
        $eliminar = "delete from recomendaciones where id_recomendacion='$id_recomendacion'";
        mysqli_query($this->link, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }

    function eliminarCarrito($id_venta = "") {
        $eliminar = "delete from carrito where id_venta='$id_venta'";
        mysqli_query($this->link, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }
      function eliminarFavoritos($id_favorito = "") {
        $eliminar = "delete from favoritos where id_favoritos='$id_favorito'";
        mysqli_query($this->link, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }
}

?>