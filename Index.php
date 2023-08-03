<!DOCTYPE html>
<html>
<head>
  <title>Login or Sign Up</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Do you have an account?</h1>
    <button onclick="showLogin()" class="button2">Yes, Log In</button>
    <button onclick="showSignUp()" class="button2">No, Sign Up</button>

    <div id="loginForm" style="display: none;">
      <h2>Login</h2>
      <form>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
<br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
<br><br>
        <button class="button" type="submit" style="vertical-align:middle"><span>Log In</span></button>
      </form>
    </div>

    <div id="signUpForm" style="display: none;">
      <h2>Sign Up</h2>
      <form onSubmit="checkPassword()">
        <label for="newEmail">Email:</label>
        <input type="email" name="newEmail" id="newEmail" required>
<br><br>
        <label for="newPassword">Password:</label>
        <input type="password" name="password" id="password" required>
<br><br>
        <label for="confPassword">Confirm Password:</label>
        <input type="password" name="confPassword" id="confPassword" required>
<br><br>
        <button class="button" style="vertical-align:middle"><span>Sign Up</span></button>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
