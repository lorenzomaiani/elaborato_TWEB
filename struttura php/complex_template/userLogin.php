<section name="mainSection">
    <h2 name="subTitle">Goodmorning <?php echo $params["user"]?></h2>
    <form action="search.php" method="GET">
        <input type="text" placeholder="Search" name="searchBox"/>
        <input type="submit" value="Search"/>
    </form>

    <?php foreach($params["product"] as $product):?>
    <article>
        <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
        <h2><?php echo $product["productname"]?></h2>
        <div>
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

