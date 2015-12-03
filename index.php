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
                        <?php require_once 'inc/form_login.php' ?>
                    </div>
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <?php require_once 'inc/form_register.php' ?>
                    </div>                          
                </div>  
            </div>
        </div>  
    </div>  
    <div class="clear"></div>
    </div>
    
    <?php require_once 'inc/footer.php'; ?>