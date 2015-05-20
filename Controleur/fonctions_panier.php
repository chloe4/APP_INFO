<?php

   /* On vérifie si le panier existe, sinon on le créé */
   function creationPanier(){
      if (!isset($_SESSION['panier'])){
         $_SESSION['panier']=array();
         $_SESSION['panier']['libelleProduit'] = array();
         $_SESSION['panier']['qteProduit'] = array();
         $_SESSION['panier']['prixProduit'] = array();
         // verrou permet deverouiller toute action sur le panier, à activer si on passe en mode paiement
         $_SESSION['panier']['verrou'] = false;
      return true;
      }
   }

   /* Ajoute un article dans le panier */
   function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

      //Si le panier existe et si le panier est terminé (vérouillé)
      if (creationPanier() && !isVerrouille()){
         $requete = $bdd->query('SELECT nom_a, quantite, prix FROM articles WHERE nom_a =\'' . $libelleProduit . ' \'');
         if ($positionProduit = $requete->fetch()){
            $qteinitial = $_GET['quantite'];
            $qte = $qteinitial + $qteProduit;
            $rep = $bdd->prepare('INSERT INTO panier (quantite) VALUES (?)');
            $rep->execute((array($qte)));
         }
         else{
            $req = $bdd->prepare('INSERT INTO panier (produit, quantite, prix) VALUES (?, ?, ?)');
            $req->execute((array($libelleProduit, $qteProduit, $prixProduit)));
         }

      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
      if ($positionProduit !== false){
         $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
         }
         else{
            //Sinon on ajoute le produit
            array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
            array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
            array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
         }
      }
      else{
         echo "Un problème est survenu veuillez contacter l'administrateur du site.";
      }
   }

   /* Modifie la quantité d'un article */
   function modifierQTeArticle($libelleProduit,$qteProduit){
      //Si le panier existe et si le panier est terminé (vérouillé)
      if (creationPanier() && !isVerrouille()){
         //Si la quantité est positive on modifie sinon on supprime l'article
         if ($qteProduit > 0){
         //Recharge du produit dans le panier
            $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
            if ($positionProduit !== false){
               $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit;
            }
         }
         else{
         supprimerArticle($libelleProduit);
         }
      }
      else{
         echo "Un problème est survenu veuillez contacter l'administrateur du site.";
      }
   }

   /* Supprime un article du panier */
   function supprimerArticle($libelleProduit){
      //Si le panier existe et si le panier est terminé (vérouillé)
      if (creationPanier() && !isVerrouille()){
         //Nous allons passer par un panier temporaire
         $tmp=array();
         $tmp['libelleProduit'] = array();
         $tmp['qteProduit'] = array();
         $tmp['prixProduit'] = array();
         $tmp['verrou'] = $_SESSION['panier']['verrou'];

         for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++){
            if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit){
               array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
               array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
               array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
            }
         }
         //On remplace le panier en session par notre panier temporaire à jour
         $_SESSION['panier'] =  $tmp;
         //On efface notre panier temporaire
         unset($tmp);
      }
      else{
         echo "Un problème est survenu veuillez contacter l'administrateur du site.";
      }
   }

   /* Montant total du panier */
   function MontantGlobal(){
      $total=0;
      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++){
         $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
      }
      return $total;
   }


   /* Fonction de suppression du panier */
   function supprimePanier(){
      unset($_SESSION['panier']);
   }

   /* Permet de savoir si le panier est verrouillé */
   function isVerrouille(){
      if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou']){
         return true;
      }
      else{
         return false;
      }
   }

   /* Compte le nombre d'articles différents dans le panier */
   function compterArticles(){
      if (isset($_SESSION['panier'])){
         return count($_SESSION['panier']['libelleProduit']);
      }
      else{
         return 0;
      }
   }
?>
