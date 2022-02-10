<section class=" border border-info mt-2 " name="mainSection">
    <h2 name="subTitle">Inserisci le seguenti informazioni</h2>

    <?php if(isset($params["erroreLogin"])):?>
      <p class="text-center text-danger"><?php echo $params["erroreLogin"]?></p>
    <?php endif;?>

    <form action="index.php" method="POST">
        <label id="demo">
            Inserisci il tuo Username: 
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username"/>
            <label for="floatingInput"></label>
        </label>
        <br/>
        <label id="demo">
            Inserisci la tua Password: 
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"/>
            <label for="floatingPassword"></label>
        </label>
        <br/>
        <input class="btn0" type="submit" value="Accedi" name="loginButton"/>
        <input class="btn0" type="reset" value="Reset" name="resetButton"/>
    </form>
    <p class="text-center" name="info">Non hai un account? Registrati ora! <a href="registration.php" name="registration">Registrati</a></p>
</section>
      

<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/immagine_sfondo_1.jpg" class=" img-fluid" alt=""/>
      </div>
      <div class="carousel-item">
        <img src="img/yveltal.jpg" class="img-fluid"  alt=""/>
      </div>
      <div class="carousel-item">
        <img src="img/immagine_sfondo_3.jpg" class=" img-fluid" alt=""/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<footer>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a href="" class="navbar-brand ">Pagina del negozio</a>
      <div class="col-md-3 offset-md-4">
        <h6 class="my-auto" > contatti:email@xyz.aa email2@sdf.aa</h6>
      </div>   
    </div>
  </nav>
</footer>
