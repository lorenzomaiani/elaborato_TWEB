<section class="main">
            <div class="container">
            <div class="d-flex flex-column">
                    <h1 class=" ciao text-center justify-content-center align-items-around"> Benvenuto <?php echo $_SESSION["username"]?></h1>
                </div>
            </div>
        </div>
</section>
<section class="shop ">
    <div class="container p-2  bg-opacity-50  bg-light bg-gradient">
        <div class=" row py-5 text-center mx-5 bg-gradient border border-dark border-3 bg-light bg-opacity-75">
            <h2>Negozio</h2>
        </div>  
        <div class="row align-items-center">
            <?php foreach($params["prodotti"] as $prodotti): ?>
                <div class="col-6 col-sm-3">
                    <div class="card">
                        <img src="img/<?php echo $prodotti["immagineprodotto"]?>" class="card-img-top" alt="Immagine raffigurativa del prodotto"/>
                        <div class="card-body shadow">
                        <?php if($prodotti["quantitàprodotto"] > 0):?>
                            <h5 class="card-title"><?php echo $prodotti["nomeprodotto"]?></h5>
                            <p class="card-text"><?php echo $prodotti["descrizioneprodotto"]?></p>
                            <h4><?php echo $prodotti["prezzoprodotto"]?>€</h4>
							 <?php if($prodotti["quantitàprodotto"] <= 2):?>
                                <p class="card-text text-danger">Disponibilità limitata: <?php echo $prodotti["quantitàprodotto"]?></p>
                            <?php endif;?>
                            <form action="shop.php" method="POST">
                                <label>Inserire la quantità: <input type="number" name="quantitàprodottoutente" min="1" max="<?php echo $prodotti["quantitàprodotto"]?>" required></label>
                                <input type="submit" value="Aggiungi al carrello" role="button" class="btn btn-info" style= "width: 100%; "/>
                                <input type="hidden" name="action" value="1"/>
                                <input type="hidden" name="username" value="<?php echo $_SESSION["username"]?>"/>
                                <input type="hidden" name="nomeprodotto" value="<?php echo $prodotti["nomeprodotto"]?>"/>
                            </form>
                        <?php endif;?>

                        <?php if($prodotti["quantitàprodotto"] == 0):?>
                            <p class="card-text text-danger">Sold out!</p>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
            <!-- row ends here-->
            <?php endforeach; ?>
        </div>
    </div>
</section>

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