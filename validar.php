<?php
            
if (isset ($_POST['email'], $_POST['password'])){
    
    $email_ok = 'admin@potrerodigital.com';
                
    $password_ok = 'backEnd';
    
    //la letra E de backend es mayuscula
    
    
    if ($_POST['email'] == $email_ok && $_POST['password'] == $password_ok){
       header ("Location: correcto.php");
    }else{
        header ("Location: login.php");
    }
                
}
            
