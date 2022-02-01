<section name="mainSection">
    <h2 name="subTitle">CheckOut Now!</h2>

    <form action="#" method="POST">
        <ul>
            <li><label>Username <input type="text"></label></li>
            <li><label>Destination address: <input type="text" name="deliveryAddress"/></label></li>
            <li class="card"><label>Card code <input type="text" name="cardInfo"></label></li>
            <li class="card"><label>CVV <input type="password" name="cvv" maxlength="3"></label></li>
        </ul> 
    </form>
    
    <h2 name="subTitle">Your products in cart</h2>
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

</section>