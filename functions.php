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
    
    
    function call($something) {
        echo $something;
    }

    function add($number) {
        $number = $number + 3;
        echo $number;
    }

    call("hello");

    add(1);

    
    ?>


</body>
</html>