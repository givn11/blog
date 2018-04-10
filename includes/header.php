<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Какой-то логотип</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form name="search" method="post" action="includes/search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
    </form>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <? foreach($mainMenu as $name => $link): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?=$link?>"><?=$name?></a>
            </li>
          <? endforeach;?>
      </ul>
    </div>
  </div>
</nav>