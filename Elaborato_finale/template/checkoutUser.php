<section class="cart ">
         <div class="container  bg-opacity-50  bg-light  p-2">
            <div class=" row py-5 text-center mx-5 bg-gradient border border-dark border-3 bg-light bg-opacity-75">
                <h2>I tuoi prodotti:</h2>
            </div>
           
         <div class="row align-items-center">
            <?php foreach($params["prodotti"] as $prodotti):?>
             <div class="col-6 col-lg-3">
                <div class="card shadow">
                    <img src="img/<?php echo $prodotti["immagineprodotto"]?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $prodotti["nomeprodotto"]?></h5>
                      <p class="card-text"><?php echo $prodotti["descrizioneprodotto"]?></p>
                      <p>Quantità scelta: <?php echo $prodotti["quantitàprodotto"]?></p>
                     <h4><?php echo $prodotti["prezzoprodotto"]?>€</h4>
                    </div>
                  </div>
             </div>
             <?php endforeach; ?>
            <!-- row ends here-->
        </div>
         </div>
     </section>
     <section  name="paynow" class="my-20 p-4">
      <div class="d-flex justify-content-center">
      <button type="button" class="btn0 btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
       <a name="gotopay">Vai al Pagamento</a>
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pagamento</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="#" method="POST">
                <ul>
                    <li><label>Username <input type="text"  class="form-control" id="floatingInput" placeholder="Username"></label></li>
                    <li><label>Indirizzo destinazione: <input type="text" name="deliveryAddress"  class="form-control" id="floatingInput" placeholder="Address"/></label></li>
                    <li class="creditcard">
                    <label > Informazioni carta di credito:
                    <div class="input-group">
                     <input type="text" name="cardInfo"  class="form-control" id="floatingInput" placeholder="XXXX-XXXX-XXXX-XXXX" style="width: 60%;">
                     <input type="password" name="cvv" maxlength="3"  class="form-control" id="floatingInput" placeholder="CVV">
                    </div></label></li>
                </ul> 
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="notifiche.php?action=1" role="button" class="btn btn-info" style= "width: 60%; " name="buy">Completa il pagamento!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
