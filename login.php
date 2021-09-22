<?php

  if(($_POST['mail'] == "mail@mail.fr") && ($_POST['mdp'] == "ggbg")) {
    die("test validé");


    
  } else {
    echo "Le mail/mot de passe est erroné."<br>"Veuillez réessayer.";
  }

?>
