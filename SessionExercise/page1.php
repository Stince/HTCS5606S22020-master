<?php
@session_start();
$username = $_SESSION["username"];
echo "Username:".$username;