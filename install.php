<?php

$con = new PDO('mysql:host=$host' , 'root' , 'root' ,
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
);