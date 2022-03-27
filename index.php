<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
    $title = "Patterns";
    echo "$title";
    ?>
    </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1555de2a22.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style/index.css">
</head>
<body class="root">
  <!-- Navigation -->
  <?php require "./views/navigation.php" ?>
  <main class="page">
    <!-- Header -->
    <?php require "./views/header.php" ?>

    <!-- Patterns -->
    <?php require "./views/patterns.php" ?>
  </main>


  <script src="./script/script.js"></script>
</body>
</html>