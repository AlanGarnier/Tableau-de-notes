<!DOCTYPE html> 
<html lang="fr">
    <head> 
        <meta charset="utf-8">
        <title>Gestion du tableau de notes</title> 
        <link rel="stylesheet" href="style/bootstrap.css">
    </head> 
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3 bs-docs-sidebar">
                    <!--Sidebar content-->
                    <h2>Gestion du tableau de notes</h2>
                    <div class="well">
                        <ul class="nav nav-list bs-docs-sidenav ">                                            
                            <li class="divider"></li>
                            <li class="nav-header">Les choix</li>
                            <li class="divider"></li>
                            <?php foreach ($lien as $k => $v): ?>
                                <li><a href="<?php echo 'index.php?action=' . $k; ?>" ><?php echo $v; ?></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="navbar ">

                </div>
                <div class="span9 pagination-centered">
                    <!--Body content-->
                    <?php echo $contenu; ?>                 
                </div>
            </div>
        </div>
    </body>
</html>