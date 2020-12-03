
<?php 

if(isset($_POST)){
    require_once 'includes/connect.php';
    
    
    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    
    
    $errores = array();
    
    $update_user = false;
    
    if($nombre && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $valid_name = true;
    } else {
        $valid_name = false;
        $errores['name'] = 'the name isnt valid';
    }
    
    if($apellidos && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $valid_name = true;
    } else {
        $valid_name = false;
        $errores['apellidos'] = 'the name isnt valid';
    }
    
    if(count($errores) == 0) {
        $update_user = true;
        
        $usuario_id = $_SESSION['usuario']['id'];
        $sql = "update usuarios set nombre = '$nombre', apellidos = '$apellidos' where id = $usuario_id ";
        $update = mysqli_query($db, $sql);
        
        if($update){
            echo('meleco');
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['success'] = 'Your profile was succesfully updated';
        } else {
            $_SESSION['errores']['general'] = 'Update Failed!';
        }
    } else {
        $_SESSION['errores'] = $errores;
    }

}

header('Location: profile.php');


?>