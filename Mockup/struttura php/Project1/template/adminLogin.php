<section name="mainSection">
    <h2 name="subTitle">Welcome Admin</h2>

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

                    <?php if($product["quantity"] == 0):   //sold-out case?>  
                        <p name="soldOut">Sold Out</p>
                        <form action="productManager.php" method="POST">
                            <label>Insert a quantity: <input type="text" name="quantityAdd"/></label>
                            <input type="hidden" name="productname" value="<?php echo $product["productname"]?>"/>
                            <input type="submit" value="Submit"/>
                        </form>
                    <?php endif;?>

                    <?php if($product["quantity"] > 0):?>
                        <p>Quantity: <?php echo $product["quantity"];?></p>
                        <a href="productManager.php?action=2&productname=<?php echo $product["productname"]?>" name="removeProduct">Remove Product</a>
                    <?php endif;?>

                </div>
            </article>
        <?php endforeach;?>
    <?php endif;?>
</section>