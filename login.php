<?php require_once './includes/connect.php';

if(isset($_POST)){
    if(isset($_SESSION['error-login'])){
        session_unset($_SESSION['error-login']);
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * from usuarios where email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login); // devuelve un array con los datos
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            //Crear sesion para decir que esta logeado
            $_SESSION['usuario'] = $usuario;
            if(isset($_SESSION['error-login'])){
                session_unset($_SESSION['error-login']);
            }
        } else {
            //Crear sesion de fallo 
            $_SESSION['error-login'] = "Email or pass incorrect";
        }
    } else {
        $_SESSION['error-login'] = "Email or pass incorrect";
    }

}
header('Location: index.php');
?>