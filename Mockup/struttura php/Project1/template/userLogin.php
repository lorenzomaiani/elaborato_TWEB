<section name="mainSection">
    <?php if(isset($params["showsubtitle"])): ?>
    <h2 name="subTitle"><?php echo $params["timeString"]." ".$params["user"]?></h2>
    <?php endif; ?>
    
    <?php if(isset($_params["numMessage"]) && $params["numMessage"] > 0): ?>
        <form action="#" name="message">
            <select name="message">
                <option>Message <?php echo $params["numMessage"]?></option>
                <?php foreach($params["message"] as $message): ?>
                    <option><?php echo $message["messagescontent"]?></option>
                <?php endforeach; ?>
            </select>
        </form>
    <?php endif;?>

    <form action="search.php" method="GET">
        <input type="text" placeholder="Search" name="searchBox"/>
        <input type="submit" value="Search"/>
    </form>

    <?php foreach($params["product"] as $product):?>
    <article>
        <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
        <h2><?php echo $product["productname"]?></h2>
        <div>
            <p>Price: <?php echo $product["price"]?></p>
            <a href="shop.php?action=1&username=<?php echo $_SESSION["username"]?>&productname=<?php echo $product["productname"]?>" name="cart">Add to cart</a>
        </div>
        <footer>
            <button>More Info</button>
            <p name="longDesc"><?php echo $product["productlabel"]?></p>
        </footer>
    </article> 
    <?php endforeach; ?>

    <?php if(isset($params["homepageFooter"])):?>
        <footer>
            <form action="login.php">
                <input type="submit" value="Back to homepage"/>
            </form>   
        </footer>
    <?php endif; ?>
</section>

