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
        $deleted = session_unset($_SESSION['errores']);
    }
    if(isset($_SESSION['success'])){
        $_SESSION['success'] = null;
        session_unset($_SESSION['success']);
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



?>
    


