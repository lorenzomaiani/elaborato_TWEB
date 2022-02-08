<section class="cart ">
         <div class="container  bg-opacity-50  bg-light  p-2">
            <div class="row py-5 text-center">
                <h2>I tuoi prodotti:</h2>
            </div>
           
         <div class="row align-items-center">
            <?php foreach($params["prodotti"] as $prodotti):?>
             <div class="col-lg-3 ">
                <div class="card">
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
    <section  name="paynow"style="margin-top:20px;">
        <div class="container bg-light bg-gradient p-2">
        <div class="col-md-3 offset-md-5" >
            <h2>Paga adesso:</h2>
            <form action="#" method="POST">
                <ul>
                    <li><label>Username <input type="text"  class="form-control" id="floatingInput" placeholder="Username"></label></li>
                    <li><label>Destination address: <input type="text" name="deliveryAddress"  class="form-control" id="floatingInput" placeholder="Address"/></label></li>
                    <li class="creditcard">
                    <label > Credit card info
                    <div class="input-group">
                     <input type="text" name="cardInfo"  class="form-control" id="floatingInput" placeholder="XXXX-XXXX-XXXX-XXXX" style="width: 60%;">
                     <input type="password" name="cvv" maxlength="3"  class="form-control" id="floatingInput" placeholder="CVV">
                    </div></label></li>
                </ul> 
            </form>
            <a href="notifiche.php?action=1" role="button" class="btn btn-info" style= "width: 100%; " name="buy">Complete the order!</a>
       </div>
      </div>
    </section>
