<?php
require_once('../model/ModeloCategorias.php');

if (isset($_POST['accion'])) {
    $categorias = new ModeloCategorias();
    if ($_POST['accion'] == "getCategorias") {
        echo ($categorias->getCategorias());
    }
}
