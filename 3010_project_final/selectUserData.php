<?php 
include 'connectionInfo.php'
?>

<?php
try {
    $last_id = $_SESSION["last_id"];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT userName, password, firstName, lastName, address1, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth ".
    " FROM registration WHERE id = :last_id");
    $stmt->bindParam(':last_id', $last_id);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $assocArray = $stmt->fetchAll()[0];
    $username = $assocArray["userName"];
    $password = $assocArray["password"];
    $firstName = $assocArray["firstName"];
    $lastName = $assocArray["lastName"];
    $address1 = $assocArray["address1"];
    $city = $assocArray["city"];
    $state = $assocArray["state"];
    $zipcode = $assocArray["zipCode"];
    $phonenumber = $assocArray["phone"];
    $email = $assocArray["email"];
    $gender = $assocArray["gender"];
    $maritalStatus = $assocArray["maritalStatus"];
    $dateOfBirth = $assocArray["dateOfBirth"];
} 
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
} finally {
    $conn = null;
}
?>