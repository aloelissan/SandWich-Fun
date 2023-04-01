<?php
require_once 'dbconnect.php';
include 'auth_session.php'; ?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="master.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>

<form id="login-register" method="POST" action="index.php">
  <fieldset>
  <legend>LOGIN</legend>
  <label for="username">Användarnamn:</label>
  <input type="text" name="username">
  <label for="password">Lösenord:</label>
  <input type="password" name="password">
  
  <input type="submit" value="LOGIN*">
  </fieldset>
    </form>

</body>
</html>
