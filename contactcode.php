<?php
// Email Integration

$name =$_POST['user_name'];
$email =$_POST['user_email'];
$subject = $_POST['user_subject'];
$msg = $_POST['user_msg'];

$to ="nishadsoni104@gmail.com";

$header = "from:$email";


         //  mail(to, subject,msg,header);       ----> mail function in php    ---> iske 4 parameter hote hai..                      
        // to ---> kisko send ho 
       //   header ----> means from   
      //  msg ---> user ko display krne ke liye from submit ho gaya  
        if(mail($to,$subject,$msg,$header)){
            $msg1 = "Submitted Successfully";
        };

?> 