<?php

    $connect = mysqli_connect('localhost', 'root', '', 'auto');

    if (!$connect) {
        die('Error connect to DataBase');
    }