<?php

if(isset($_GET['name'])){
    echo 'Username is: ' . $_GET['name'];
}

if(isset($_POST['name'])){
    echo '(POST)Username is: ' . $_POST['name'];
}