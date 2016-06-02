//handle Next Button click
function onglyzaNextPage(){
  var currentPage = document.getElementById('currentPage').value;
  switch(currentPage){
    case 'page-1':
      $('.page-1').hide();
      $('.page-2').show();
      $('.prev-button').show();
      $('.next-button').hide();
      $('.submit-button').show();
      $('#currentPage').attr('value', 'page-2');
      $('#FirstName').focus();
      break;
    default:
      $('.page-1').show();
      $('.page-2').hide();
      $('.page-3').hide();
      $('#currentPage').attr('value', 'page-1');
      $('.next-button').show();
      $('.prev-button').hide();
      $('.submit-button').hide();
      $('#OnglyzaTaken').focus();
      break;
  }
}

//handle Back Button click
function onglyzaPrevPage(){
  var currentPage = document.getElementById('currentPage').value;
  switch(currentPage){
    case 'page-2':
      $('.page-2').hide();
      $('.page-1').show();
      $('#currentPage').attr('value', 'page-1');
      $('.prev-button').hide();
      $('.next-button').show();
      $('.submit-button').hide();
      $('#OnglyzaTaken').focus();
      break;
    default:
      $('.page-1').show();
      $('.page-2').hide();
      $('.page-3').hide();
      $('#currentPage').attr('value', 'page-1');
      $('.next-button').show();
      $('.prev-button').hide();
      $('.submit-button').hide();
      $('#OnglyzaTaken').focus();
      break;
  }
}

//perform front end validation on form submission
//do not allow invalid submission
function onOnglyzaSubmit() {
  //first clear error element
  var t = document.getElementById("errorElement");
  t.innerHTML="";
  if (!validateName()) {
    displayFormErrors("name");
    return false;
  } else if (!validateZipCode()){
    displayFormErrors("zip");
    return false;
  } else if (!validateTelephone()){
    displayFormErrors("telephone");
    return false;
  } else if (!validateEmail()) {
    displayFormErrors("email");
    return false;
  } else if(!validateConsent()){
    displayFormErrors("consent");
    return false;
  }
  return true;
}

//return true if zip code is 5 digits long
function validateZipCode() {
  var e = document.getElementById("Zip").value;
  if (isNumber(e) && e.length == 5) {
    return true;
  } else {
    return false;
  }
}

//make sure user checked the 'consent' box
function validateConsent(){
  if(document.getElementById('Consent').checked){
    return true;
  }
  return false;
}

//returns true if first name and last name are > 2 and < 30 characters
function validateName() {
  var firstName = document.getElementById("FirstName").value;
  if (firstName.length < 2 || firstName.length > 30) {
    return false;
  }
  var lastName = document.getElementById("LastName").value;
  if (lastName.length < 2 || lastName.length > 30) {
    return false;
  }
  return true

}

//returns true if telephone is formatted properly
function validateTelephone() {
  var e = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  var t = document.getElementById("Phone").value;
  if (t.match(e)) {
    return true;
  } else {
    return false;
  }
}

//returns true if email is valid format
function validateEmail() {
  var e = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  var t = document.getElementById("Email").value;
  if (t.match(e)) {
    return true
  } else {
    return false
  }
}

//return true if e is valid number
function isNumber(e) {
  return !isNaN(parseFloat(e)) && isFinite(e)
}

//display form error message to user
function displayFormErrors(e) {
  var t = document.getElementById("errorElement");
  switch (e) {
    case "name":
      t.innerHTML = "Name must be between 2 - 30 characters.";
      break;
    case "email":
      t.innerHTML = "Please provide a valid e-mail address.";
      break;
    case "telephone":
      t.innerHTML = "Please provide a valid telephone number.";
      break;
    case "zip":
      t.innerHTML = "Please provide a valid Zip Code.";
      break;
    case "consent":
      t.innerHTML = "Please read statement and click checkbox to continue."
      break;
    default:
      t.innerHTML = "";
      break;
  }
}