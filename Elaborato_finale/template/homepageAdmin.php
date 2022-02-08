<section class="main">
<div class="container">
        <div class="d-flex flex-column">
         <h1 class=" ciao text-center justify-content-center align-items-around"> Hello Admin</h1>
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

                        <?php if($prodotti["quantitàprodotto"] > 0):?>
                            <p class="card-text"><?php echo $prodotti["descrizioneprodotto"];?></p>
                            <h4><?php echo $prodotti["prezzoprodotto"];?>€</h4>
                            <p class="card-text">Quantità in stock: <?php echo $prodotti["quantitàprodotto"]?></p>
                            <a href="productManager.php?action=2&nomeprodotto=<?php echo $prodotti["nomeprodotto"]?>" role="button" class="btn btn-danger " style= "width: 100%; "> Rimuovi dal negozio <i class="bi-x-circle-fill"></i></a>
                        <?php endif;?>

                        <?php if($prodotti["quantitàprodotto"] == 0):?>
                            <p class="card-text text-danger">Sold out!</p>
                            <form action="productManager.php" method="POST">
                                <label>Inserisci la quantità del prodotto da aggiungere: <input type="number" name="quantitàAggiunta" min="0"/></label>
                                <input type="submit" value="Aggiungi"/>
                                <input type="hidden" name="nomeprodotto" value="<?php echo $prodotti["nomeprodotto"]?>"/>
                            </form>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- row ends here-->
        </div>
    </div>
</section>