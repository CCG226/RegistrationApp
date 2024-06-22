<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmed</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<?php 
    include 'selectUserData.php';
?>
<body>
    <h1>Submitted Data</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="username">Name:</label>
<input disabled id="username" type="text" name="username" value="<?php echo $username; ?>"/>
<br/>
<label for="email">email:</label>
<input disabled id="email" type="text" name="email" value="<?php echo $email; ?>"/>
<br/>
<label for="password">password:</label>
<input disabled id="password" type="text" name="password" value="<?php echo $password; ?>"/>
<br/>
<label for="firstName">firstName:</label>
<input disabled id="firstName" type="text" name="firstName" value="<?php echo $firstName; ?>"/>
<br/>
<label for="lastName">lastName:</label>
<input disabled id="lastName" type="text" name="lastName" value="<?php echo $lastName; ?>"/>
<br/>
<label for="address1">address1:</label>
<input disabled id="address1" type="text" name="address1" value="<?php echo $address1; ?>"/>
<br/>
<label for="city">city:</label>
<input disabled id="city" type="text" name="city" value="<?php echo $city; ?>"/>
<br/>
<label for="state">state:</label>
<input disabled id="state" type="text" name="state" value="<?php echo $state; ?>"/>
<br/>
<label for="zipcode">zipcode:</label>
<input disabled id="zipcode" type="text" name="zipcode" value="<?php echo $zipcode; ?>"/>
<br/>
<label for="phonenumber">phonenumber:</label>
<input disabled id="phonenumber" type="text" name="phonenumber" value="<?php echo $phonenumber; ?>"/>
<br/>
<label for="dateOfBirth">dateOfBirth:</label>
<input disabled id="dateOfBirth" type="text" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>"/>
<br/>
<label for="gender">gender:</label>
<input disabled id="gender" type="text" name="gender" value="<?php echo $gender; ?>"/>
<br/>
<label for="maritalStatus">maritalStatus:</label>
<input disabled id="maritalStatus" type="text" name="maritalStatus" value="<?php echo $maritalStatus; ?>"/>
<br/>
</form>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
