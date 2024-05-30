<html lang="en">
<body>
    <?php

        switch($_POST['op']){
            case '+':
                echo"l'operation de ".$_POST['num1'].' '.$_POST['op'].' '.$_POST['num2'].' est : '.$_POST['num1'] +  
                $_POST['num2'];
                break;
            case '-':
                echo"l'operation de ".$_POST['num1'].' '.$_POST['op'].' '.$_POST['num2'].' est : '.$_POST['num1'] - $_POST['num2'];
                break;
            case '*':
                echo"l'operation de ".$_POST['num1'].' '.$_POST['op'].' '.$_POST['num2'].' est : '.$_POST['num1']  * $_POST['num2'];
                break;
            case '/':
                echo"l'operation de ".$_POST['num1'].' '.$_POST['op'].' '.$_POST['num2'].' est : '.$_POST['num1'] / 
                $_POST['num2'];
                break;
            default:
                echo "entrer le donnée convenable";

        }
        
    ?>
</body>
</html>

<!-- echo"l'operation de ".$_POST['num1'].' '.$_POST['op'].' '.$_POST['num2'].' est : '.$_POST['num1'] ,$_POST['op'] ,$_POST['num2']; -->