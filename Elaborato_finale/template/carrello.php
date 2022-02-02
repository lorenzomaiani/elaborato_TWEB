<section class="cart ">
         <div class="container bg-gradient border border-dark">
            <div class="row py-5 text-center">
                <h2>Carrello di <?php $_SESSION["username"]?></h2>
            </div>
           
         <div class="row align-items-center">
             <div class="col-lg-3 ">
                <div class="card">
                    <img src="immaginiprova/derieri.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <h4>99.99$</h4>
                     <form action="#">
                      <button type="button" class="btn btn-info bg-danger" style= "width: 100%; "> Remove Product <i class="bi-cart-x"></i></button>
                   </form>
                    </div>
                  </div>
             </div>
             
            <!-- row ends here-->
        </div>
         </div>
</section>
<section  name="checkoutbtn">
    <div class="container">
    <div class="col-md-3 offset-md-5" >
    <button type="button" class="btn btn-light btn-lg"><a href="#">Go to checkout</a></button>
    </div>
    </div>
</section>