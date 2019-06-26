<?php

$errorMSG = "Потрібно ввести ";

// NAME

if (empty($_POST["name"])) {
    $errorMSG .= "Ім'я, ";
} else {
    $name = $_POST["name"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Телефон";
} else {
    $phone = $_POST["phone"];
}


$EmailTo = "yellowhill.school@gmail.com";
$Subject = "Нова заявка";

// prepare email body text
$Body = "Нова заявка на навчання";
$Body .= "\n";
$Body .= "";
$Body .= "Ім'я: ";
$Body .= $_POST["name"];
$Body .= "\n";
$Body .= "Телефон: ";
$Body .= $_POST["phone"];
$Body .= "\n";
$Body .= "Email: ";
$Body .= $_POST["email"];
$Body .= "\n";
$Body .= "Спосіб зв'язку: ";
$Body .= $_POST["check"];
$Body .= "\n";

// send email
$success = '';
if (empty($_POST['name']) or empty($_POST['phone'])){

} else {
    $success = mail($EmailTo, $Subject, $Body, "From:".$email);
}
// redirect to success page
if ($success && $errorMSG == "Потрібно ввести "){
    echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>