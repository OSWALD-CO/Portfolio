<?php

if (isset($_POST['submit'])) {
    
    $name = $_Post['name'];
    $mailFrom = $_Post['email'];
    $message = $_Post['message'];

    $mailTo = "coswald@my365.bellevue.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from you portfolio from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
