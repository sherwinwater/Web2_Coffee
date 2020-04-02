<?php
//decalre all varibles to ""
$size=$priceCoffee=$cream=$sugar=$coffeechoice=$creamchoice=$sugarchoice="";

// validate the data from the form
if (isset($_POST["size"]) && $_POST["size"] != NULL) {
    $coffeechoice = "your coffee choice: " . $_POST["size"] . " size ";
    
    // proces "size" data 
    switch ($_POST["size"]) {
        case "Small" : {
                $size = "<img src='./img/cup.jpg' width='120' height='120'>";
                $priceCoffee = "Total price (with tax) is $" . number_format(1.59 * 1.13, 2);
                break;
            }
        case "Medium" : {
                $size = "<img src='./img/cup.jpg' width='160' height='160'>";
                $priceCoffee = "Total price (with tax) is $" . number_format(1.79 * 1.13, 2);
                break;
            }
        case "Large" : {
                $size = "<img src='./img/cup.jpg' width='200' height='200'>";
                $priceCoffee = "Total price (with tax) is $" . number_format(1.99 * 1.13, 2);
                break;
            }
        case "Extra Large" : {
                $size = "<img src='./img/cup.jpg' width='240' height='240'>";
                $priceCoffee = "Total price (with tax) is $" . number_format(2.19 * 1.13, 2);
                break;
            }
    }
    
    // process "cream" data after validating it
    if (isset($_POST["cream"]) && is_numeric($_POST["cream"]) && $_POST["cream"] != 0) {
        $cream = "<img src='./img/plus.jpg'>";
        for ($i = 0; $i < $_POST["cream"]; $i ++) {
            $cream .= "<img src='./img/cream.jpg'>";
        }
        $creamchoice = $_POST["cream"] . " cream ";
    }else{
        $creamchoice =  " no cream ";
    }
    
    // process "sugar" data after validating it
    if (isset($_POST["sugar"]) && is_numeric($_POST["sugar"]) && $_POST["sugar"] != 0) {
        $sugar = "<img src='./img/plus.jpg'>";
        for ($i = 0; $i < $_POST["sugar"]; $i ++) {
            $sugar .= "<img src='./img/sugar.jpg'>";
        }
        $sugarchoice = $_POST["sugar"] . " sugar ";
    }else{
        $sugarchoice =  " no sugar ";
    }
} else {
    $coffeechoice = "You have nothing to order. Please order online";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tim Horton's Order</title>
    </head>
    <body>
        <h1>your coffee order details</h1>
        <div><?= $size . $cream . $sugar ?></div>
        <p><?= $coffeechoice . $creamchoice . $sugarchoice ?></p>
        <p><?= $priceCoffee ?></p>
    </body>
</html>
