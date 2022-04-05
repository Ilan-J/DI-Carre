<?php
session_start();
require_once ('bdd.php');
if(isset($_POST['Pseudo'])){
    $pseudo = $_POST['Pseudo'];
    $prenom = $_POST['Prenom'];
    $nom = $_POST['Nom'];
    $datenaissance = $_POST['datenaissance'];
    $description = $_POST['text'];
    changeinfo($pseudo, $prenom, $nom, $datenaissance, $description);

    header("location:profil.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Modifier Profil</title>
</head>

<body>
    <?php
        include('head.php');
    ?>
    <h1 id="title-jeu-videos">Modifier le Profil</h1>
    <main id="block-profile">
        <div id="block-image-info">
            <div id="block-image">
                <img src="images/compte-utilisateur-1.png" alt="image utilisateur">
                <select name="nom" size="1" id="">
                        <option selected>Profil Anonyme</option>
                        <option> Profil Homme</option>
                        <option> Profil Femme</option>
                        <option> Profil Non Binaire</option>
                </select>
                <input type="submit" class="btn" value="Enregistrer" id="valide"/>
            </div>
            <form id="formModifier" action="" method="POST">
                <?php getInfo();?>
                <div id="validation">
                    <input onclick="window.location.href = 'profil.php'" type="reset" class="btn" value="Annuler" id="annulation" class="valid-profil"/>
                    <input type="submit" class="btn" value="Enregistrer"id="enregistrement"/>
                </div>             
            </form>
            </div>
        </div>
    </main>
    <?php
        include('footer.html');
    ?>
</body>

</html>