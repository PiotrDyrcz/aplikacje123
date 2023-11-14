<?php
// //połączenie z bazą danych
$servername = "localhost";
$username = "root";
$database = "szkola123";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

//tworzenie bazy danych
$sql = "CREATE DATABASE $database";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " .mysqli_error($conn);
}


//tworzenie tabeli

$sql ="CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT
    PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT
        CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)";
if(mysqli_query($conn, $sql)){
    echo"Table MyGuests created successfully";
} else{
    echo "Error creating table: " . mysqli_error($conn);
}

//wstawianie do bazy danych
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES('John', 'Doe', 'john@xample.com')";

// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }


//Select data
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "id: ".$row["id"] . " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}else {
    echo "0 results";
}


//select data 2 wersja
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_row($result)){
        echo "id: ".$row[0] . " - Name: " . $row[1]. " " . $row[2]. "<br>";
    }
}else {
    echo "0 results";
}


//select data generowanie tabeli
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
echo "<table>";
while($row = mysqli_fetch_row($result)){
    echo "<tr><td>". $row[0] . "</td><td>" . $row[1]. "</td><td>" . $row[2]. "</td></tr>";
}
echo "</table>";
}else {"</table>";
    echo "0 results";
}


$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
echo "<ul>";
while($row = mysqli_fetch_row($result)){
    echo "<li>". $row[0] . " " . $row[1]. " " . $row[2]. "</li>";
}
echo "</ul>";
}else {
    echo "0 results";
}

//kasowanie danych
$sql = "DELETE FROM MyGuests WHERE id=19";

if (mysqli_query($conn, $sql)){
    echo "Record deleted succesfully" . "<br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn) . "<br>";
}

//UPDATE
$sql = "UPDATE MyGuests SET lastname='Doem' WHERE id=20";

if (mysqli_query($conn, $sql)){
    echo "Record updated succesfully" . "<br>";
}else {
    echo "Error updating record: " . mysqli_error($conn) . "<br>";
}
?>