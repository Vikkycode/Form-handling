<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Generate an airtime pin card</h3>

 <?php 
//Generate a number pin
$Generator = "\n123456789067";
//Use str_shuffle method for random numbers and 
//Use str_repeat method for repeat pins.
echo "<strong>Pin:</strong> ".
str_shuffle(str_repeat($Generator,200));
?>   
</body>
</html>



