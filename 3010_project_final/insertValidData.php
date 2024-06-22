<?php 
if($isValid)
{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName, address1, city,
        state, zipCode, phone, email, gender, maritalStatus, dateOfBirth) 
        VALUES (:username, :password, :firstName, :lastName, :address1,
        :city, :state, :zipcode, :phonenumber, :email, :gender, :maritalStatus, :dateOfBirth)");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':firstName', $firstName);
        $sql->bindParam(':lastName', $lastName);
        $sql->bindParam(':address1', $address1);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zipcode', $zipcode);
        $sql->bindParam(':phonenumber', $phonenumber);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $maritalStatus);
        $sql->bindParam(':dateOfBirth', $dateOfBirth);

        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: confirmation.php");

    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();

    } finally {
        $conn = null;
    }
}
?>