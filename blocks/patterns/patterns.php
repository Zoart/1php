<section class="patterns">
  
  <div class="wrapper">

    <?php
      $text = [
      "First",
      "Second",
      "Therd",
      "4",
      "5",
    ];

    $heading = [
      "Заголовок1",
      "Заголовок2",
      "Заголовок3",
      "Заголовок4",
      "Заголовок5",
    ];

      $am_heading = count($heading);
      $am_text = count($text);

      if ($am_heading = $am_text) {
        $n = $am_heading;
      }
      elseif ($am_heading < $am_text) {
        $n = $am_heading;
      }
      else {
        $n = $am_text;
      }
      

      for ($i = 0; $i < $n; $i++):
    ?>
    <div class="patterns__block">
      <img class="blocks__img" src="./img/<?php echo ($i + 1) ?>.png" alt="">
      <h2><?php echo "$heading[$i]" ?></h2>
      <p><?php echo "$text[$i]" ?></p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <?php endfor; ?>

   </div>
</section>