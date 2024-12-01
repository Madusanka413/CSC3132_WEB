<?php
    define('SERVERNAME','127.0.0.1:3306');
    define('USERNAME','root');
    define('PASSWORD','mariadb');
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