<?php
session_start();
if(isset($_SESSION['Email']) or isset($_SESSION['Email'])) {
    session_unset();
}
header('Location:../control_panel.php');

?>