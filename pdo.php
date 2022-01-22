<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'tutorial_php';

// data source name
$dns = "mysql:host=$host;dbname=$dbname";

$pdo = new PDO($dns, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Obj


// SELECT ALL DATA
// $stmt = $pdo->query("SELECT * FROM employee");

// while($row = $stmt->fetch()){
//     echo 'Fullname: '.$row->firstname." ".$row->lastname."<br/>";
// }

$firstname = 'francis';
$lastname = 'ilacad';
// Prepared statement
// $sql = "SELECT * FROM employee WHERE firstname = '$firstname'";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();

// while($row = $stmt->fetch()){
//     echo 'Fullname: '.$row->firstname." ".$row->lastname."<br/>";
// }



// Positional Parameters
// $sql = "SELECT * FROM employee WHERE firstname = ? AND lastname = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$firstname, $lastname]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//     echo 'Fullname: '.$user->firstname." ".$user->lastname."<br/>";
// }

// while($row = $stmt->fetch()){
//     echo 'Fullname: '.$row->firstname." ".$row->lastname."<br/>";
// }


// Named Parameters
// $sql = "SELECT * FROM employee WHERE firstname = ':fname'";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['fname' => $firstname]);

// while($row = $stmt->fetch()){
//     echo 'Fullname: '.$row->firstname." ".$row->lastname."<br/>";
// }

// GET SINGLE RECORD
// $ID = 1;
// $sql = "SELECT * FROM employee WHERE ID = ?"; // query
// $stmt = $pdo->prepare($sql); // prepare
// $stmt->execute([$ID]); // execute
// $user = $stmt->fetch(); // fetchAll

// echo $user->firstname;



// COUNT NUMBER OF ROWS
// $lastname = 'ilacad';
// $sql = "SELECT * FROM employee WHERE lastname = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$lastname]);
// $users = $stmt->fetchAll();
// $countRow = $stmt->rowCount();

// if($countRow > 0){
//     foreach($users as $user){
//         echo 'Fullname: '.$user->firstname." ".$user->lastname."<br/>";
//     }
// } else {
//     echo "walang nadetect na laman";
// }


// INSERT
// $fname = 'albert';
// $lname = 'ilacad';
// $age = 18;

// $sql = "INSERT INTO employee(`firstname`, `lastname`, `age`) VALUES(?, ?, ?)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$fname, $lname, $age]);
// $countRow = $stmt->rowCount();

// if($countRow > 0){
//     echo 'nainsert na';
// } else {
//     echo 'di pa nainsert';
// }



// UPDATE
// $lname = 'ilacad';
// $lnameMali = 'ilacad2';
// $sql = "UPDATE employee SET lastname = ? WHERE lastname = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$lname, $lnameMali]);
// $countRow = $stmt->rowCount();

// if($countRow > 0){
//     echo 'nakapag update na';
// } else {
//     echo 'di pa nakapag update';
// }


// DELETE
// $age = 20;
// $sql = "DELETE FROM employee WHERE age = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$age]);
// $countRow = $stmt->rowCount();

// if($countRow > 0){
//     echo 'nakapagdelete na';
// } else {
//     echo 'di pa nakapagdelete';
// }

// WILDCARD SEARCH
$search = 'c%';
$sql = "SELECT * FROM employee WHERE firstname LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$users = $stmt->fetchAll();
$countRow = $stmt->rowCount();

foreach($users as $user){
    echo 'Fullname: '.$user->firstname." ".$user->lastname."<br/>";
}

?>