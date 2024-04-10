<?php 

echo "<pre>" .  print_r($_POST,true) . "</pre>";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["username"];
    $email=$_POST["email"];
    $age=$_POST["age"];
    $password=$_POST["password"];
    $errors = [];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors["email"]="email non valida!";
}

if(strlen($password) < 6) {
    $errors['password'] =  'Password troppo corta!';
}
if(strlen($age)> 18) {
    $errors['age'] =  'Non sei maggiorenne!';
}


if ($errors==[]) {
     header('Location: \Corso Epicode-Ifoa Back End\U4-W1-D2\success.php');
   
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form</title>
</head>
<body class="bg-dark text-white">
   <div class="container text-center">
       <div class="row">
           <div class="col">
                <form action="" method="post" novalidate>
                    <label  class="form-label" for="username">Username</label><br>
                    <input type="text" name="username" id="username" placeholder="username">                  
                    <br>
                    <br>
                    <label  class="form-label" for="email">Email</label><br>
                    <input type="email" name="email" id="email" placeholder="example@email.com">
                    <div class="error text-danger"><?=$errors["email"]?? " " ?></div>
                    <br>
                    <br>
                    <label  class="form-label" for="age">Age</label><br>
                    <input  type="number" name="age" id="age" >  
                    <div class="error text-danger"><?=$errors["age"]?? " " ?></div>             
                    <br>
                    <br>
                    <label  class="form-label" for="password">Password</label><br>
                    <input type="password" name="password" id="password">
                    <div class="error text-danger"><?=$errors["password"]?? " " ?></div>
                    <br>
                    <br>
                    <button class="btn btn-primary">Send</button>
             
            
                </form>
           </div>
       </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>