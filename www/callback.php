<?php

$EmailTo = "yellowhill.school@gmail.com";
$Subject = "Форма зворотнього зв'язку";

// prepare email body text
$Body = "Передзвоніть мені";
$Body .= "\n";
$Body .= "";
$Body .= "Ім'я: ";
$Body .= $_POST["name"];
$Body .= "\n";
$Body .= "Телефон: ";
$Body .= $_POST["phone"];
$Body .= "\n";


// send email
$success = '';
if (empty($_POST['name']) or empty($_POST['phone'])){

} else {
    $success = mail($EmailTo, $Subject, $Body);
}
// redirect to success page
if ($success){
    echo "success";
}
?>