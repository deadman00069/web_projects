<?php
session_start();
require_once 'pdo.php';
$salt='$%tyrue%$';
if(isset($_POST['login']))
{ 
    if(strlen($_POST['email']) < 1)
    {
       $_SESSION['error'] ='Please Enter E-mail';
        header('Location:index.php');
        return;
    }
    else if (!strpos($_POST['email'],'@')>0)
    {
        $_SESSION['error']='Enter valid E-mail';
        header('Location:index.php?email='.$_POST['email']);
        return;
    }
    else if (strlen($_POST['password']) < 1)
    {
        $_SESSION['error'] ='Please Enter Password';
        header('Location:index.php?email='.$_POST['email']);
        return;  
    }
    
    else
    {
        $check=hash('md5',$salt.$_POST['password']);
        $stmpt=$pdo->prepare('SELECT * FROM admin WHERE email= :em AND password= :pass');
        $stmpt->execute(array(
            ':em'=>$_POST['email'],
            ':pass'=>$check
        ));
        $row=$stmpt->fetch(PDO::FETCH_ASSOC);
        if($row !== false)
        {
            $_SESSION['name']=$row['name'];
            header('Location:home.php');
            return;
        }
        else
        {
            $_SESSION['error']='Incorrect Password';
            header('Location:index.php');
            return;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-login</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <main>
        <section>
            <div class="login-page-wrap">
                <div class="login-page-contant">
                    <div class="login-box">
                        <sdiv class="logo">
                            <img src="./images/logo.png" alt="logo">
                        </div>
                        <div class="server-side-message">
                            <p>
                                <?php
                                    if(isset($_SESSION['error']))
                                    {
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    }
                                ?>
                            </p>
                        </div>
                        <form class="login-form" method="post">
                            <div class="form-group">
                                <label >Username</label>
                                <input class="form-control" type="text" name="email" placeholder="User Name" value=<?php 
                                    if(isset($_GET['email']))
                                    {
                                        if($_GET['email']!=null)
                                        {
                                            echo $_GET['email'];
                                        }
                                    }
                   
                                ?>>
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <i class="fas fa-lock"></i>
                            </div>
                           <div class="form-group">
                               <a class="f-pass" href="lol.php">Forget password?</a>
                           </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="login"></button>
                            </div>
                            <div class="form-group">
                                <pre>Don't have an account ? <a  class="sign-up" href="lol.php">Signup now!</a>  </pre> 
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>