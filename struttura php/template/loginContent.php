<section name="mainSection">
    <?php if(isset($params["errorLogin"])):?>
        <p class="failure"><?php echo $params["errorLogin"]?></p>
    <?php endif; ?>

    <h2 name="subTitle">Insert the following information: </h2>

    <form action="#" method="POST">
        <label for="" class="login">
            Username: 
            <input type="text" id="username" name="username" placeholder="Insert here your username"/>
        </label>
        <br/>

        <label for="" class="login"> 
            Password: 
            <input type="password" id="passwd" name="passwd" maxlength="10" minlength="4" placeholder="Insert here your password"/>
        </label>
        <br/>
        
        <input type="submit" value="Login" id="login" name="loginButton"/>
        <input type="reset" value="Reset" name="resetButton"/>

    </form>

    <p name="info">Don't have an account? <a href="registration.php" name="registration">Register</a></p>
    
    <div>

    </div>
</section>