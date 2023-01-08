<!DOCTYPE html>
<head>
<title> Modern Calculator</title>
<link rel="stylesheet" type ="text/css" href=style.css>
</head>
<body> 
<?php
if (isset($_POST['count'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $Result = '';
    switch ($operation) {
        case "Sum":
            $Result = $num1+$num2;
            break;
        case "Subtraction":
             $Result = $num1-$num2;
            break;
        case "Multiplication":
            $Result = $num1*$num2;
            break;
        case "Division":
            $Result = $num1/$num2;
            
    } } 
    /* i used switch for the main calculations */ 


    /* Then i used HTML with the necessary elements to make a form for the calulator and then style it with css using classes etc */ 

/* And the final part of the code is for the result field calling for the $result variable to give the number and to have it set on 0 by default when no calculations are being done */

?>

 <div class="calculator"> 
    <h1 class="title"> Basic Calulator </h1> 
    <form method="post" action="index.php">
        <input type="text" name="num1" class="num" autocomplete="off" placeholder="Enter the first number..">
        <input type="text" name="num2" class="num" autocomplete="off" placeholder="Enter the second number.."> 
        <select class="opt" name="operation">
            <option value="Addition">+</option>
            <option value="Subtraction">-</option>
            <option value="Multiplication">*</option>
            <option value="Division">/</option>
</select> 
<input type="submit" name="count" value="count" class="button"> 
</form> 
<?php if (isset($_POST['count'])){ ?>
    <input type="text" value="<?php echo $Result; ?>" class="num">
    <?php } else { ?>
        <input type="text" value="0" class="num"> 
        <?php } ?>



</div>
</body>
</html>