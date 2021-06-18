<?php
$titre="Contacts";
require_once 'header2.php';
?>

<form action="bienvenue.php" method="get">
    Prenom : <input type="text" name="prenom"><br>
    Nom : <input type="text" name="nom"><br>
    Email :<input type="text" name="mail"><br>
    Sujet :<input type="text" name="suj"><br>
    Message :<input type="text" name="mess"><br>
    En validant ce formulaire vus acceptez d'être contacté <input type="checkbox" id="acc" name="ac_con" value="tac"><br>
    <input type="submit">
</form>

<?php
require_once 'footer2.php';
?>