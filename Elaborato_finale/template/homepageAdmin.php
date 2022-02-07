<section class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1> Hello Admin</h1>
                </div>
            </div>
        </div>
</section>
<section class="shop ">
    <div class="container bg-opacity-50  bg-light bg-gradient">
        <div class="row py-5 self-align-center text-center">
            <h2>I prodotti nel database:</h2>
        </div>
        <div class="row align-items-center">
        <?php foreach($params["prodotti"] as $prodotti):?>
            <div class="col-lg-3 ">
                <div class="card">
                    <img src="img/<?php echo $prodotti["immagineprodotto"];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotti["nomeprodotto"];?></h5>
                        <p class="card-text"><?php echo $prodotti["descrizioneprodotto"];?></p>
                        <h4><?php echo $prodotti["prezzoprodotto"];?>€</h4>
                        <a href="productManager.php?action=2&nomeprodotto=<?php echo $prodotti["nomeprodotto"]?>" role="button" class="btn btn-danger " style= "width: 100%; "> Rimuovi dal negozio <i class="bi-x-circle-fill"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- row ends here-->
        </div>
    </div>
</section>