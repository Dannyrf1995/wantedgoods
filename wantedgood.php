<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>
    <?php
        $wantedgood = 21;
        switch ($wantedgood){
            case 16:
                echo "You have to be 16 to buy specs";
                break;
            case 18:
                echo "You have to be 18 to buy mugs and specs";
                break;
            case 21:
                echo "You have to be 21 to buy sausage rolls, mugs and specs";
                break;
            default:
                echo "";
        }
    ?>
</p>
</body>
</html>