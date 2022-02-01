<section name="mainSection">
    <h2 name="subTitle">Welcome <?php echo $params["user"]?></h2>
    <form action="search.php" method="GET">
        <input type="text" placeholder="Search" name="searchBox"/>
        <input type="submit" value="Search"/>
    </form>
</section>
    