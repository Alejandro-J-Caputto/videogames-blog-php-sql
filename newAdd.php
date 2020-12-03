<?php 
require_once './includes/redirect.php';

require_once './includes/header.php';
require_once './includes/login-register.php';



?>

<section id="section-entradas" class="crear-entrada">
    <h2 class="header-categoria">CREAR ENTRADAS <h2>
  
    <form class="add-entrie-form" action="add-entrie.php" method="POST">
        <label  for="titulo" for="">Titulo de la entrada</label>
        <input  type="text" name="titulo">
        <?php  echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'titulo') : ''; ?> 

        <label  for="descripcion" for="">descripcion de la entrada</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        <?php  echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'descripcion') : ''; ?> 

        <label  for="categorie" for="">Categoria de la entrada</label>
        <select name="categorie">
            <?php 
                $categories = getCategories($db);
                if(!empty($categories)):
                while($categorie = mysqli_fetch_assoc($categories)) :
            ?>
                <option value="<?=$categorie['id']?>"><?=$categorie['nombre']?></option>

            <?php endwhile; endif; ?>         

        </select>
        <?php  echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'categorie') : ''; ?> 
        
        <button class="" type="submit" class="btn" value="save">Add</button>
    </form>
    <?php deleteError()?>
</section>

<?php 
require_once './includes/footer.php'; ?>