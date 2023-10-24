<?php 
// Database configuration 
$dbHost     = "127.0.0.1"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "portofolio";
$dbPort     ="4306";
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}