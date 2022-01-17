<section>
<?php foreach($params["product"] as $product):?>
    <article>
        <img src="img/<?php echo $product["productimage"]?>" alt="article_image">
        <h2><?php echo $product["productname"]?></h2>
        <footer>
            <button>More Info</button>
            <p name="longDesc"><?php echo $product["productlabel"]?></p>
        </footer>
    </article> 
<?php endforeach; ?>
</section>