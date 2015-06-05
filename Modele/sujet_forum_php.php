<?php include('connect_db.php'); ?>
<?php
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // On selectionne les données dont on a besoin
  $sql = "SELECT commentaire_u AND identifiant_u FROM utilisateur";
   
    $request = $db->prepare($sql);
    // On rentre ces données dans un tableau
    $data->execute(array($request));

 echo "".$data["commentaire_u"]." ".$data["identifiant_u"]."</br>";
    
  
?>