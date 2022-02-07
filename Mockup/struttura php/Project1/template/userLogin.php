<section name="mainSection">

    <?php if(isset($params["showsubtitle"])): ?>
    <h2 name="subTitle"><?php echo $params["timeString"]." ".$params["user"]?></h2>
    <?php endif; ?>
    

    <?php if(isset($params["numMessage"]) && $params["numMessage"] > 0): ?>
        <form action="messages.php" method="GET" name="message">
            <select name="message">
                <option>Message <?php echo $params["numMessage"]?></option>
                <?php foreach($params["message"] as $message): ?>
                    <option><?php echo $message["messagescontent"]?></option>
                <?php endforeach; ?>
            </select>
        </form>
        <a href="messages.php?action=2&username=<?php echo $_SESSION["username"]?>" name="header">Delete all messages</a>
    <?php endif;?>


    <form action="search.php" method="GET">
        <input type="text" placeholder="Search" name="searchBox"/>
        <input type="submit" value="Search"/>
    </form>


    <?php foreach($params["product"] as $product):?>
        <?php if($product["quantity"] > 0):?>
        <article>
            <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
            <h2><?php echo $product["productname"]?></h2>
            <div>
                <p>Quantity: <?php echo $product["quantity"];?></p>
                <p>Price: <?php echo $product["price"]?></p>
                <a href="shop.php?action=1&username=<?php echo $_SESSION["username"]?>&productname=<?php echo $product["productname"]?>" name="cart">Add to cart</a>
            </div>
            <footer>
                <button>More Info</button>
                <p name="longDesc"><?php echo $product["productlabel"]?></p>
            </footer>
        </article>
        <?php endif;?>
    <?php endforeach; ?>

    <?php if(isset($params["homepageFooter"])):?>
        <footer>
            <form action="login.php">
                <input type="submit" value="Back to homepage"/>
            </form>   
        </footer>
    <?php endif; ?>
</section>

