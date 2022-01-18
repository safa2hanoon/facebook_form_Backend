<?php
$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$username = $firstname . ' ' . $lastname;

$email_mobile = $_POST['email-mobile'];
$password = $_POST['up-password'];

$Bday = $_POST['birth-day']; 
$Bmonth = $_POST['birth-month'];
$Byear=$_POST['birth-year'];

$gen = $_POST['gen'];
echo " Hello $username , your email/mobile is $email_mobile , your password is $password ,your birthday is $Bday/$Bmonth/$Byear and you are $gen"
?>