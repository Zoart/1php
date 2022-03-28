<aside class="navigation">
  <ul class="navigation__list">
    <li class="navigation__list-item">
      <div class="navigation__dropdown-button">
        <a class="navigation__link  
      <?php if ($title == "Software design pattern") {
        echo "active";
      } ?>" href="../../page/design_patterns.php">
      Software design pattern
    </a>
    <?php
      if ($title == "Software design pattern" or $title == "Patterns"):
    ?>
    <div class="navigation__dropdown-container animation">
      <a class="navigation__dropdown-link <?php 
      if ($title == "Patterns") {
        echo "active";
      } ?>" href="../../index.php">
        Patterns
      </a>
      <?php endif; ?>
    </li>

    <li class="navigation__list-item">
      <a class="navigation__link  
      <?php if ($title == "OOP") {
        echo "active";
      } ?>" href="../../page/oop.php">OOP</a>
      <?php
        if ($title == "OOP" or $title == "Objects and classes"):
      ?>
      <div class="navigation__dropdown-container animation">
        <a class="navigation__dropdown-link 
        <?php if ($title == "Objects and classes") {
        echo "active";
      } ?>" 
        href="../../page/objects_and_classes.php">
          Objects and classes
        </a>
        <?php endif; ?>
    </li>
  </ul>
</aside>