<?php 

session_start();
session_destroy();

header("Location: index.php"); // MAYBE TO login.php

?>