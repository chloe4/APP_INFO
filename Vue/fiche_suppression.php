<?php session_start() ?>
    <!DOCTYPE html>
        <html>

            <?php 
                include('simpleuh.php');
                include('C:\wamp\www\APP_INFO\Modele\fiche_suppression_php.php') ;
            ?>
            
            <center><h1>Fiche du membre</h1>        
           

            <table>
                <tr>
                    <th>Identifiant </th>
                        <td><?php echo $identifiant; ?></td>
                </tr>
                <tr>
                    <th>Nom et prénom </th>
                        <td><?php echo $prenom; ?></td>
                        <td><?php echo $nom; ?></td>
                </tr>
                <tr>
                    <th>Email </th>
                        <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Localisation </th>
                        <td><?php echo $localisation; ?></td>
                </tr>
                <tr>
                    <th>Numéro de téléphone </th>
                        <td><?php echo "0".$telephone.""; ?></td>
                </tr>
            </table></center></br> 
            <form method="POST">
            <input type="submit" name="suppr" Value="Supprimer le membre"/></br></br>
            </form>
            <?php include('bandeau_bas.php'); ?>
     
        </html>
