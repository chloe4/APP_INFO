

<?php session_start(); ?>
<!DOCTYPE html>
  <html>

    <?php include('simpleuh.php'); ?>

    
    <h1>Forum</h1>
<?php
$db = new PDO("mysql:host=127.0.0.1;dbname=jsmp","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


  // On selectionne les données dont on a besoin
  $sql = "SELECT * FROM forum";
   
    $request = $db->query($sql);
    // On rentre ces données dans un tableau
            // On rentre ces données dans un tableau
    $request->execute(array("identifiant_u", "sujet_f", "commentaire_f"));
  while ($tableau = $request->fetch()){
    $ref = $tableau['identifiant_u'];
    $sujet = $tableau['sujet_f'];
    $commentaire = $tableau['commentaire_f'];

    echo "<p/><strong>Sujet de</strong> :".$ref." <strong> sur : </strong>".$sujet." </br>";
    echo"<a href='commenter_sujet.php'><input type='submit' name='submit' Value='Lire le sujet'/></a>";
 //echo "<strong>Commentaire</strong> : <p/>".$commentaire."  </br>    ";
	   		


                 
 }
  
?>
      <?php include('bandeau_bas.php'); ?>
  </html>