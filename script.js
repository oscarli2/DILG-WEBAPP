function showLogin() {
  document.getElementById("loginForm").style.display = "block";
  document.getElementById("signUpForm").style.display = "none";
}

function showSignUp() {
  document.getElementById("loginForm").style.display = "none";
  document.getElementById("signUpForm").style.display = "block";
}

    function checkPassword() {
      const password = document.getElementById("password").value;
      const confPassword= document.getElementById("confPassword").value;

      if (password == confPassword) {
        alert("Passwords match!");
	header('Location: \table.php');
		return true;
      } else {
        alert("Passwords do not match. Please try again.");
		return false;
      }
    }