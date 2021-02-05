<?php 
if(isset($_POST['submit'])){
    $to = "altinarexha@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $formati = $_POST['formati'];
    $data = $_POST['data'];
    $koha = $_POST['koha'];
    $subject = "Caktim i terminit";
    $subject2 = "Kopja e caktimit terminit";
    $message = $fname . "\n"."Formati: " . $formati . " Data:" .$data . "Koha: ".$koha. "\n\n";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
   if(mail($to,$subject,$message,$headers)){
       echo"<h1>e qum</h1>";
   }else{
    echo"<h1>nuk e qum</h1>";

   }
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>