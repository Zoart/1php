<?php
  $description = [
    "OOP" => "
    <strong>Object-oriented programming (OOP) </strong> is a programming paradigm based on the concept 
    of \"objects\", which can contain data and code: data in the form of fields 
    (often known as attributes or properties), and code, in the form of procedures 
    (often known as methods).
    ",
    "Software design pattern" => "
    In software engineering, a <strong>software design pattern</strong> is a general, reusable solution 
    to a commonly occurring problem within a given context in software design. It is 
    not a finished design that can be transformed directly into source or machine code. 
    Rather, it is a description or template for how to solve a problem that can be used 
    in many different situations. Design patterns are formalized best practices that 
    the programmer can use to solve common problems when designing an application or 
    system.
    ",
    "Objects and classes" => "
    Languages that support object-oriented programming (OOP) typically use inheritance for 
    code reuse and extensibility in the form of either classes or prototypes. Those that 
    use classes support two main concepts:
    <ul>
      <li class='description__text'>
      <strong>Classes</strong> – the definitions for the data format and available procedures for a given 
      type or class of object; may also contain data and procedures (known as class methods) 
      themselves, i.e. classes contain the data members and member functions
      </li>
      <li class='description__text'>
      <strong>Objects</strong> – instances of classes
      </li>
    </ul>
    ",
  ]
?>

<section class="description">
  <p class="description__text">
      <?php
        // if ($title == "OOP") {
          echo "$description[$title]";
        // }
      ?>
  </p>
</section>
