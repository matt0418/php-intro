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
    
    function addNumber($number1, $number2) {
        $sum = $number1 + $number2;
        return $sum;
    }

    $newNum = addNumber(3,5);

    echo $newNum;
    
    
    
    ?>


</body>
</html>