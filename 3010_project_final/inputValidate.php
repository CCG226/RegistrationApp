<?php 



$usernameErrorMsg = "";
$username = "";
$passwordErrorMsg = "";
$password = "";
$confirmPassword = "";
$confirmPasswordErrorMsg = "";
$firstName = "";
$firstNameErrorMsg = "";
$lastName = "";
$lastNameErrorMsg = "";
$address1 = "";
$address1ErrorMsg = "";
$address2 = "";
$address2ErrorMsg = "";
$city = "";
$cityErrorMsg = "";
$state = "";
$stateErrorMsg = "";
$zipcode = "";
$zipcodeErrorMsg = "";
$phonenumber = "";
$phonenumberErrorMsg = "";
$email = "";
$emailErrorMsg = "";
$dateOfBirth = "";
$dateOfBirthErrorMsg = "";
$gender = "";
$genderErrorMsg = "";
$maritalStatus = "";
$maritalStatusErrorMsg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // validate username
  $isValid = true;
  $username = sanitize_input($_POST["username"]);
  $password =  sanitize_input($_POST["password"]);
  $confirmPassword =  sanitize_input($_POST["confirmPassword"]);
  $firstName =  sanitize_input($_POST["firstName"]);
  $lastName =  sanitize_input($_POST["lastName"]);
  $address1 =  sanitize_input($_POST["address1"]);
  $address2 =  sanitize_input($_POST["address2"]);
  $city =  sanitize_input($_POST["city"]);
  $state =  sanitize_input($_POST["state"]);
  $zipcode =  sanitize_input($_POST["zipcode"]);
  $phonenumber =  sanitize_input($_POST["phonenumber"]);
  $email =  sanitize_input($_POST["email"]);
  $dateOfBirth =  sanitize_input($_POST["dateOfBirth"]);
    $gender = sanitize_input($_POST["gender"]);
    $maritalStatus = sanitize_input($_POST["maritalStatus"]);


  if (empty($username)) {
    $usernameErrorMsg = "Username is a required field";
    $isValid = false;
  }
   else{
   
  if (strlen($username) < 6) {
      $usernameErrorMsg = "Min: 6 Characters";
      $isValid = false;
    } 
   elseif (strlen($username) > 50) {
      $usernameErrorMsg = "Username must not exceed 50 characters";
      $isValid = false;
    }
  }

  if (empty($password)) {
    $passwordErrorMsg =  "Password is a required field";
    $isValid = false;
  }
else {
  if (strlen($password) < 8) {
    $passwordErrorMsg = "Min: 8 Characters";
    $isValid = false;
  } elseif (strlen($password) > 50) {
    $passwordErrorMsg = "Password must not exceed 50 characters";
    $isValid = false;
  }
  elseif 
  (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]*$/', $password)) {
    $passwordErrorMsg = "Password requires at least one uppercase letter, one lowercase letter, one digit, and one special character";
    $isValid = false;
  }
}

if (empty($confirmPassword)) {
  $confirmPasswordErrorMsg = "Confirm Password is a required field";
  $isValid = false;
}
else {
if (strlen($confirmPassword) < 8) {
  $confirmPasswordErrorMsg = "Min: 8 Characters";
  $isValid = false;
} elseif (strlen($confirmPassword) > 50) {
  $confirmPasswordErrorMsg = "Max: 50 Characters";
  $isValid = false;
}
elseif 
(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]*$/', $confirmPassword)) {
  $confirmPasswordErrorMsg = "Password requires at least  one uppercase letter, one lowercase letter, one digit, and one special character";
  $isValid = false;
}
elseif($password != $confirmPassword)
{
$passwordErrorMsg = "passwords must match!";
$confirmPasswordErrorMsg = "passwords must match!";
$isValid = false;
}
}
if (empty($firstName)) {
  $firstNameErrorMsg = "First Name is a required field";
  $isValid = false;
}
 else{
 
if (strlen($firstName) > 50) {
    $firstNameErrorMsg = "Max: 50 Characters";
    $isValid = false;
  }  
}
if (empty($lastName)) {
  $isValid = false;
  $lastNameErrorMsg = "Last Name is a required field";
}
 else{
 
if (strlen($lastName) > 50) {
  $isValid = false;
    $lastNameErrorMsg = "Max: 50 Characters";
  }  
}
if (empty($address1)) {
  $isValid = false;
  $address1ErrorMsg = "Address 1 is a required field";
}
 else{
 
if (strlen($address1) > 100) {
  $isValid = false;
    $address1ErrorMsg = "Max: 100 Characters";
  }  
}

if(!empty($address2))
{
  if (strlen($address2) > 100) {
    $address2ErrorMsg = "Max: 100 Characters";
  } 
}

if (empty($city)) {
  $isValid = false;
  $cityErrorMsg = "City is a required field";
}
 else{
 
if (strlen($city) > 50) {
  $isValid = false;
    $cityErrorMsg = "Max: 50 Characters";
  }  
}
if (empty($state)) {
  $isValid = false;
  $cityErrorMsg ="State is a required field";
}
 else{
 
if (strlen($state) > 52) {
  $isValid = false;
    $cityErrorMsg = "Max: 52 Characters";
  }  
}

if (empty($zipcode)) {
  $isValid = false;
  $zipcodeErrorMsg = "Zip Code is a required field";
}
 else{
 
if (strlen($zipcode) < 5) {
  $isValid = false;
    $zipcodeErrorMsg = "Min: 5 Characters";
  } 
 elseif (strlen($zipcode) > 10) {
  $isValid = false;
    $zipcodeErrorMsg = "Max: 10 Characters";
  }
  elseif(!preg_match('/^\d{5}(-\d{4})?$/', $zipcode)) {
    $isValid = false;
   $zipcodeErrorMsg = "Must be format: xxxxx or xxxxx-xxxx, where x represents a digit:";
}
}
if (empty($phonenumber)) {  $isValid = false;
  $phonenumberErrorMsg = "Phone Number is a required field";
}
 else{
 
if (strlen($phonenumber) > 12) {
  $isValid = false;
    $phonenumberErrorMsg = "Max: 12 Characters";
  }
  elseif(!preg_match('/^\d{3}-\d{3}-\d{4}$/', $phonenumber)) {
    $isValid = false;
   $phonenumberErrorMsg = "Must be format: xxx-xxx-xxxx , where x represents a digit:";
}
}
if (empty($email)) {
  $isValid = false;
  $emailErrorMsg = "Email is a required field";
}
 else{
  if(!preg_match('/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/', $email)) 
  {
    $isValid = false;
    $emailErrorMsg = "must be in email format, ex: example@something.com";
  }
}
if (empty($dateOfBirth)) {
  $isValid = false;
  $dateOfBirthErrorMsg = "date of birth is a required field";
}
 

if (!isset($_POST['maritalStatus'])) {
  $isValid = false;
  $maritalStatusErrorMsg = "Must select an option";
}
if(!isset($_POST['gender'])) {
  $isValid = false;
  $genderErrorMsg = "Must select an option";
}
//$isValid = true;

}



function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>