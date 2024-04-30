<?php
require_once 'functions.php';
if(isset($_GET['signup'])){
    $response = validateSignupForm($_POST);
    if($response['status']){
       if(createUser($_POST)){
        header('location:../../?login');
       }else{
        echo "<script>alert('something is wrong')</alert>";
       }

    }else{
        $_SESSION['error']=$response;
        $_SESSION['formdata'] = $_POST;
        header("location:../../?signup");
        
    }

}