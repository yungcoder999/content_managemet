<?php
$connect = mysqli_connect('localhost', 'cms', 'localhost', 'cms');

if (mysqli_connect_errno()){
    exit('Failed to connect to MYSQL: ' .mysqli_connect_error() ); 
}

?> 