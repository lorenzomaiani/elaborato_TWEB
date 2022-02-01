<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $params["title"];?></title>
        <link rel="stylesheet" href="css/style.css"/>
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
            <nav>
                <ul>
                    <li><a href="index.php" name="header">Home</a></li>
                    <?php if (isset($params["showLogin"])):?>
                    <li><a href="login.php" name="header">Login</a></li>
                    <?php endif;?>
                    <?php if(isset($params["showShop"])):?>
                    <li><a href="shop.php?action=2" name="header">Shop</a></li>
                    <?php endif;?>
                    <?php if(isset($params["showProducts"])):?>
                    <li><a href="login.php" name="header">Products</a>
                    <?php endif;?>
                    </li>
                </ul>
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