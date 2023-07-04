function appearSignUp() {
  if (document.getElementById("checkbox").checked) {
    document.getElementById("submitButton").disabled = false;
  } else {
    document.getElementById("submitButton").disabled = true;
  }
}
