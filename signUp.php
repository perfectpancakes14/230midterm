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
            $line=explode(';',$line);
            if(count($line)==2 && $_POST['email']==$line[0]){
                $error='This user is already registered.';
                echo $error;
                break;
            }    
        }
        fclose($fp);
        if(strlen($error)==0){
            $fp=fopen('users.csv.php','a+');
            fputs($fp,$_POST['email'].';'.password_hash($_POST['password'],PASSWORD_DEFAULT).PHP_EOL);
            fclose($fp);
            header('location: entity/index.php');
            die();
        }
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
            <button type="submit">Sign Up</button>
        </form>
    </body>
</html>