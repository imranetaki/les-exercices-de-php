<html>
    <body>
        <?php
            $tableau = [];
            for ($i = 0; $i < 10; $i++){
                $tableau[$i] = 0;
                
            }
            print_r($tableau);
            
            

            $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
            
            foreach ($voyelles as $voyelle) {
                echo ' <br>'.$voyelle;
            };

            $chiffres = [-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1 ];

            $somme = 0;
            $multiplication = 1;

            for ($i = 0; $i < count($chiffres); $i++){
                $somme = $somme + $chiffres[$i];
                $multiplication = $multiplication * $chiffres[$i];
            }
            // echo count( $chiffres);

            echo '<br>'."la somme est : ".$somme;
            echo '<br>'."la moyenne est : ".$somme / count( $chiffres);
            echo '<br>'."la multiplication est : ".$multiplication;
            
            $u = [-1,4,-2];
            $v = [3,2,-5];
            $produit_scalaire = 0;
            for ($i = 0; $i < count($u); $i++){
                $produit_scalaire = $produit_scalaire + $v[$i]*$u[$i];
            }
            echo "<br>"." le produit scalaire est : ".$produit_scalaire;


            $chiffres = [-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1 ];
            $min=0;
            for ($i = 0; $i < count($chiffres); $i++){
                if( $chiffres[$i] < $min ){
                    $min = $chiffres[$i];
                }
            }
            
            echo "<br>"." le min est : ".$min;
            $chiffres = [-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1 ];
            $max=0;
            for ($i = 0; $i < count($chiffres); $i++){
                if( $chiffres[$i] > $max ){
                    $max = $chiffres[$i];
                }
            }
            echo "<br>"." le min est : ".$max;
            echo "<br>";

            $chiffres = [-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1 ];
            $rev=5;
            for ( $i = 0; $i < count($chiffres); $i++){
                if( $chiffres[$i] = $rev ){
                    echo $rev.' se trouve dans le tableau';
                    break;
                };
            };
            $chiffres1 = [-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1 ,-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1,-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1,-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1,-5 , 6 , 9.2 , 5 , 5 , 2 , 0.5 ,1 ,2,1];

            $rev1 = 5;
            $occurence = 0;
            for ( $i = 0; $i < count($chiffres); $i++){
                if( $chiffres[$i] = $rev1 ){
                    $occurence +=1;
                };
            };
            echo"<br>"." le nombre d'ocurrence du nombre ".$rev1." est : ".$occurence;

            $notes = [10 , 15 , 13.5 , 12 , 14 ,14.25 , 19 , 18 ,17 ,16];
            $sum = 0;
            for ($i = 0; $i < count($notes); $i++){
                $sum = $sum + $notes[$i];
            };
            $moy = $sum / 10;

            for ( $i = 0; $i < count($notes); $i++){
                if( $notes[$i] > $moy){
                    echo "<br>".$notes[$i];};
            };

            $sommeInitiale = 1000;
            $tauxInteret = 0.02;
            
            
            $sommesAcquises = [];
            
           
            for ($annee = 1; $annee <= 20; $annee++) {
               
                $sommeAcquise = $sommeInitiale * pow(1 + $tauxInteret, $annee);
                
                $sommesAcquises[$annee] = $sommeAcquise;
            }
           
            for ($i = 0; $i < count($sommesAcquises); $i++){
                echo "<br>"." ".$sommesAcquises[$i];
            };
        ?>
    </body>
</html>