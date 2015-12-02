<?php require_once '../inc/header.php'; ?>
            <div class="logo-bottom">
                <section class="sky-form">                                  
                    <?php require_once '../inc/accountPanel.php'; ?>
                </section>
            </div>
        </div>      
        <div class="login">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Liste des logements</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Ajouter un logement</span></li>
                        <div class="clearfix"></div>
                    </ul>                    
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="login-top">
                                // Ici la liste des logements 
                            </div>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        <div class="login-top">
                                <form method="post" action="addLodging.php">
                                    <input type="text" class="name active" placeholder="Adresse" name="add['address']" required=""/>
                                    <input type="text" class="name active" placeholder="Capacité d'accueil" name="add['capacity']" required=""/>       
                                <div class="login-bottom">
                                    <div class="submit">
                                        <input type="submit" value="AJOUTER"/>
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
<?php require_once '../inc/footer.php'; ?>