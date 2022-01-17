<?php
   require_once __DIR__ . "/database.php";
   require_once __DIR__ . "/Recipe.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ricette</title>
</head>
<body>
   
   <?php foreach ($recipes as $recipe) : 
      $new_recipe = new Recipe($recipe['name']);
      $new_recipe->ingrediants = $recipe['ingrediants'];
      $new_recipe->cooking_time = $recipe['cooking_time'];
      $new_recipe->difficulty = $recipe['difficulty'];
      $new_recipe->description = $recipe['description'];
      $new_recipe->setProcess("potato");
   ?>
   <div>
      <h2><?php echo $new_recipe->name; ?></h2>
      <h4>Ingredienti:</h4>
      <ul>
         <?php foreach ($new_recipe->ingrediants as $ingrediant) : ?>
            <li><?php echo $ingrediant; ?></li>
         <?php endforeach; ?>
      </ul>
      <p>Tempo di cottura: <strong><?php echo $new_recipe->cooking_time; ?></strong> minuti</p>
      <p>Difficoltá: <strong><?php echo $new_recipe->getDiffuculty(); ?></strong></p>
      <h4>Descrizione:</h4>
      <p><?php echo $new_recipe->getExceptedDescription(30); ?></p>
      <h4>Procedimento:</h4>
      <p><?php echo $new_recipe->process; ?></p>
   </div>
   <?php endforeach; ?>

</body>
</html>