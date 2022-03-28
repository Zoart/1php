<section class="patterns">
  
  <div class="wrapper">

    <?php
      $text = [
      "Artificial intelligence pattern for combining disparate sources 
      of data (see blackboard system)",
      "Avoid coupling the sender of a request to its receiver by giving 
      more than one object a chance to handle the request. 
      Chain the receiving objects and pass the request along the chain until an object handles it.",
      "Encapsulate a request as an object, thereby allowing for the 
      parameterization of clients with different requests, and the 
      queuing or logging of requests. It also allows for the support 
      of undoable operations.",
      "Given a language, define a representation for its grammar along 
      with an interpreter that uses the representation to interpret 
      sentences in the language.",
      "Provide a way to access the elements of an aggregate object 
      sequentially without exposing its underlying representation.",
    ];

    $heading = [
      "Blackboard",
      "Chain of responsibility",
      "Command",
      "Interpreter",
      "Iterator",
    ];

    $image = [
      "1.png",
      "2.jpg",
      "3.jpg",
      "4.jpg",
      "5.jpg",
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
      <img class="patterns__img" src="./img/<?php echo $image[$i] ?>" alt="">
      <h2><?php echo "$heading[$i]" ?></h2>
      <p><?php echo "$text[$i]" ?></p>
      <p><a class="btn btn-secondary" href="#">View details »</a></p>
    </div>
    <?php endfor; ?>

   </div>
</section>