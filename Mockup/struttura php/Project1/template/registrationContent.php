<section name="mainSection">
    <h2 name="subTitle">Insert the following information:</h2>
    <form action="#" method="POST">
        <label class="registration">Username: <input type="text" name="username" placeholder="Insert here your username"/></label> <br/>
        <label class="registration">Password: <input type="password" name="password" placeholder="Insert here your password"/></label> <br/>
        <input type="submit" name="registrationButton" value="Register"/>
        <input type="reset" name="resetButton" value="Reset"/>
    </form>
    <?php if(isset($params["error"])):?>
        <p name="registrationError" class="error"><?php echo $params["error"]?></p>
    <?php endif;?>
</section>