<section class="shop ">
         <div class="container p-2 bg-opacity-100  bg-light bg-gradient">
            <div class=" row py-5 text-center mx-5 bg-gradient border border-dark border-3 bg-light bg-opacity-75">
                <h2>Aggiungi un prodotto:</h2>
            </div>
           
            <form action="productManager.php" method="POST" name="adminOption" enctype="multipart/form-data">
                <ul>
                    <li>
                        <div class="mb-3">
                            <label for="nomeprodotto" class="form-label">Nome Prodotto</label>
                            <input type="text" name="nomeprodotto" class="form-control" id="nomeprodotto" placeholder=""/>
                          </div>
                    </li>
                    <li>
                        <div class="mb-3">
                            <label for="productdescription" class="form-label">Descrizione Prodotto</label>
                            <textarea class="form-control" id="descrizioneprodotto" name="descrizioneprodotto" rows="3"></textarea>
                          </div>
                    </li>
                    <li>
                        <div class="mb-3">
                            <label for="productimage" class="form-label">Immagine Prodotto</label>
                            <input type="file" name="immagineprodotto" class="form-control" id="immagineprodotto" placeholder=""/>
                          </div>
                       
                     </li>
                     <li>
                         <div class="mb-3">
                        <label for="productprice" class="form-label">Prezzo del Prodotto</label>
                        <input type="text" name="prezzoprodotto" class="form-control" id="prezzoprodotto"/>
                      </div>
                     </li>
                     <li>
                        <div class="mb-3">
                            <label for="productquantity" class="form-label">Quantità</label>
                            <input type="number" name="quantitàprodotto" min="0" max="25" step="1" class="form-control" id="quantitàprodotto"/>
                          </div>
                     </li>
                </ul>
                <div class="d-flex justify-content-center">
                <input class="btn0 p-2" type="submit" value="Aggiungi"/>
              </div>
            </form>
         </div>
     </section>