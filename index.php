<?php

require_once 'db.php';

?>

<!DOCTYPE html>
<html>

<head>
  <title>Movies</title>
  <link rel="stylesheet" type="text/css" href="partials/styles.css">
</head>

<body>

  <?php require_once 'partials/header.php'; ?>


  <div class="container">
    <?php foreach ($movies as $movie) : ?>
    <div class="card">
      <img src="<?php echo $movie["poster"]; ?>" class="poster">
      <div class="details">
        <h2 class="title"><?php echo implode(", ", $movie["titles"]); ?></h2>
        <p class="genres"><?php echo implode(", ", $movie["genres"]); ?></p>
        <p class="duration"><?php echo $movie["duration"]; ?> min</p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <?php require_once 'partials/footer.php'; ?>

</body>

</html>