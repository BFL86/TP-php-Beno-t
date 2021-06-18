<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre;?></title>
    <style>
    /* CSS */
    .active {
        color:green;
    }
    </style>
</head>
<body>
<nav class="menu">
  <ul>
    <li><a href="accueil2.php" class=<?php if ($titre=="L'Accueil") {echo "active";}?>>L'Accueil</a></li>
    <li><a href="contacts.php" class=<?php if ($titre=="Contacts") {echo "active";}?>>Contacts</a></li>
    <li><a href="CV.php" class=<?php if ($titre=="CV") {echo "active";}?>>CV</a></li>
  </ul>
</nav>