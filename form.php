<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label for="">Full name: </label>
<input type="text" name="fname"><br><br>
<label for="">Email: </label>
<input type="text" name="email"><br><br>
<label for="">Password: </label>
<input type="password" name="password"><br><br>
<label for="">Comment: </label>
<textarea name="comment" id="" cols="30" rows="10" placeholder="Comment here"></textarea><br>
<label for="">Gender: </label><br><br>
Male<input type="radio" name="gender" value="Male">
Female<input type="radio" name="gender" value="Female"><br>
<button type="submit" name="submit">Submit</button><br><br>
</form>

   <?php
   if(isset($_POST['submit'])){
       $name = "<h3>". $_POST['fname']."</h3><br>";
       echo $name;
       $email=  "<h3>".$_POST['email']."</h3><br>";
       echo $email;
       $password= "<h3>".$_POST['password']."</h3><br>";
       echo $password;
       $comment= "<p>".$_POST['comment']."</p><br>";
       echo $comment;

       if(isset($_POST['gender'])){
        $gender= "<h3>" . $_POST['gender']."</h3><br>";
        echo $gender; 
       } 
      
   }


   

   ?>
</body>
</html>