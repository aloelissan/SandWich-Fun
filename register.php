<?php require_once 'dbconnect.php'; ?>

<?php 

if (!empty($_POST['username']) && isset($_POST['greta'])) {
	$error = "Working";
	} 
	else
	{
		echo "Not working."; } ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="master.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="robots" content="noindex">
    </head>
<body>

<form id="register" method="POST" action="register.php">
  <fieldset>
  <legend>Registrera konto!</legend>
		
		<!-- Beware! This code is dangerous. Courtesy of Elise Knuuti-Björklund & Iara Fahlstrom. I have played Furry-Paws, they are like real good friends to me. Most of them artists. This game
		is heavily inspired by Furry-Paws. Before you continue with the code you need to revise it. You need to be careful. I fighted with Mek, for joking purposes. Benjamin is my boyfriend. Is it Lovett? I am
		trying to create this gorgeous game. It's really making me happy to create this game. I am afraid I won't handle it well. I am going to the military for my game. I have played Furry-Paws and Call of Duty. My both favorite games. We have
		american family. My dad is feeling bad, pity for him. No pet grief here. Am I Scarlett Johansson? Or do we just look really similar.
		
		Revised-- -->
		
		<!-- Revised and finished. Now checking the code. -->
		
		<!-- Working but not printing text. 2023-03-29 18:51 -->
		
		<!-- Revised, and reworked. Still not working. -->
		
		<!-- Test the function. Ulf Kristersson, you're so cool. :) I love you, guys. -->
		
		<!-- I'm often misinterpreted for that -->
  
  <label for="username"><b>Användarnamn</b>:</label><br>
  <input type="text" name="username" pattern="[a-zA-Z0-9]+" autocomplete="on" required><br>
  <label for="password" autocomplete="off" required><b>Lösenord</b>:</label><br>
  <input type="password" name="password"><?php if(empty($_POST['password']) && isset($_POST['greta'])) { echo "You need to enter your password."; } else { echo ""; } ?><br>
  
  <!-- Revised 2:nd, code not working yet ... -->
  
  <!-- Man bestämmer själv vem man vill ha sex med. Min pojkvän är Benjamin Björklund. -->
  
  <label for="confirm_password" autocomplete="off" required><b>Upprepa lösenord</b>:</label><br>
  <input type="password" name="confirmpassword"><br>
  <label for="email" autocomplete="on" required><b>E-post</b>:</label><br>
  <input type="email" name="email"><br>
  <label for="coformemail" autocomplete="off" required><b>Upprepa e-post</b>:</label><br>
  <input type="email" name="conformemail"><br><br>
  
  <input type="checkbox" id="agreeto" name="agree_tos" value="Agree">
  <label for="agreeto">Jag Godkänner ´spelets´ <a href="tos.html" target="_blank">Regler & villkor</a><?php echo "!"; ?></label><br>
  <input type="checkbox" id="13" name="thirteen" value="13+">
  <label for="13">Jag är 13+ år eller äldre</label><br><br>
  
  <input type="submit" value="LOGIN*" name="greta">
  </fieldset>
    </form>

</body>
</html>
