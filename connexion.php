<?php
  //connexion à la base de données
  $con = mysqli_connect("localhost","laurent","h9xt2ya1","entreprise");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
