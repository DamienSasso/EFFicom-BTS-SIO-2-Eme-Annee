<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php 
        /* On crée le tableau */
         $y = 0;
                for ($i=0; $i < 30; $i++) {
                    $tab1[$i] = ($x = rand(0,100));
                }
        ?>
        
        <?php /* afficher les valeur du tableau crée précédement*/
               /* methode : affiche uniquement les valeur présente dans le tableau 
                foreach ($tab1 as $key => $value) {
                    for ($i=0; $i <30; $i++) {
                        if($tab1[$i] == $value) {
                            $y++;
                        }
                            
                    }
                 */
                for ($i=0; $i < 101; $i++) {
                    foreach ($tab1 as $key => $valeur) {
                        if ($i == $valeur) {
                            $y++;
                        }
                        
                    } 
                    ?><p><?php echo "la valeur : ".$i. " est présente : ".$y." fois "; ?></p><?php
                    $y = 0;
                }

        ?>
    </body>
    </html>