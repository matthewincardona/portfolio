<?php
if($_POST["message"]) {
    mail("mpi7253@rit.edu", "Form to email message", $_POST["message"], "From: ");
}
?>