<?php require_once 'inc/header.php'; ?>
            <div class="logo-bottom">
                <section class="sky-form">                                  
                    <?php require_once 'inc/accountPanel.php'; ?>
                </section>
            </div>
        </div>      
        <div class="login">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Connexion</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Inscription</span></li>
                        <div class="clearfix"></div>
                    </ul>                    
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="login-top">
                                <form method="post" action="login.php">
                                    <input type="text" class="email" placeholder="Email" name="login['email']" required=""/>
                                    <input type="password" class="password" placeholder="Mot de passe" name="login['password']" required=""/>
                                    <input type="hidden" name="who" />
                                <div class="login-bottom login-bottom1">
                                    <div class="submit">
                                        <input type="submit" name="login['submit']" value="CONNEXION"/>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                                </form>  
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="login-top">
                                <form method="post" action="register.php">
                                    <input type="text" class="name active" placeholder="Nom" name="register['nom']" required=""/>
                                    <input type="text" class="name active" placeholder="Prénom" name="register['prenom']" required=""/>
                                    <input type="text" class="email" placeholder="Email" name="register['email']" required=""/>
                                    <input type="password" class="password" placeholder="Mot de passe" name="register['password']" required=""/> 
                                    <input type="password" class="password" placeholder="Confirmation" name="register['password_confirm']" required=""/> 
                                    <input type="hidden" name="who" />
                                <div class="login-bottom">
                                    <div class="submit">
                                        <input type="submit" value="CREER MON COMPTE"/>
                                    </div>
                                    
                                    <div class="clear"></div>
                                </div>  
                                </form>
                        </div>
                            
                        </div>                          
                    </div>  
                </div>
            </div>  
        </div>  
        <div class="clear"></div>
    </div>  
<?php require_once 'inc/footer.php'; ?>