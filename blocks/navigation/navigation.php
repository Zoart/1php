<aside class="navigation">
  <ul class="navigation__list">
    <li class="navigation__list-item">
      <button class="navigation__dropdown-button">
        <i class="fa fa-caret-down"></i>
        <a class="navigation__link  
      <?php if ($title == "Patterns") {
        echo "active";
      } ?>" href="../../index.php">Patterns</a>
      </button>
      <?php
        if ($title == "Patterns"):
      ?>
      <div class="navigation__dropdown-container">
      
        <a class="navigation__dropdown-link" href="#">Link1</a>
        <a class="navigation__dropdown-link" href="#">Link2</a>
        <a class="navigation__dropdown-link" href="#">Link3</a>
      </div>
      <?php endif; ?>
    </li>

    <li class="navigation__list-item">
      <a class="navigation__link  
      <?php if ($title == "OOP") {
        echo "active";
      } ?>" href="../../page/oop.php">OOP</a>
    </li>
  </ul>
</aside>