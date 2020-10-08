<?php include_once("db.php") ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <!-- ricorda logo -->
    </header>
    <main>
      <div class="row">
        <?php foreach ($database as $disc): ?>
        <div class="disc">
            <div class="poster">
              <img src="<?php echo $disc["poster"]; ?>" alt="poster">
            </div>
            <div class="title">
              <h2> <?php echo $disc["title"]; ?></h2>
            </div>
            <div class="artist">
              <p> <?php echo $disc["author"]; ?> <br> <?php echo $disc["year"]; ?></p>
            </div>
        </div>
      <?php endforeach ?>
      </div>
    </main>
  </body>
</html>
