<section name="mainSection">
    <h2 name="subTitle">Insert new product</h2>

    <form action="productManager.php" method="POST" name="adminOption">
        <ul>
            <li>
                <label name="insert">Insert the name of the product <input type="text" name="productname"/></label>
            </li>
            <li>
                <label name="insert">Insert the description of the product <textarea id="productdescription" name="productdescription"></textarea></label>
            </li>
            <li>
                <label name="insert">Insert the image of product <input type="text" name="productimage"/></label>
             </li>
             <li>
                 <label name="insert">Insert the price of product <input type="text" name="productprice"/></label>
             </li>
             <li>
                 <label name="insert">Insert quantity <input type="number" min="0" max="5" step="1" name="productquantity"/></label>
             </li>
        </ul>
        <input type="submit" value="Insert"/>
    </form>
    <a href="login.php" name="exitButton">Back</a>
</section>