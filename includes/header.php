<?php require_once 'connect.php'; ?>
<?php require_once './includes/helpers/features.php' ?>
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
        <nav>
            <div class="nav-brand">
            <a href="#"><i class="nav-brand_logo fas fa-gamepad"></i></a>  
            </div> 
            <ul class="mi-nav" style="text-transform: uppercase;">
                <?php
                    $categories = getCategories($db);
                    while($categorie = mysqli_fetch_assoc($categories)): 
                ?>
                <li>
                     <a href="newCategorie.php?id=<?=$categorie['id']?>"><?=$categorie['nombre']?></a> 
                </li>
                
                <?php endwhile; ?>
                <li> <a href="#">Sobre mi</a></li>
                <li> <a href="#">Contacto</a> </li>
            </ul>
        </nav>
        <div class="clearfix"></div>