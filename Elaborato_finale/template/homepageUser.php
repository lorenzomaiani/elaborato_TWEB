<section class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1> Benvenuto <?php echo $_SESSION["username"]?></h1>
                </div>
            </div>
        </div>
</section>
<section class="shop ">
    <div class="container p-2  bg-opacity-50  bg-light bg-gradient">
        <div class="row py-5 self-align-center text-center">
            <h2>Negozio</h2>
        </div>  
        <div class="row align-items-center">
            <?php foreach($params["prodotti"] as $prodotti): ?>
                <div class="col-lg-3 ">
                    <div class="card">
                        <img src="img/<?php echo $prodotti["immagineprodotto"]?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $prodotti["nomeprodotto"]?></h5>
                        <p class="card-text"><?php echo $prodotti["descrizioneprodotto"]?></p>
                        <h4><?php echo $prodotti["prezzoprodotto"]?>€</h4>
                        <form action="shop.php" method="POST">
                            <label>Inserire la quantità: <input type="number" name="quantitàprodottoutente" require></label>
                            <input type="submit" value="Aggiungi al carrello" role="button" class="btn btn-info" style= "width: 100%;"/>
                            <input type="hidden" name="action" value="1"/>
                            <input type="hidden" name="username" value="<?php echo $_SESSION["username"]?>"/>
                            <input type="hidden" name="nomeprodotto" value="<?php echo $prodotti["nomeprodotto"]?>"/>
                        </form>
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
                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="#" class="nav-link">contatti</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">INFO</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">cose</a></li>
                        </ul>
                  
                    
                    </div>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                
                
                </div>
        </nav>
</footer>