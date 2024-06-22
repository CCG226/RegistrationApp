function validateUsername() {
  var input = document.getElementById("username");
  var Username = document.getElementById("username").value;
  var errUsername = document.getElementById("errUsername");
  if (Username.length === 0) {
    errUsername.innerHTML = "Field Cannot Be Empty";
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    return false;
  }
  if (Username.length > 50) {
    errUsername.innerHTML = "Max Length: 50 Characters";
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    return false;
  }
  if (Username.length < 6) {
    errUsername.innerHTML = "Min Length: 6 Characters";
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errUsername.innerHTML = "";
  return true;
}
function validatePassword() {
  var input = document.getElementById("password");
  var Password = document.getElementById("password").value;
  var errPassword = document.getElementById("errPassword");
  var RepeatPassword = document.getElementById("confirmPassword").value;
  var errRepeatPassword = document.getElementById("errRepeatPassword");
  if (Password.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (Password.length > 50) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Max Length: 50 Characters";
    return false;
  }

  if (Password.length < 8) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Min Length: 8 Characters";
    return false;
  }
  var capital = /[A-Z]/;
  var lowercase = /[a-z]/;
  var digit = /\d/;
  var specialChar = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

  if (!capital.test(Password)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Must Contain a Capital Letter";
    return false;
  }
  if (!lowercase.test(Password)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Must Contain a Lowercase Letter";
    return false;
  }
  if (!digit.test(Password)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Must Contain a Digit Letter";
    return false;
  }
  if (!specialChar.test(Password)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPassword.innerHTML = "Must Contain a Special Character Letter";
    return false;
  }
  console.log(Password + " " + RepeatPassword);
  if (Password !== RepeatPassword) {
    errRepeatPassword.innerHTML = "Passwords Must Match";
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errPassword.innerHTML = "";
  return true;
}
function validateRepeatPassword() {
  var input = document.getElementById("confirmPassword");
  var Password = document.getElementById("password").value;
  var RepeatPassword = document.getElementById("confirmPassword").value;
  var errRepeatPassword = document.getElementById("errRepeatPassword");
  if (RepeatPassword.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (RepeatPassword.length > 50) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Max Length: 50 Characters";
    return false;
  }

  if (RepeatPassword.length < 8) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Max Length: 8 Characters";
    return false;
  }
  var capital = /[A-Z]/;
  var lowercase = /[a-z]/;
  var digit = /\d/;
  var specialChar = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

  if (!capital.test(RepeatPassword)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Must Contain a Capital Letter";
    return false;
  }
  if (!lowercase.test(RepeatPassword)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Must Contain a Lowercase Letter";
    return false;
  }
  if (!digit.test(RepeatPassword)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Must Contain a Digit Letter";
    return false;
  }
  if (!specialChar.test(RepeatPassword)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Must Contain a Special Character Letter";
    return false;
  }
  console.log(Password + " " + RepeatPassword);
  if (Password !== RepeatPassword) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errRepeatPassword.innerHTML = "Passwords Must Match";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errRepeatPassword.innerHTML = "";
  return true;
}
function validateFirstName() {
  var input = document.getElementById("firstName");
  var FirstName = document.getElementById("firstName").value;
  var errFirstName = document.getElementById("errFirstName");
  if (FirstName.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errFirstName.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (FirstName.length > 50) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errFirstName.innerHTML = "Max Length: 50";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errFirstName.innerHTML = "";
  return true;
}
function validateLastName() {
  var input = document.getElementById("lastName");
  var LastName = document.getElementById("lastName").value;
  var errLastName = document.getElementById("errLastName");
  if (LastName.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errLastName.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (LastName.length > 50) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errLastName.innerHTML = "Max Length: 50";

    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errLastName.innerHTML = "";
  return true;
}
function validateAddress1() {
  var input = document.getElementById("address1");
  var Address1 = document.getElementById("address1").value;
  var errAddress1 = document.getElementById("errAddress1");
  if (Address1.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errAddress1.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (Address1.length > 100) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errAddress1.innerHTML = "Max Length: 100";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errAddress1.innerHTML = "";
  return true;
}
function validateAddress2() {
  var input = document.getElementById("address2");
  var Address2 = document.getElementById("address2").value;
  var errAddress2 = document.getElementById("errAddress2");
  if (Address2.length > 100) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errAddress2.innerHTML = "Max Length: 100";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errAddress2.innerHTML = "";
  return true;
}
function validateCity() {
  var input = document.getElementById("city");
  var City = document.getElementById("city").value;
  var errCity = document.getElementById("errCity");
  if (City.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errCity.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (City.length > 50) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errCity.innerHTML = "Max Length: 50";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errCity.innerHTML = "";
  return true;
}
function validateState() {
  var input = document.getElementById("state");
  var State = document.getElementById("state").value;
  var errState = document.getElementById("errState");
  if (State.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errState.innerHTML = "Field Cannot Be Empty";
    return false;
  }

  if (State.length > 52) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errState.innerHTML = "Max Length: 52";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errState.innerHTML = "";
  return true;
}
function validateZipCode() {
  var input = document.getElementById("zipcode");
  var ZipCode = document.getElementById("zipcode").value;
  var errZipCode = document.getElementById("errZipCode");
  if (ZipCode.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errZipCode.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (ZipCode.length > 10) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errZipCode.innerHTML = "Max Length: 10";
    return false;
  }
  if (ZipCode.length < 5) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errZipCode.innerHTML = "Min Length: 5";
    return false;
  }
  if (ZipCode.length === 6) {
    if (ZipCode[5] !== "-") {
      ZipCode = [ZipCode.slice(0, 5), "-", ZipCode.slice(5)].join("");

      document.getElementById("zipcode").value = ZipCode;
    }
  }
  var isDigitsAndDash = /^[0-9-]+$/;
  if (!isDigitsAndDash.test(ZipCode)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errZipCode.innerHTML = "Digits Only";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errZipCode.innerHTML = "";
  return true;
}
function validatePhoneNumber() {
  var input = document.getElementById("phonenumber");
  var PhoneNumber = document.getElementById("phonenumber").value;
  var errPhoneNumber = document.getElementById("errPhoneNumber");
  if (PhoneNumber.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPhoneNumber.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  if (PhoneNumber.length > 12) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPhoneNumber.innerHTML = "Max Length: 12";
    return false;
  }
  if (PhoneNumber.length === 4) {
    if (PhoneNumber[3] !== "-") {
      PhoneNumber = [PhoneNumber.slice(0, 3), "-", PhoneNumber.slice(3)].join(
        ""
      );

      document.getElementById("phonenumber").value = PhoneNumber;
    }
  }
  if (PhoneNumber.length === 8) {
    if (PhoneNumber[7] !== "-") {
      PhoneNumber = [PhoneNumber.slice(0, 7), "-", PhoneNumber.slice(7)].join(
        ""
      );

      document.getElementById("phonenumber").value = PhoneNumber;
    }
  }
  var isDigitsAndDash = /^[0-9-]+$/;
  if (!isDigitsAndDash.test(PhoneNumber)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errPhoneNumber.innerHTML = "Digits Only";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errPhoneNumber.innerHTML = "";
  return true;
}
function validateEmail() {
  var input = document.getElementById("email");
  var Email = document.getElementById("email").value;
  var errEmail = document.getElementById("errEmail");
  if (Email.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errEmail.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  var isEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!isEmail.test(Email)) {
    errEmail.innerHTML =
      "Invalid Email Format must be similar to: example@something.com";
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errEmail.innerHTML = "";
  return true;
}

function validateDateOfBirth() {
  var input = document.getElementById("dateOfBirth");
  var Date = document.getElementById("dateOfBirth").value;
  var errDate = document.getElementById("errDate");
  if (Date.length === 0) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errDate.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  console.log(Date);
  //reformatting date from yyyy-mm-dd to mm/dd/yyyy
  Date = Date.replace("-", "/");
  Date = Date.replace("-", "/");
  Date = Date + "/";

  var Year = Date.substring(0, 4);

  Date = Date.substring(0, 4) + Date.substring(5);

  Date = Date.substring(4, 10);
  Date = Date + Year;

  console.log(Date);
  var dateFormat = /^\d{2}\/\d{2}\/\d{4}$/;
  if (!dateFormat.test(Date)) {
    input.style.borderColor = "red";
    input.style.borderWidth = "medium";
    errDate.innerHTML = "Format Must Be: mm/dd/yyyy";
    return false;
  }
  input.style.borderColor = "lightgreen";
  input.style.borderWidth = "medium";
  errDate.innerHTML = "";
  return true;
}
function validateGender() {
  var gender = document.querySelector('input[name="gender"]:checked');
  var errGender = document.getElementById("errGender");
  if (gender === null) {
    errGender.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  console.log(gender.value);
  if (gender.length > 50) {
    errGender.innerHTML = "Character Max: 50";
    return false;
  }

  errGender.innerHTML = "";
  return true;
}
function validateStatus() {
  var status = document.querySelector('input[name="maritalStatus"]:checked');
  var errStatus = document.getElementById("errStatus");
  if (status === null) {
    errStatus.innerHTML = "Field Cannot Be Empty";
    return false;
  }
  console.log(status.value);
  if (status.length > 50) {
    errStatus.innerHTML = "Character Max: 50";
    return false;
  }

  errStatus.innerHTML = "";
  return true;
}
function validateForm() {
  var returnValue = true;

  if (!validateUsername()) {
    returnValue = false;
  }
  if (!validatePassword()) {
    returnValue = false;
  }
  if (!validateRepeatPassword()) {
    returnValue = false;
  }
  if (!validateEmail()) {
    returnValue = false;
  }
  if (!validateFirstName()) {
    returnValue = false;
  }
  if (!validateLastName()) {
    returnValue = false;
  }
  if (!validateAddress1()) {
    returnValue = false;
  }
  if (!validateZipCode()) {
    returnValue = false;
  }
  if (!validatePhoneNumber()) {
    returnValue = false;
  }
  if (!validateCity()) {
    returnValue = false;
  }
  if (!validateState()) {
    returnValue = false;
  }
  if (!validateDateOfBirth()) {
    returnValue = false;
  }
  if (!validateGender()) {
    returnValue = false;
  }
  if (!validateStatus()) {
    returnValue = false;
  }
  console.log(returnValue);
  return returnValue;
}
function Reset() {
  location.reload();
}
