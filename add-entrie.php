<?php 

if(isset($_POST)){

    require_once './includes/connect.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo'])  : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false; 
    $categorie = isset($_POST['categorie']) ? (int)$_POST['categorie'] : false;
    
    $usuario = $_SESSION['usuario']['id'];
    
    $errores = array();
    
    if(empty($titulo)){

        $errores['titulo'] = 'Is not a Valid Title';
    } 
    if(empty($descripcion)){
        
        $errores['descripcion'] = 'Is not a Valid Description';
    }
    if(empty($categorie) && !is_numeric($categorie)){
        
        $errores['categorie'] = 'Is not a Valid Categorie';
    }


if(count($errores ) == 0) {

    $sql = "insert into entradas values(null, $usuario, $categorie, '$titulo', '$descripcion', curdate())";
    $save = mysqli_query($db, $sql);
    header('Location: index.php');

} else {
    $_SESSION['errores_entrada'] = $errores;
    header('Location: newAdd.php');
}

}


?>