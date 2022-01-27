<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $params["title"];?></title>
        <link rel="stylesheet" href="css/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php if(isset($params["script"])):?>
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="js/cookie.js"></script>
            <script src="js/product.js"></script>
        <?php endif;?>
    </head>

    <body>
        <header class="header">
            <h1 name="title"><?php echo $params["mainTitle"]?></h1>
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="container">
                <a href="" class="navbar-brand ms-left">Pagina del negozio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="#">
                    <input type="text" name="barra ricerca" placeholder="Cerca">
                </form>
                <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">INFO</a></li>
                    <li class="nav-item"><a href="shop.php" class="nav-link">SHOP</a></li>
                </ul>
           
            
                 </div>
        </div>
    </nav>
        </header>

        <main>
            <?php 
                require($params["content"]);    
            ?> 
        </main>

        <?php
        if(!isset($_SESSION["cookie"])):
            if(isset($params["cookie"])):?>
            <footer name="cookie">
                <form action="#">
                    <label>Accept all cookies? <input name="cookie" type="submit" value="OK"/></label>
                </form>
            </footer>
        <?php endif;
        endif;?>
    </body>
</html>