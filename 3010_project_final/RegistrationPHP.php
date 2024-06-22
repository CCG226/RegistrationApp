
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/Registration.css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Registration.js"></script>
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Article Generator</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarColor02"
          aria-controls="navbarColor02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="Index.html"
                >Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="RegistrationPHP.php"
                >Registration</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">Animation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="BuildPaper.html">Build</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <body>
 <?php 
 include 'connectionInfo.php'
 ?>
 <?php 
 include 'inputValidate.php'
 ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="container my-auto">
        <div class="row mt-3">
          <div class="col form-group">
            <label for="username" id="label">Username</label>
            <input
              type="text"
              class="form-control textInput"
              id="username"
              name="username"
              placeholder="Username"
              onkeyup="validateUsername();"
            />
   
            <span style="color: red;" class="error"><?php echo $usernameErrorMsg; ?></span>
            <span
              id="errUsername"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="email" id="label">Email</label>
            <input
              type="text"
              class="form-control textInput"
              id="email"
              name="email"
              placeholder="Email"
              onkeyup="validateEmail();"
            />
            <span style="color: red;" class="error"><?php echo $emailErrorMsg; ?></span>
            <span
              id="errEmail"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="password" id="label">Password</label>
            <input
              type="password"
              class="form-control textInput"
              id="password"
              name="password"
              placeholder="Password"
              onkeyup="validatePassword();"
            />
            <span style="color: red;" class="error"><?php echo $passwordErrorMsg; ?></span>
            <span
              id="errPassword"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="confirmPassword" id="label">Confirm Password</label>
            <input
              type="password"
              class="form-control textInput"
              id="confirmPassword"
              name="confirmPassword"
              placeholder="Confirm Password"
              onkeyup="validateRepeatPassword();"
            />
            <span style="color: red;" class="error"><?php echo $confirmPasswordErrorMsg; ?></span>
            <span
              id="errRepeatPassword"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="firstName" id="label">First Name</label>
            <input
              type="text"
              class="form-control textInput"
              id="firstName"
              name="firstName"
              placeholder="First Name"
              onkeyup="validateFirstName();"
            />
            <span style="color: red;" class="error"><?php echo $firstNameErrorMsg; ?></span>
            <span
              id="errFirstName"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="lastName" id="label">Last Name</label>
            <input
              type="text"
              class="form-control textInput"
              id="lastName"
              name="lastName"
              placeholder="Last Name"
              onkeyup="validateLastName();"
            />
            <span style="color: red;" class="error"><?php echo $lastNameErrorMsg; ?></span>
            <span
              id="errLastName"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="address1" id="label">Address Line 1</label>
            <input
              type="text"
              class="form-control textInput"
              id="address1"
              name="address1"
              placeholder="Street address or P.O. Box"
              onkeyup="validateAddress1();"
            />
            <span style="color: red;" class="error"><?php echo $address1ErrorMsg; ?></span>
            <span
              id="errAddress1"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="address2" id="label">Address Line 2 (optional)</label>
            <input
              type="text"
              class="form-control textInput"
              id="address2"
              name="address2"
              placeholder="Apt, suite, unit, building, floor, etc."
              onkeyup="validateAddress2();"
            />
            <span style="color: red;" class="error"><?php echo $address2ErrorMsg; ?></span>
            <span
              id="errAddress2"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="zipcode" id="label">Zip Code</label>
            <input
              type="text"
              class="form-control textInput"
              id="zipcode"
              name="zipcode"
              placeholder="Zip Code"
              onkeyup="validateZipCode();"
            />
            <span style="color: red;" class="error"><?php echo $zipcodeErrorMsg; ?></span>
            <span
              id="errZipCode"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="phonenumber" id="label">Phone Number</label>
            <input
              type="text"
              class="form-control textInput"
              id="phonenumber"
              name="phonenumber"
              placeholder="Phone Number"
              onkeyup="validatePhoneNumber();"
            />
            <span style="color: red;" class="error"><?php echo $phonenumberErrorMsg; ?></span>
            <span
              id="errPhoneNumber"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="city" id="label">City</label>
            <input
              type="text"
              class="form-control textInput"
              id="city"
              name="city"
              placeholder="City"
              onkeyup="validateCity();"
            />
            <span style="color: red;" class="error"><?php echo $cityErrorMsg; ?></span>
            <span
              id="errCity"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-group">
            <label for="state" id="label">State</label>
            <select
              onchange="validateState();"
              id="state"
              name="state"
              class="form-select textInput"
            >
              <option value="AL" selected>Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
            <span style="color: red;" class="error"><?php echo $stateErrorMsg; ?></span>
            <span
              id="errState"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-check">
            <label for="maritalStatus" id="label" class="fw-bold h6"
              >Marital Status</label
            >
            <div class="radio-field">
              <br />
              <label for="married" class="form-check-label mb-2">Married</label>
              <input
                type="radio"
                class="form-check-input"
                id="married"
                value="married"
                name="maritalStatus"
                onchange="validateStatus();"
              />
              <br />
              <label for="single" class="form-check-label mb-2">Single</label>
              <input
                type="radio"
                class="form-check-input"
                id="single"
                value="single"
                name="maritalStatus"
                onchange="validateStatus();"
              />
              <br />
              <label for="separated" class="form-check-label mb-2"
                >Separated</label
              >
              <input
                type="radio"
                class="form-check-input"
                id="separated"
                name="maritalStatus"
                value="separated"
                onchange="validateStatus();"
              />
              <br />
              <label for="divorced" class="form-check-label mb-2"
                >Divorced</label
              >
              <input
                type="radio"
                class="form-check-input"
                id="divorced"
                value="divorced"
                name="maritalStatus"
                onchange="validateStatus();"
              />
              <br />
              <label for="widowed" class="form-check-label mb-2">Widowed</label>
              <input
                type="radio"
                class="form-check-input"
                id="widowed"
                value="widowed"
                name="maritalStatus"
                onchange="validateStatus();"
              />
            </div>
            <span style="color: red;" class="error"><?php echo $maritalStatusErrorMsg; ?></span>
            <span
              id="errStatus"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
          <div class="col form-check">
            <label for="gender" id="label" class="fw-bold h6">Gender</label>
            <div class="radio-field">
              <br />
              <label for="male" class="form-check-label mb-2">Male</label>
              <input
                type="radio"
                class="form-check-input"
                id="male"
                name="gender"
                value="male"
                onchange="validateGender();"
              />
              <br />
              <label for="female" class="form-check-label mb-2">Female</label>
              <input
                type="radio"
                class="form-check-input"
                id="female"
                name="gender"
                value="female"
                onchange="validateGender();"
              />
              <br />
              <label for="other" class="form-check-label mb-2">Other</label>
              <input
                type="radio"
                class="form-check-input"
                id="other"
                name="gender"
                value="other"
                onchange="validateGender();"
              />
            </div>
            <span style="color: red;" class="error"><?php echo $genderErrorMsg; ?></span>
            <span
              id="errGender"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col form-group">
            <label for="dateOfBirth" id="dateOfBirthLabel">Date Of Birth</label>
            <input
              type="date"
              class="form-control mb-3 textInput"
              id="dateOfBirth"
              name="dateOfBirth"
              placeholder="Date Of Birth"
              onchange="validateDateOfBirth();"
            />
            <span style="margin-left:20%; color: red;" class="error"><?php echo $dateOfBirthErrorMsg; ?></span>
            <span
              id="errDate"
              class="text-center text-danger fw-bold mt-3"
            ></span>
          </div>
        </div>
        <div class="row mt-3" id="btns">
          <div class="col mb-3">
            <button
              type="submit"
              id="submitBtn"
              value="Submit"
              class="btn btn-outline-success"
            >
              Submit
            </button>
          </div>
          <div class="col mb-3">
            <button
              type="reset"
              id="resetBtn"
              value="Reset Data"
              class="btn btn-outline-danger"
              onclick="Reset();"
            >
              Reset
            </button>
          </div>
        </div>
      </div>
    </form>


  </body>

<?php 
include 'insertValidData.php'
?>

</html>
