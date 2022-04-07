<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contactstyle.css">
  <title>Contact</title>
</head>

<body>
  <?php
        include('head.php');
  ?>
  <h1 id="title-contact" class="title-page">Contact</h1>
  <div style="display: flex; justify-content: center">
      <a href="PDF_PHP" target="_blank"><button class="button-di" id="boutton-PDF">Generer présentation PDF</button></a>
  </div>
  <main>
      <div id="block-contacts">
    <div id="block-contact-gauche">
      <div id="mail">
        <a href="mailto:david.lansonneur@viacesi.fr" class="reseau"><img src="images/icons8-mail-48.png"
            alt="logo mail" />
          <p id="paragraphe-mail">david.lansonneur@viacesi.fr</p>
        </a>
        <a href="mailto:david.lansonneur@viacesi.fr" class="reseau"><img src="images/icons8-mail-48.png"
            alt="logo mail" />
          <p id="paragraphe-mail">ilan.loore@viacesi.fr</p>
        </a>
        <a href="mailto:david.lansonneur@viacesi.fr" class="reseau"><img src="images/icons8-mail-48.png"
            alt="logo mail" />
          <p id="paragraphe-mail">ilan.jaglin@viacesi.fr</p>
        </a>
      </div>
      <div class="separation-contact"></div>
      <div id="linkedin">
        <div id="image-link">
          <img id="image-linkedin"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/768px-LinkedIn_logo_initials.png"
            alt="logo linkedin">
        </div>
        <div id="membres-linkedin">
          <a href="">
            <p>David Lansonneur</p>
          </a>
          <a href="">
            <p>Ilan Loore</p>
          </a>
          <a href="">
            <p>Ilan Jaglin</p>
          </a>
        </div>
      </div>
    </div>
    <div id="block-contact-droite">
      <div class="block-formulaire" id="formulaire">
            <form action="sendcontact.php" method="POST">      
                <input name="name" type="text" class="feedback-input" placeholder="Name" />   
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="msg" required class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT"/>
              </form>
        </div>
        <div>
          <?php 
          if(!isset($_GET['id'])){
          }else {
            echo "votre message s'est bien envoyé";
          }
          
          
          ?>
        </div>
    </div>
  </main>
  <?php
        include('footer.html');
    ?>
</body>

</html>