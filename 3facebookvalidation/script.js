const form = document.querySelector('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const dob = document.getElementById('dob');
const gender = document.getElementsByName('gender');
const submitBtn = document.querySelector('button');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  const fnameValue = fname.value.trim();
  const lnameValue = lname.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  const cpasswordValue = cpassword.value.trim();
  const dobValue = dob.value.trim();
  let genderValue = '';

  for (let i = 0; i < gender.length; i++) {
    if (gender[i].checked) {
      genderValue = gender[i].value;
      break;
    }
  }

  if (fnameValue === '') {
    setErrorFor(fname, 'First name cannot be blank');
  } else if (!isNameValid(fnameValue)) {
    setErrorFor(fname, 'First name can only contain letters');
  } else {
    setSuccessFor(fname);
  }

  if (lnameValue === '') {
    setErrorFor(lname, 'Last name cannot be blank');
  } else if (!isNameValid(lnameValue)) {
    setErrorFor(lname, 'Last name can only contain letters');
  } else {
    setSuccessFor(lname);
  }

  if (emailValue === '') {
    setErrorFor(email, 'Email cannot be blank');
  } else if (!isEmailValid(emailValue)) {
    setErrorFor(email, 'Email is not valid');
  } else {
    setSuccessFor(email);
  }

  if (passwordValue === '') {
    setErrorFor(password, 'Password cannot be blank');
  } else if (!isPasswordValid(passwordValue)) {
    setErrorFor(password, 'Password must contain at least 8 characters, including 1 uppercase, 1 lowercase, and 1 number');
  } else {
    setSuccessFor(password);
  }

  if (cpasswordValue === '') {
    setErrorFor(cpassword, 'Confirm password cannot be blank');
  } else if (passwordValue !== cpasswordValue) {
    setErrorFor(cpassword, 'Passwords do not match');
  } else {
    setSuccessFor(cpassword);
  }

  if (dobValue === '') {
    setErrorFor(dob, 'Date of birth cannot be blank');
  } else {
    setSuccessFor(dob);
  }

  if (genderValue === '') {
    setErrorFor(gender[0], 'Please select a gender');
  } else {
    setSuccessFor(gender[0]);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');
  formControl.className = 'form-control error';
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}

function isNameValid(name) {
  return /^[a-zA-Z]+$/.test(name);
}

function isEmailValid(email) {
  return /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email);
}

function isPasswordValid(password) {
  return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(password);
}
