

<?php

        require_once 'config.php';
        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("database is not connected");

// function for showing pages 


    function showPage($page,$data=""){
        include("assets/pages/$page.php");
    }

    //function for show errors.

    function showError($field){
        if(isset($_SESSION['error'])){
            $error = $_SESSION['error'];
            if(isset($error['$field']) && $field ==$error['field']){
                ?>
                    <div class="alert alert-danger my-2" role = "alert">
                        <?=$error['msg']?>
                    </div>

                <?php
            }
        }
    }


    //function for show previous form data

    function showFormData($field){
        if(isset($_SESSION['formdata'])){
            $formdata = $_SESSION['formdata'];
            return $formdata[$field];
        }
    }






    // validating the signup form

    function validateSignupForm($form_data){
        $response = array();
        $response['status']=true;
        if(!$form_data['password']){
            $response['msg']="password is not given" ;
            $response['status'] = false;
            $response['field']='password';
        }
        if(!$form_data['username']){
            $response['msg']="username is not given" ;
            $response['status'] = false;
            $response['field']='username';
        }
        if(!$form_data['email']){
            $response['msg']="email is not given" ;
            $response['status'] = false;
            $response['field']='email';
        }
        if(!$form_data['last_name']){
            $response['msg']="last name is not given" ;
            $response['status'] = false;
            $response['field']='last_name';
        }
        if(!$form_data['first_name']){
            $response['msg']="first name is not given" ;
            $response['status'] = false;
            $response['field']='first_name';
        }
      
        return $response;
      
       
       
    }

?>
