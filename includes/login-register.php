<section class="section-login">
<aside id="sidebar">  
    <?php if(isset($_SESSION['usuario'])): ?>   

    <div id="user-logged" class="">
        <h3 class="user-name">Welcome <?=$_SESSION['usuario']['nombre']?></h3>
    <?php $isLogged = true ?>
        <button class="btn-logout bt" type="text" href="./logout.php" value="Salir">
            <a href="./logout.php">LogOut</a>
        </button>
        <button class="btn-profile bt" type="text" href="./profile.php" value="Perfil">
            <a href="./profile.php">Perfil</a>
        </button>

        <button class="btn-profile bt" type="text" href="./category.php" value="Category">
        <a href="./newCategorie.php">Categoria</a>
        </button>
    <button class="btn-addNew bt" type="text" href="./newAdd.php" value="Add">
    <a href="./newAdd.php">Agregar</a>
    </button>   

           
        </div>
    <?php else : ?>
        <?php if(isset($_SESSION['error-login'])) :?>
        <div class="alert alert-error">
            <h3><?=$_SESSION['error-login']?></h3>
        </div>
        <?php endif ?>
    <?php endif ?>    

    <?php if(!$isLogged) : ?>
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
    <?php endif; ?>
</aside>

</section>
