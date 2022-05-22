<?php
$email="soufianeeraad@gmail.com";
$psword="soufiane";

if(isset($_POST["login"])){
$mail=$_POST["mail"];
$pasw=$_POST["pasw"];
if($mail==$email and $pasw==$psword){
    if(isset($_POST["check"])){
        setcookie("mail",$mail,time()+365*60*3600);
        setcookie("pasw",$pasw,time()+365*60*3600);
    }
    session_start();
    $_SESSION["mail"]=$mail;
    header("location:binvennue.php");}

else{ 
    echo 'invalid email ou mots de passe.<br><a href=affichage.php>click ici </a>';
}
}else
{
   header("location:affichage.php"); 
}



?>