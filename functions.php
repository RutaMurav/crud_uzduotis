<?php

init();

function init()
{
    session_start();
    if( !isset( $_SESSION['olympics'])  ){
        $_SESSION['olympics'] = [];
        $_SESSION['id'] = 1;
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    $olympics = [];
    $olympics['name'] = $_POST['name'];
    $olymoics['surname'] = $_POST['surname'];
    $olympics['sport'] = $_POST['sport'];
    $olympics['country'] = $_POST['country'];
    $olympics['gender'] = $_POST['gender'];
    $olympics['victories'] = $_POST['victories'];
    
    $_SESSION['id']++;
}

?>