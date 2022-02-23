<?php
        $conn=new mysqli('localhost','root','','php_qustion');
        if($conn->connect_error){
            die ('database not conected');
        }
?>