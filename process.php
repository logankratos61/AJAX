<?php

echo "processing........";

if(isset($_POST['name'])){
    echo 'POST : Your Name Is '.$_POST['name'];
}


if(isset($_GET['name'])){
    echo 'GET : Your Name Is '.$_GET['name'];
}
?>