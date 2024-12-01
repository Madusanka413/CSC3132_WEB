<?php
    define('SERVERNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DBNAME','students');

    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
    try{
        if(!$connect){
            die("connetion failed".mysqli_connect_error());
        }
        else{
            echo "connection succesfully<br>";
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }
    //echo "abc<br>";
?>