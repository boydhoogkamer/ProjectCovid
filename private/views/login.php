<div id="login" class="login">
<?php if (isset($error)) { ?>
    <p class="errormessage"><?php echo $error ?></p>
<?php } ?>
    <div class="login-form__box">
        <form class="login-form" id="login-form" action="index.php?page=checkpassword" method="post">

            <p class="login-form__inputs">
              <input class="name input" name="username" type="text" class="input" id="name" placeholder="Naam"/>
            </p>
                        
            <p class="login-form__inputs">
              <input class="password input" name="password" type="password"  id="password" placeholder="Wachtwoord"/>
            </p>
     
            <div class="login-form__inputs">
              <input class="submitbutton" name="submit" type="submit" value="Login" id="submitbutton"/>
            </div>
          </form>
        </div>
</div>