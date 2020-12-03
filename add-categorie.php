<?php 

if(isset($_POST)){

    require_once './includes/connect.php';
    
    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name'])  : false;
    
    
    $errores = array();
    
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){

    $valid_name = true;
  } else {
      
      $valid_name = false;
      $errores['name'] = "Is not a valid name";
  }

if(count($errores ) == 0) {

    $sql = "insert into categorias values(null, '$name')";
    $save = mysqli_query($db, $sql);

}

}

header('Location: index.php');

?>