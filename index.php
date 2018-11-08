<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="css/style.css">
    <title>Multiplications</title>
</head>
<body>
    <div id="bloc_page">

        <h1>les tables de multiplication</h1>
    

        <div id="bloc2">
            <form method="GET">
                
                <select name="tables">
                    <option value="1">table de 1</option>
                    <option value="2">table de 2</option>
                    <option value="3">table de 3</option>
                    <option value="4">table de 4</option>
                    <option value="5">table de 5</option>
                    <option value="6">table de 6</option>
                    <option value="7">table de 7</option>
                    <option value="8">table de 8</option>
                    <option value="9">table de 9</option>
                    <option value="10">table de 10</option>
                    <option value="11">table de 11</option>
                    <option value="12">table de 12</option>
                </select>

                <p>Choisi la table à afficher</p>

                <input type="submit" value="Voir">

            </form>

            <table>
            <h2> Voici la table de <?php echo $_GET["tables"] ?></h2>
                <div id="bloc3">
                    <div class="col">
                        
                        <?php 
                            for($a=1; $a<=10; $a++){
                                echo $_GET["tables"].' x '.$a.' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>  
                    <div class="col">
                        <?php 
                            for($a=11; $a<=20; $a++){
                                echo $_GET["tables"].' x '.$a. ' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>
                    <div class="col">
                        <?php 
                            for($a=21; $a<=30; $a++){
                                echo $_GET["tables"].' x '.$a. ' = '.($_GET["tables"]*$a).'<br/>';
                            }
                        ?>
                    </div>
                    

                </div>
            </table>

            
        </div>
    </div>

</body>
</html>