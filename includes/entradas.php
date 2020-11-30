



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

<?php $entries = getEntries($db); 

if(!empty($entries)):
while($entrie = mysqli_fetch_assoc($entries)) :
?>
 <li class="tarjeta" data-id="<?=$entrie['id']?>">
    <div class="tarjeta_foto">
        <img class="tarjeta_foto-avatar" src="./assets/img/cubes.png" alt="">
    </div>
    <div class="tarjeta_texto">
        <h3 class="tarjeta_titulo"><?=$entrie['titulo'] ?>    </h3>
        <span class="tarjeta_genero">
            Gendre: <?= $entrie['genero'] ?>
        </span>
        <p class="tarjeta_description">
            <?= substr($entrie['descripcion'], 0, 180)."..." ?>
        </p>
        <p class="tarjeta_autor">
        <span><strong> Author: </strong> <?= $entrie['nombre usuario']?></span>
        </p>
        <p class="tarjeta_date">
            <strong>Created at:</strong>  <?= $entrie['fecha'] ?>
        </p>
    

    </div>
</li>

<?php 
    endwhile;
    endif;
?>

</li>
</ul>
<div id="see-all">
<button  class="btn-view"><a href="">VER TODAS</a> </button>

</div>
</section>