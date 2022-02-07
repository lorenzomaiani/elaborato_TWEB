<section class=" border border-info  bg-opacity-10" name="mainSection">
                <h2 name="subTitle">Registrati ora: </h2>
                <?php if(isset($params["erroreRegistrazione"])):?>
                    <p class="text-center text-danger"><?php echo $params["erroreRegistrazione"];?></p>
                <?php endif;?>
                <form action="registration.php" method="POST">
                    <label id="demo">
                        Inserisci il nuovo username: 
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" name="username">
                        <label for="floatingInput"></label>
                    </label>
                    <br/>
                    <label id="demo">
                        Inserisci la tua password: 
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword"></label>
                    </label>
                    <br/>
                    <input class="btn0" type="submit" value="Registrati" name="registrationButton"/>
                    <input class="btn0" type="reset" value="Reset" name="resetButton"/>
                </form>
            </section>