<section name="mainSection">
    <h2 name="subTitle">Error, can't find a product called <p id="failure"><?php if(isset($params["searchError"])){echo $params["searchError"];}?></p></h2>
    <?php if(isset($params["homepageFooter"])):?>
        <footer>
            <form action="login.php">
                <input type="submit" value="Back to homepage"/>
            </form>   
        </footer>
    <?php endif; ?>
</section>