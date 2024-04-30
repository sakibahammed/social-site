<?php
   //including from function

   require_once 'assets/php/functions.php';

   
    

if(isset($_GET['signup'])){
    showPage('header',['page_title'=>'SocialSite - signup']);
    showPage('signup');
    
}

showPage('footer');


unset($_SESSION['error']);