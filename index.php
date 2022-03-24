<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
    $title = "Patterns";
    echo "$title"
    ?>
    </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/index.css">
</head>
<body class="root">
  <!-- Navigation -->
  <?php require "./blocks/navigation/navigation.php" ?>
  <main class="page">
    <!-- Header -->
    <?php require "./blocks/header/header.php" ?>

    <!-- Patterns -->
    <?php require "./blocks/patterns/patterns.php" ?>
  </main>


  
</body>
</html>