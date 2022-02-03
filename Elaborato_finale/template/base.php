<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $params["title"]?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="login.js" type="text/javascript"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top p-2 navbar-dark">
          <a href="index.php" class="navbar-brand ">Pagina del negozio</a>

      <?php if(isset($params["navLogin"])):?>
          <div class="col-md-3 offset-md-4">
            <h1 class="my-auto" name="loginTitle">Login</h1>
          </div>
      
      <?php endif;?>

      <?php if(isset($params["navHomepage"])):?>
              <form class ="d-flex" style="width: 100%; margin-left: 20%;" action="search.php" methods="GET">
                  <input class="px-2 search" type="search" name="barra ricerca" placeholder="Cerca" aria-label="Cerca" name="searchBox"/>
                  <button class="btn0" type="submit">Cerca</button>
              </form>
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
                <div class="dropdown" style="width: 100%;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi-bell"></i> <span class="badge">4</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
    <?php endif;?>
    </nav>

    
      <main>
        <?php require($params["content"]);?>
      </main>


        <footer class="fixed-bottom">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="" class="navbar-brand ">Pagina del negozio</a>
                  <div class="container">
                      <div class="collapse navbar-collapse" id="navmenu">
                          <ul class="navbar-nav ms-auto">
                              <li class="nav-item"><a href="#" class="nav-link">contatti</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">INFO</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">cose</a></li>
                          </ul>
                    
                      
                      </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                  
                  
                  </div>
            </nav>
        </footer>
    </body>
</html>