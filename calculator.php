<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h3>Building a simple calculator</h3>
    <form>
    <input type="text" name="num1" placeholder="Number 1"> <br><br>
     <select name="operator">
    <option>Select</option>
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide</option>
    </select> <br><br>
    <input type="text" name="num2" placeholder="Number 2"> <br><br>
    <button name="submit" type="submit">Calculate</button>
    </form>
    <p><strong>The answer is : </strong></p>
    <?php
    if(isset($_GET['submit'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case 'Select':
                echo "Please select an operator method";
                break;
            case 'Add':
                echo   $num1 +  $num2;
                break;
            case 'Subtract':
                echo   $num1 -  $num2;
                break;
            case 'Multiply':
                echo   $num1 *  $num2;
                break;
            case 'Divide':
                echo   $num1 /  $num2;
                break;
        }
    }
    ?>
</body>
</html>