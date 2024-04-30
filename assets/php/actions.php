<?php
require_once 'functions.php';
if(isset($_GET['signup'])){
    $response = validateSignupForm($_POST);
    if($response['status']){
        
    }else{
        $_SESSION['error']=$response;
        $_SESSION['formdata'] = $_POST;
        header("location:../../?signup");
        
    }

}