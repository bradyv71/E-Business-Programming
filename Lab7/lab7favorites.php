<?php 
session_start();
echo"Full name: ".$_SESSION["fullname"]."<br>";
echo"Course ID: ".$_SESSION["courseid"]."<br>";
echo"Favorite Programming language: ".$_COOKIE["favlanguage"]."<br>";
echo"Favorite Operating System: ".$_COOKIE["favoperatingsystem"]."<br>";
?>