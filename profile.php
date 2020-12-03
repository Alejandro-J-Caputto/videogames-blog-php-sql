<?php
require_once './includes/redirect.php';

require_once './includes/header.php';
require_once './includes/login-register.php';
?>

<section id="section-entradas" class="crear-entrada">




    <h2 class="header-categoria"> EDITAR PERFIL <h2>
    <?php 
          if(isset($_SESSION['success'])) :?>
          <div class='alert'>
            <?= $_SESSION['success'] ?>
          </div>
          
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class='fail'>

                <?= $_SESSION['errores']['general']?>
            </div>

        <?php endif; ?>

        <form action="update-user.php" method="post">
            <label for="name" >Nombre</label>
            <input type="text" name="name" value="<?=$_SESSION['usuario']['nombre']?>">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'name') : ''; ?> 
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'apellidos') : ''; ?> 
        
            <button class="btn" name="submit" type="submit" value="Actualizar">Update</button>
        </form>
        <?php deleteError(); ?>
</section>


<?php require_once './includes/footer.php'; ?>