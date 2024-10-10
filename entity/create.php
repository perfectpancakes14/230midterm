<?php
session_start();
//if(strlen($error)==0){
    if(count($_POST)>0){
            $fp=fopen('posts.csv.php','a+');
            fputs($fp,$_SESSION['email'].';'.date('m/d/Y').';'.$_POST['title'].';'.$_POST['content'].PHP_EOL);
            fclose($fp);
            //header('location: signIn.php');
            die();
    }
        //}
?>

<html> 
    <head>
    </head>
    <body>
        <?php
        //if(strlen())
        ?>
        <form method="POST">
            <label>Title</label><br />
            <input name="title"  />
            <br /><br />
            <label>Post Content</label><br />
            
			<textarea name="content" rows="10" cols="50" required="required"></textarea>
            <!--<input name="content" type="text" rows="4" cols="45" />-->
            <br /><br />
            <button type="submit">Post</button>
        </form> 

    </body>
</html>