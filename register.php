<?php 
if (isset($_POST)) {
    //CONEXION CON LA BASE DE DATOS
    require_once './includes/connect.php';
    //
    if(!isset($_SESSION)) {
        session_start();

    }
    $name =      isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : null;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : null;
    $email =     isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : null;
    $password =  isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : null;

    $errores = array();

    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
      $valid_name = true;
    } else {
        
        $valid_name = false;
        $errores['name'] = "Is not a valid name";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
      $valid_apellidos = true;
    } else {
        $valid_apellidos = false;
        $errores['apellidos'] = "Is not a valid surname";
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
      $valid_email = true;
    } else {
        $valid_email = false;
        $errores['email'] = "Is not a valid email";
    }
    if(!empty($password)){
      $valid_password = true;
    } else {
        $valid_password = false;
        $errores['password'] = "Is not a valid password";
    }

    $save_user = false;

    if(count($errores) == 0) {
        $save_user = true;
        //CIFRAR LA CONTRASENIA 
        $password_safe = password_hash($password, $PASSWPORD_BCRYPT, ['cost'=> 4]);
        // var_dump($password_safe);
        // var_dump(password_verify($password, $password_safe));

        //Insert into usuarios
        $sql = "INSERT INTO usuarios VALUES (null,'$name', '$apellidos', '$email', '$password_safe', curdate())";
        $save_user = mysqli_query($db, $sql);
        var_dump(mysqli_error($db));


        if($save_user) {
            $_SESSION['success'] = 'success';


        } else {
            $_SESSION['errores']['general'] = 'Fail';
        }

    } else {
        $_SESSION['errores'] = $errores;
        
    }


    // // var_dump($_POST);
    // var_dump($errores);

    header('Location: index.php');
}


?>