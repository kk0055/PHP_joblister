<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joblister</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark  bg-dark ">
  <a class="navbar-brand" href="index.php">Home</a>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
  
    </ul>
   
    <ul class="nav nav-pills pull-right">
    <a href="index.php">
      <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Home</button></a>
      <form class="form-inline my-2 my-lg-0" action="create.php">
      <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Create Listing">
     </form>
     </ul>
  </div>
</nav>

<?php displayMessage() ;?>