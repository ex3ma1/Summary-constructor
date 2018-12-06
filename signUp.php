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
    require "db.php";
    
    $data = $_POST;
    if(isset($data['do_signUp']))
    {
        $errors = array();
        if(trim($data['login']) == '')
        {
            $errors[] = 'Enter login';
        }
    
    
        if(trim($data['email']) == '')
        {
            $errors[] = 'Enter email';
        }
    
    
        if($data['password'] == '')
        {
            $errors[] = 'Enter password';
        }
    
    
        if($data['password2'] != $data['password']){
            $errors[] = 'Passwords does not match';
        }
        if(R::count('users',"login= ? ", array($data['login']))> 0){
            $errors[] = 'User with such login already exist';
        }
        if(R::count('users',"email= ? ", array($data['email']))> 0){
            $errors[] = 'User with such email already exist';
        }

        if( empty($errors))
        {
             $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color:green;">New user is added</div><hr>';
        } else{
            echo '<div style="color:red;">'.array_shift($errors).'</div>';
        }
    }
    ?>
    <form action="signUp.php" method="POST">
    <p>
        <p>
        Your login
        <input type="text" name="login" value = "<?php echo @$data['login']; ?>">
        </p>
        <p>
        Your email
        <input type="email" name="email" value = "<?php echo @$data['email']; ?>">
        </p>
        <p>
        Your password
        <input type="password" name="password" value = "<?php echo @$data['password']; ?>">
        </p>
        <p>
        Your password again
        <input type="password" name="password2" value = "<?php echo @$data['password2']; ?>">
        </p>
        <p>
        
        <button type = "submit" name="do_signUp">Sign up</button>
        </p>
    
    
    </p>
    
    
    </form>
</body>
</html>