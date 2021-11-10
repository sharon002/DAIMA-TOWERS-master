<?php
// php code to send contact form to both client and the owner
if (isset($_POST['submit'])){ 
    // $mailto =eworkspacecenter@gmail.com;
    // $from =$_POST['email'];
    // $name =$_POST['name'];
    // $subject =$_POST['subject'];
    // $subject2 = "Your message submitted successfuly | eworkspacecenter@gmail.com";
    // $message = " Client Name:".$name."Wrote the following Message". "\n\n".$_POST['mesage'];
    // $message2 = " Dear:".$name."\n\n"."Thank you for contact us ! we'll get back nto you shartly";
    // $headers = "From:".$from;
    // $hearders2 = "from:".$mailto;
    // $resuilt = mail($mailto.$subject,$message,$headers);
    // $resuilt2 = mail($from.$subject2,$message2,$headers2);

    // if ($result){
    //      echo '<script type="text/javascript">alert("Message Sent.Thank you!We will contact you shortly.")> ';
    // } else{
    //     echo '<script type="text/javascript">alert(submission failed! Tyr again later") </script>';
    // }

    // }

     

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];



    $mailTo     = 'eworkspacecenter@gmail.com';
    $headers = 'From: "$.mailFrom"';
    $text= '"You have received an e-mail from ".$name.".\n\n".$message;
    

    mail($mailTo,$subject,$text,$hearders);
    hearder("Location:index.php?mailsend");

    }
