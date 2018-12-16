<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sammary constructor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/creative.css">
    <link rel="stylesheet" href="css/stylelogin.css">

  </head>

  <body id="page-top">
  <?php
    require "db.php";
    
    $data = $_POST;
    if(isset($data['do_login']))
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
            $_SESSION['logged_user'] = $user;
           header('Location: sv.php');  
        }
         
        // if( empty($errors))
        // {
        //     $user = R::dispense('users');
        //     $user->login = $data['login'];
        //     $user->email = $data['email'];
        //     $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
        //     R::store($user);
        //     echo '<div style="color:green;">New user is added</div><hr>';
        // } else{
        //     echo '<div style="color:red;">'.array_shift($errors).'</div>';
        // }
    }
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">CV</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Главная</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="signUp.php">Регистрация</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Вход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="containers">
         
         <form class="form" action="signUp.php" method="POST">
           <input class="form__input" type="name" placeholder="Логин" name="login" value = "<?php echo @$data['login']; ?>"/>
           <input class="form__input" type="email" placeholder="Email" name="email"  value = "<?php echo @$data['email']; ?>"/>
           <input class="form__input" type="password" placeholder="Пароль" name="password" value = "<?php echo @$data['password']; ?>"/>
          <input class="form__input" type="password" placeholder="Повторите" name="password2" value = "<?php echo @$data['password2']; ?>"/>
          <div id="error">
          <?php 
          if( empty($errors))
        {
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
            R::store($user);
        } else{
            echo '<div style="color:white;">'.array_shift($errors).'</div>';
        }
        
        ?>
          </div>
           <button class="signUp_btn" type="submit" name="do_login">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
    </form>
    
    </div>
      </div>
    </header>

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
