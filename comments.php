<?php

//GET 10 LATEST comments
require_once('sqlthings/config.php');
function outputComments()
{
  try {
      $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM comments";
      $result = $pdo->query($sql);
<<<<<<< HEAD
      while ($row = $result-fetch()) {
=======
      while ($row = $result->fetch()) {
>>>>>>> ff937c730fe65209a1af4b11175c1c71854b7f27
        outputSingleComment($row);
      }
      $pdo=null;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

function outputSingleComment($row)
{
  echo "<h2>What " . $row['firstName'] . " " . $row['lastName'] . " says about PUBG: </h2>" .
      "<p>" . $row['userComment'] . "</p>";
}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <title></title>
=======
    <link rel="stylesheet" href="finalProject/stylez.css" />
    <title>Comments</title>
>>>>>>> ff937c730fe65209a1af4b11175c1c71854b7f27
  </head>
  <body>
    <main>
      <header>
        <img src="PUBG_Header.png" alt="HeaderIMG" class = "headPic">
        <p> <ul>
          <li> <a href="finalProject\finalDesign.php">Home</a> </li>
          <li> <a href="contact.php">Contact</a> </li>
          <li> <a href="about.php">About Us</a> </li>
          <li> <a href="faq.php">FAQ</a></li>
<<<<<<< HEAD
=======
          <li> <a href="comments.php">Comments</a> </li>
>>>>>>> ff937c730fe65209a1af4b11175c1c71854b7f27
        </ul> </p>
      </header>
      <section>
        <h1>What people are saying about PUBG</h1>
        <br>
        <?php outputComments() ?>
      </section>

    </main>
  </body>
</html>