<?php
session_start();
$error='';
if(count($_POST)>0){
    if(!isset($_POST['email'][0])) die('You must enter your email.');
    if(!isset($_POST['password'][0])) die('You must enter your password.');
    if(strlen($error)==0){
        $fp=fopen('users.csv.php','r');
        while(!feof($fp)){
            $line=fgets($fp);
            $line=explode(';',trim($line));
            if(count($line)==2 && $_POST['email']==$line[0] && password_verify($_POST['password'],trim($line[1]))){
                fclose($fp);
                $_SESSION['email']=$line[0];
                header('location: entity/index.php');
                die();
            }
        }
        echo "Email or Password incorrect. Please try again.";
    }
}
?>
<html>
    <head>
    </head>
    <body>
        <form method="POST">
            <label>Email<label><br />
            <input name="email" type="email"/>
            <br /><br />
            <label>Password<label><br />
            <input name="password" type="password"/>
            <br/><br/>
            <button type="submit">Sign In</button>
        </form>
    </body>
</html>