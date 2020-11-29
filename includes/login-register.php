<?php require_once './includes/helpers/features.php' ?>
<section id="section-login">
<aside id="sidebar">   
    <div id="login" class="block-aside">


        <h3>Identificate</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Constraseña</label>
            <input type="password" name="password">
            <button class="btn" type="submit" value="Entrar">Log In</button>
        </form>
    </div>

    <div id="register" class="block-aside">
        <h3>Registrate</h3>
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
        
        <form action="register.php" method="post">
            <label for="name" >Nombre</label>
            <input type="text" name="name">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'name') : ''; ?> 
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'apellidos') : ''; ?> 

            <label for="email">Email</label>
            <input type="email" name="email">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'email') : ''; ?> 

            <label for="password">Constraseña</label>
            <input type="password" name="password">
            <?php  echo isset($_SESSION['errores']) ? showError($_SESSION['errores'], 'password') : ''; ?> 

            <button class="btn" name="submit" type="submit" value="Entrar">Sing In</button>
        </form>
        <?php deleteError(); ?>
    </div>
</aside>

</section>
