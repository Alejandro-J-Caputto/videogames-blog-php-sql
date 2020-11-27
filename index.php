<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cd9184cd3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <title>Videogames</title>
</head>
<body>
    <div class="main-body" >


        <!-- Barra de navegacion -->
        <nav>
            <div class="nav-brand">
            <a href="#"><i class="nav-brand_logo fas fa-gamepad"></i></a>  
            </div>
            <ul class="mi-nav">
                <li> <a href="#">Categoria 1</a> </li>
                <li> <a href="#">Categoria 2</a> </li>
                <li> <a href="#">Categoria 3</a> </li>
                <li> <a href="#">Categoria 4</a> </li>
                <li> <a href="#">Sobre mi</a></li>
                <li> <a href="#">Contacto</a> </li>
            </ul>
        </nav>
    
    
        <!-- Header -->
        <!-- seccion contenido -->
        <div class="clearfix"></div>

        <h1 class="header-1">Recently Added</h1>
        <section id="section-entradas">
           <ul class="entradas">
               <li class="tarjeta">
                   <div class="tarjeta_foto">
                       <img class="tarjeta_foto-avatar" src="./assets/img/gta-v.jpg" alt="">
                    </div>

                   <div class="tarjeta_texto">
                       <h3 class="tarjeta_titulo">GTA V</h3>
                       
                       <p class="tarjeta_description">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam accusantium iusto ad unde sint natus, molestiae modi reprehenderit qui debitis dolores error, nihil sit repudiandae velit eligendi quam fugiat fuga?
                       </p>
                   </div>
                </li>
                <div class="clearfix"></div>

               <li class="tarjeta">
                   <div class="tarjeta_foto">
                       <img class="tarjeta_foto-avatar" src="./assets/img/assassins-creed-valhalla-imagen.jpeg" alt="">
                    </div>
                   <div class="tarjeta_texto">
                       <h3 class="tarjeta_titulo">GTA V</h3>
                       
                       <p class="tarjeta_description">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       </p>
                   </div>
               </li>
               <li class="tarjeta">
                   <div class="tarjeta_foto">
                       <img class="tarjeta_foto-avatar" src="./assets/img/cubes.png" alt="">
                    </div>
                   <div class="tarjeta_texto">
                       <h3 class="tarjeta_titulo">GTA V</h3>
                       
                       <p class="tarjeta_description">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       </p>
                   </div>
               </li>
               <li class="tarjeta">
                   <div class="tarjeta_foto">
                       <img class="tarjeta_foto-avatar" src="./assets/img/cubes.png" alt="">
                    </div>
                   <div class="tarjeta_texto">
                       <h3 class="tarjeta_titulo">GTA V</h3>
                       
                       <p class="tarjeta_description">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit.
                       </p>
                   </div>
               </li>
           </ul>
           <div id="see-all">
               <button  class="btn-view"><a href="">VER TODAS</a> </button>

           </div>
        </section>
       

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
              <form action="register.php" method="post">
                  <label for="name" >Nombre</label>
                  <input type="text" name="name">
                  <label for="apellido">Apellidos</label>
                  <input type="text" name="apellido">
                  <label for="email">Email</label>
                  <input type="email" name="email">
                  <label for="password">Constraseña</label>
                  <input type="password" name="password">
                  <button class="btn" type="submit" value="Entrar">Sing In</button>
              </form>
          </div>
      </aside>

        </section>
        <div class="clearfix"></div>
       
    
        <!-- footer -->

        <footer id="myFooter">
            <p>Desarrollado por Alejandro Caputto &copy; 2020</p>
        </footer>

    </div>
 
</body>
</html>