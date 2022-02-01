<section name="mainSection">
    <h2 name="subTitle">Your shop!</h2>

    <?php if(count($params["product"]) == 0):?>
        <h2 name="subTitle">No product in your cart!</h2>
    <?php endif;?>
    

    <?php foreach($params["product"] as $product):?>
        <article>
            <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
            <h2><?php echo $product["productname"]?></h2>
            <div>
                <p>Price: <?php echo $product["price"]?></p>
                <a href="shop.php?action=3&username=<?php echo $_SESSION["username"]?>&productname=<?php echo $product["productname"]?>" name="cart">Remove from cart</a>
            </div>
            <footer>
                <button>More Info</button>
                <p name="longDesc"><?php echo $product["productlabel"]?></p>
            </footer>
        </article> 
    <?php endforeach; ?>

    <?php if(count($params["product"]) > 0):?>
        <footer>
            <a href="shop.php?action=shop" name="buy">Buy Now!</a>
        </footer>
    <?php endif;?>
</section>