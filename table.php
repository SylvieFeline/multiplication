<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Table de multiplication</title>
</head>
<body>
    <div id="bloc_page">

        <h1>les tables de multiplication</h1>


        <div id="bloc2">

            <?php include "formulaire.html" ?>
   
            <div id="table">
                <h2> Voici la table de <?php echo $_GET["tables"] ?></h2>
                <div id="bloc3">
                    <div class="col">
                            
                        <?php 
                            for($a=0; $a<10; $a++){
                                echo $_GET["tables"].' x '.$a.' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>  
                    <div class="col">
                        <?php 
                            for($a=10; $a<20; $a++){
                               echo $_GET["tables"].' x '.$a. ' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>
                    <div class="col">
                        <?php 
                            for($a=20; $a<30; $a++){
                                echo $_GET["tables"].' x '.$a. ' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>
                        

                </div>
            </div>



<script src="js/script.js"></script>                          
</body>
</html>