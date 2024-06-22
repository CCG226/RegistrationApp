var topic = document.getElementById("topic");
var title = document.getElementById("title");
var author = document.getElementById("author");
var publisher = document.getElementById("publisher");

var errorMessage1 = document.getElementById("errPublisher");
var errorMessage2 = document.getElementById("errAuthor");
var errorMessage3 = document.getElementById("errTitle");
var errorMessage4 = document.getElementById("errTopic");
var errorMessage5 = document.getElementById("errForm");
var errorMessage6 = document.getElementById("errTopic2");
var regexIfContentIsOnlyNumbers = /^\d+$/;
var regexIfContentIsOnylSpecialChars = /^[^a-zA-Z0-9]+$/;

function validateForm() {
  var returnValue = true;
  if (
    topic.value.length === 0 ||
    title.value.length === 0 ||
    author.value.length === 0 ||
    publisher.value.length === 0
  ) {
    errorMessage5.innerHTML = "All Input Fields Are Required!";
    returnValue = false;
  }

  if (topic.value.length > 100) {
    errorMessage4.innerHTML = "Max Length: 100";
    returnValue = false;
  }
  if (title.value.length > 25) {
    errorMessage3.innerHTML = "Max Length: 25";
    returnValue = false;
  }
  if (author.value.length > 25) {
    errorMessage2.innerHTML = "Max Length: 25";
    returnValue = false;
  }
  if (publisher.value.length > 25) {
    errorMessage1.innerHTML = "Max Length: 25";
    returnValue = false;
  }

  if (regexIfContentIsOnlyNumbers.test(topic.value)) {
    errorMessage6.innerHTML = "Cannot Be All Numbers!";
    returnValue = false;
  }
  if (regexIfContentIsOnylSpecialChars.test(topic.value)) {
    errorMessage6.innerHTML = "Cannot Be All Special Characters!";
    returnValue = false;
  }

  return returnValue;
}

function validatePublisher() {
  if (publisher.value.length === 0) {
    errorMessage1.innerHTML = "Field Cannot Be Empty!";
    return;
  }
  if (publisher.value.length > 25) {
    errorMessage1.innerHTML = "Max Length: 25";
    return;
  }
  console.log(returnValue);
  errorMessage1.innerHTML = "";
}

function validateAuthor() {
  if (author.value.length === 0) {
    errorMessage2.innerHTML = "Field Cannot Be Empty!";
    return;
  }
  if (author.value.length > 25) {
    errorMessage2.innerHTML = "Max Length: 25";
    return;
  }
  errorMessage2.innerHTML = "";
}

function validateTitle() {
  if (title.value.length === 0) {
    errorMessage3.innerHTML = "Field Cannot Be Empty!";
    return;
  }
  if (title.value.length > 25) {
    errorMessage3.innerHTML = "Max Length: 25";
    return;
  }
  errorMessage3.innerHTML = "";
}

function validateTopic() {
  if (topic.value.length === 0) {
    errorMessage4.innerHTML = "Field Cannot Be Empty!";
    return;
  }
  if (topic.value.length > 100) {
    errorMessage4.innerHTML = "Max Length: 100";
    return;
  }
  errorMessage4.innerHTML = "";
}
function validateTopic() {
  if (topic.value.length === 0) {
    errorMessage4.innerHTML = "Field Cannot Be Empty!";
    return;
  }
  if (topic.value.length > 100) {
    errorMessage4.innerHTML = "Max Length: 100";
    return;
  }

  console.log(regexIfContentIsOnlyNumbers.test(topic.value));
  console.log(topic.value);
  if (regexIfContentIsOnlyNumbers.test(topic.value)) {
    errorMessage6.innerHTML = "Cannot Be All Numbers!";
    return;
  }
  if (regexIfContentIsOnylSpecialChars.test(topic.value)) {
    errorMessage6.innerHTML = "Cannot Be All Special Characters!";
    return;
  }
  errorMessage6.innerHTML = "";
  errorMessage4.innerHTML = "";
}
