<?php

//All pages will redirect to Login
//After successfull login, go to index.php
//Include a "Continue as guest" option
//Create profiles and profile.php
//email verification?
//Finish NOAHOS, add noahos.php as example of work
//resume.php? add resume
//create database on server (noahcwoods.com) userid, username, password, email, phone?, description, firstname, lastname

//Black themed website. Black main, blue, orange (guest button), red logout, green border highlight on hover
//Text light blue? or dark blue? most likely grey or white of some type
//charcoal type background with light grey overlay for text and information areas
//all div class tags use absolute path (ex. login-container-form-h1. etc)

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="style.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="login-container">
      <div class="login-container-login">
        <form class="login-container-login-form" action="login.php" method="post">
          <h1>Login</h1><br/>
          <input type="text" name="username" placeholder="username"><br/>
          <input type="password" name="password" placeholder="password"><br/>
          <input type="submit" name="submit" value="Login"><br/>
          <hr>
          <input type="submit" name="guest" value="Continue as guest">
        </form>
      </div>
    </div>
  </body>
</html>
