<?php 
require_once './includes/redirect.php';

require_once './includes/header.php';
require_once './includes/login-register.php';



?>

<section id="section-entradas" class="crear-entrada">
    <h2 class="header-categoria">CREAR CATEGORIAS <h2>
  
    <form class="add-categorie-form" action="add-categorie.php" method="POST">
        <label  for="name" for="">Nombre</label>
        <input  type="text" name="name">
        <button class="" type="submit" class="btn" value="save">Add</button>
    </form>
</section>

<?php 
require_once './includes/footer.php'; ?>