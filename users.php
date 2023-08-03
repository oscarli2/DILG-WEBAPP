<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <script src="script1.js"></script>
<link rel="stylesheet" type="text/css" href="menu.css">
<style>
body {

	font: normal 15px Verdana, Arial, sans-serif;
}

</style>
</head>
<body>

<div class="header">
</div>
<div class="menu">
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="#news">Users</a></li>
  <li><a href="table.php">Table Reports</a></li>
  <li><a href="#about">Graph Reports</a></li>
  <li style="float:right"><a href="#about">Logout</a></li>
</ul>
</div><center><br><br><br>
    <h1>User Management</h1>
    <form id="userForm">
        <label for="name">Username:</label>
        <input type="text" id="user" required>
        <label for="email">Password:</label>
        <input type="password" id="pass" required>
        <label for="email">Email:</label>
        <input type="email" id="email" required>
        <button onClick="insert();" type="submit" id="addBtn">Add User</button>
    </form>
    <div id="userList"></div>

  <script src="insert.js"></script>
</body>

</html>
