<?php

function showError ($errores, $field) {
    $alerta = '';
    if (isset($errores[$field]) && !empty($field)){
        $alerta = "<div class='alert alert-error'>".$errores[$field].'</div>';
    }
    return $alerta;
}

function deleteError (){
    $deleted = null;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $deleted = true;
    }
    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $deleted = true;

    }
    if(isset($_SESSION['success'])){
        $_SESSION['success'] = null;
        $deleted = true;

    }
    return $deleted;
}

//CRUD 


function getCategories ($db) {
    $sql = "select * from categorias order by id asc";

    $categorias = mysqli_query($db, $sql);

    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    } 
    return $result;
}


//ENTRADAS

function getEntries ($db) {
    $sql =  "select usuarios.nombre as 'nombre usuario', categorias.nombre as 'genero', entradas.id, entradas.descripcion, entradas.titulo, entradas.fecha from entradas inner join usuarios on usuarios.id = entradas.usuario_id inner join categorias on categorias.id = entradas.categoria_id order by fecha desc";

    $entries = mysqli_query($db, $sql);

    $result = array();
    if($entries && mysqli_num_rows($entries) >= 1){
        $result = $entries;

    } else {
        $result = mysqli_error($sql);
    }

    return $result;
}


?>
    


