<section class="cart ">
        <div class="container bg-gradient p-2 bg-opacity-50  bg-light ">
            <div class=" row py-5 text-center mx-5 bg-gradient border border-dark border-3 bg-light bg-opacity-75">
                <h2>Carrello di <?php echo $_SESSION["username"]?> </h2>
            </div>

        <?php if(count($params["prodotti"]) == 0):?>
        <div class="row align-items-center">
                <h3 class="text-center" style=" font-size: 5rem ;">Il tuo carrello è vuoto!</h3>
        </div>
        <?php endif;?>

        <div class="row align-items-center">
            <?php foreach($params["prodotti"] as $prodotti): ?>
            <div class="col-6 col-lg-3">
                <div class="card shadow">
                    <img src="img/<?php echo $prodotti["immagineprodotto"]?>" class="card-img-top" alt="Immagine raffigurativa del prodotto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotti["nomeprodotto"]?></h5>
                        <p class="card-text"><?php echo $prodotti["descrizioneprodotto"]?></p>
                        <h4><?php echo $prodotti["prezzoprodotto"]?>€</h4>
                        <p>Quantità scelta: <?php echo $prodotti["quantitàprodotto"]?></p>
                        <a href="shop.php?action=3&username=<?php echo $_SESSION["username"]?>&nomeprodotto=<?php echo $prodotti["nomeprodotto"]?>" role="button" class="btn btn-info bg-danger" style= "width: 100%; ">Rimuovi prodotto dal carrello <i class="bi-cart-x"></i></a>
                    </div>
                </div>
            </div>
             
            <!-- row ends here-->

        <?php endforeach;?>
        </div>
    </div>
</section>

<section  name="checkoutbtn">
    <div class="container">
        <?php if(count($params["prodotti"]) > 0):?> <!-- viene mostrato solo se ci sono prodotti nel carrello -->
            <div class="d-flex justify-content-center" >
            <button type="button" class="btn0  btn-lg"><a name="chkt" href="shop.php?action=shop">Vai al checkout</a></button>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php if(count($params["prodotti"]) != 0):?>
<footer>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="" class="navbar-brand ">Pagina del negozio</a>
        <div class="container">
            <div class="col-md-3 offset-md-4">
            <h6 class="my-auto" style="color:white;"> contatti:email@xyz.aa email2@sdf.aa</h6>
            </div>   
        </div>
    </nav>
</footer>

<?php endif;?>