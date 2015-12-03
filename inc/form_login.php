<div class="login-top">
    <?php if ( $_SESSION['error'] ) { ?>
        <h2 style="color: red;"><?=$_SESSION['error']?></h2>
    <?php } ?>
    <form method="post" action="login.php">
        <input type="text" class="email" placeholder="Email" name="login['email']" value="<?=!empty($_SESSION['form']['login']['email']) ? $_SESSION['form']['login']['email'] : ''?>" required=""/>
        <input type="password" class="password" placeholder="Mot de passe" name="login['password']" value="<?=!empty($_SESSION['form']['login']['password']) ? $_SESSION['form']['login']['password'] : ''?>" required=""/>
        <input type="text" name="who" value="" />
        <div class="login-bottom login-bottom1">
            <div class="submit">
                <input type="submit" name="login['submit']" value="CONNEXION"/>
            </div>
            <div class="clear"></div>
        </div>
    </form>  
</div>