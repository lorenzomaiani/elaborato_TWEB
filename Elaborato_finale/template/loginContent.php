<section class=" border border-info  bg-opacity-10" name="mainSection">
                <h2 name="subTitle">Inserisci le seguenti informazioni</h2>
                <p class="text-center text-danger"></p>
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
                    <input class="btn0" type="submit" value="Submit" name="loginButton"/>
                    <input class="btn0" type="reset" value="Reset" name="resetButton"/>
                </form>
                <p class="text-center" name="info">Non hai un account? Registrati ora! <a href="registration.php" name="registration">Registrati</a></p>
            </section>
        </main>
      
     
    </div>

        <div class="container" style="height: 100%;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/immagine_sfondo_1.jpg" class=" img-fluid" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/immagine_sfondo_2.jpg" class="img-fluid"  alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/immagine_sfondo_3.jpg" class=" img-fluid" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
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
        