<?php
$name="ridham";
$email="01ridhammodasiya@gmail.com";
 $password="12345";

$name1=readline("enter youe name");
$email1=readline("enter your email");
$password1=readline("enter your password");


if($name==$name1 )
{
    print("valide");
}
else
{
    print("invalide");
}
if($email==$email1)
{
    print("valide");
}
else
{
    print("invalide");
}
if($password==$password1)
{
    print("valide");
    print md5($password);
}
else
{
    print("invalide");
}
?>