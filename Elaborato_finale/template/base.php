<!DOCTYPE html>
<html lang="it">
    <head>
        <title><?php echo $params["title"]?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="login.js" type="text/javascript"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-dark p-2 navbar-dark">
        <div class="container">
          <a href="index.php" class="navbar-brand ">Pagina del negozio</a>

      <?php if(isset($params["navTitle"])):?>
          <div class="col-md-3 offset-md-4">
            <h1 class="my-auto"></h1>
          </div>
      <?php endif;?>

    <?php if(isset($params["navHomepageUser"])):?>  <!--header mostrato nel caso di user-->
      <div class="col-md-3 offset-md-2">
              <form class ="d-flex ms-lg-5" style="width: 100%;" action="search.php" methods="GET">
                  <input class="px-2 search" type="search" name="searchBox" placeholder="Cerca" aria-label="Cerca"/>
                  <button class="btn0" type="submit">Cerca</button>
              </form>
            </div>
              <div class="container">
                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                            <li class="nav-item"><a href="shop.php?action=2" class="nav-link">CARRELLO</a></li>
                        </ul>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="dropdown" >
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-bell"></i> <span class="badge"><?php echo $params["numNotifiche"]?></span>
                </button>
                <?php if($params["numNotifiche"] > 0):?>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <?php foreach($params["notifiche"] as $notifiche):?>
                  <li><a class="dropdown-item" href="#"><?php echo $notifiche["testonotifica"]?></a></li>
                  <?php endforeach; ?>
                  <li><a class="dropdown-item" href="notifiche.php?action=2">Segna tutto come già letto<i class="bi-x"></i></a></li>
                </ul>
                <?php endif; ?>
              </div>
    <?php endif;?>

    <?php if(isset($params["navHomepageAdmin"])):?> <!--Header mostrato in caso di Admin-->
      <div class="col-md-3 offset-md-2">
          <form class ="d-flex ms-lg-5" style="width: 100%;" action="search.php" methods="GET">
            <input class="px-2 search" type="search" name="searchBox" placeholder="Cerca" aria-label="Cerca"/>
            <button class="btn0" type="submit">Cerca</button>
          </form>
    </div>
          <div class="container">
              <div class="collapse navbar-collapse" id="navmenu">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                      <li class="nav-item"><a href="productManager.php?action=1" class="nav-link">Aggiungi item</a></li>
                  </ul>
              
              
                    </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          <div class="dropdown" style="width: 100%;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi-bell"></i> <span class="badge"><?php echo $params["numNotifiche"]?></span>
          </button>
          <?php if($params["numNotifiche"] > 0):?>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php foreach($params["notifiche"] as $notifiche): ?>
              <li><a class="dropdown-item" href="#"><?php echo $notifiche["testonotifica"]?></a></li>
            <?php endforeach;?>
            <li><a class="dropdown-item" href="notifiche.php?action=2">Segna tutto come già letto <i class="bi-x"></i></a></li>
          </ul>
          <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    </nav>

    
      <main>
        <?php require($params["content"]);?>
      </main>


    </body>
</html>