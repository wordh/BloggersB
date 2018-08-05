<?php
session_start();
require_once "functions.php";

if (isset($_POST['logout_submit']))
{
    logOutUser();
    redirectUserTo();
}