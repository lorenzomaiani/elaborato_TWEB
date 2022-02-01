<section name="mainSection">
    <h2 name="subTitle">Welcome Admin</h2>
    <table>
        <thead>
            <tr>
                <td>Username</td>
                <td>Date</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_SESSION["username"];?></td>
                <td><?php echo date("Y-m-d");?></td>
            </tr>
        </tbody>
    </table>
    

    <a href="productManager.php?action=1" name="option">Insert new product</a>
    <a href="productManager.php?action=3" name="option">Show all product</a>

    


    <?php if(isset($params["product"])):?>
        <?php foreach($params["product"] as $product):?>
            <article>
                <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
                <h2><?php echo $product["productname"]?></h2>
                <div name="div">
                    <a href="productManager.php?action=2&productname=<?php echo $product["productname"]?>" name="removeProduct">Remove Product</a>
                </div>
            </article>
        <?php endforeach;?>
    <?php endif;?>
</section>