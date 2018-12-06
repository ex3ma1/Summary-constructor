<?php
require "db.php";

$data = $_POST;

if(isset($data['do_login']))
    {
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if( $user){
            if(password_verify($data['password'], $user->password))
        {
           $_SESSION['logged_user'] = $user;
           header('Location: sv.php');
        }
        else
        {
            $errors[] = 'Incorrect password';
        }

        }
        else
        {
            $errors[] = "User not found";
        }



        if( ! empty($errors))
        {
            echo '<div style="color:red;">'.array_shift($errors).'</div>';
        } 




    }



?>

<form action="login.php" method="POST">
    <p>
        <p>
        Your login
        <input type="text" name="login" value = "<?php echo @$data['login']; ?>">
        </p>
        
        Your password
        <input type="password" name="password" value = "<?php echo @$data['password']; ?>">
        </p>
        
        <p>
        <button type = "submit" name="do_login">Login</button>
        </p>
    
    
    </p>