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

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        session_unset($_SESSION['completado']);

    }
    return $deleted;
}
?>
    


