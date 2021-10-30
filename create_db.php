<?php
$servername = "localhost";
$username = "hp";
$password = "0000";
$dbname = "ODB";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
// create table0
$sql = "CREATE TABLE Athletes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
aname VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL,
age INT(2) NOT NULL,
totalMedalNum INT(2) NOT NULL
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table1
$sql = "CREATE TABLE Country (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cname VARCHAR(30) NOT NULL,
    numOfAthletes INT(4) NOT NULL,
    totalMedalNum INT(2) NOT NULL,
    totalWinningNum INT(3) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// create table2
$sql = "CREATE TABLE Medal (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    mname VARCHAR(30) NOT NULL,
    color VARCHAR(25) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table3

// create table4

// create table5

// create table6

// create table7

// create table8

// create table9

// create table10

// create table11

 
$conn->close();
?>
