<?php
if($_POST["submit"]) {
    mail("crackchaserrepair@gmail.com", $_POST["name"] + "has requested a quote from Crack Chaser!" ,
    $_POST["textarea"]. "From: " + $_POST["email"] + " (" + $_POST["number"] + ")");
    mail("mjbraun@ualberta.ca", $_POST["name"] + "has requested a quote from Crack Chaser!" ,
    $_POST["textarea"]. "From: " + $_POST["email"] + " (" + $_POST["number"] + ")");
    }
?>