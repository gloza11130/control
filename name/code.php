<?php
error_reporting(0);

$searched = $_POST['searchfor'];  
$ip = $_SERVER['REMOTE_ADDR'];  
$date = date("d/m/y");

if(isset($_POST['searchit']))
    {
    ////////////////// POST ACTION TO REGISTER NEW ADMIN ////////////////
        $searched = $_POST['searchfor'];
        $f = fopen("entries.html", "a");
        fwrite ($f,
        'Searched Term: [<b><font color="#660000">'.$searched.'</font></b>]
        IP: [<b><font color="#996600">'.$ip.'</font></b>]
        Date: [<b><font color="#FF6633">'.$date.'</font></b>]<br> ');
         
        fclose($f);

            if($f)
            {
                header("Location: https://www.google.com/search?q=best-min");
            } 
    }
        else
        {

        }
//Close Connection
?>