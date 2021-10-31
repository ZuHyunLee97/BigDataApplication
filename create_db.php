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
AName VARCHAR(30) NOT NULL,
Country VARCHAR(30) NOT NULL,
Discipline VARCHAR(30) NOT NULL
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table1
$sql = "CREATE TABLE Coaches (
    CName VARCHAR(30) NOT NULL,
    Country VARCHAR(30) NOT NULL,
    Discipline VARCHAR(30) NOT NULL,
    Discription VARCHAR(30) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// create table2
$sql = "CREATE TABLE Medal (
    Ranking INT(6) NOT NULL, 
    Country VARCHAR(30) NOT NULL,
    Gold INT(6) NOT NULL,
    Silver INT(6) NOT NULL,
    Bronze INT(6) NOT NULL,
    Total INT(6) NOT NULL,
    RankByTotal INT(6) NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// create table3
$sql = "CREATE TABLE EntriesGender (
    Discipline VARCHAR(30) NOT NULL, 
    Female INT(6) NOT NULL,
    Male INT(6) NOT NULL,
    Total INT(6) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// create table4
$sql = "CREATE TABLE Teams (
    Country VARCHAR(30) NOT NULL, 
    Discipline VARCHAR(30) NOT NULL,
    NOC VARCHAR(30) NOT NULL, 
    Gender VARCHAR(30) NOT NULL, 
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// create table5

// create table6

// create table7

// create table8

// create table9

// create table10

// create table11

 
$conn->close();
?>
