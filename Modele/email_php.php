<?php 

        require_once('C:\wamp\www\APP_INFO\Controleur\class.phpmailer.php');
        require_once('C:\wamp\www\APP_INFO\Controleur\class.SMTP.php');
        require_once('connect_db.php');

        if( isset($_POST['email_u'])&&
            isset($_POST['objet'])&&
            isset($_POST['commentaire'])&&
            isset($_POST['nom_u'])&&
            isset($_POST['prenom_u'])
        ){

          $to=$_POST['Email'];
          $subject=$_POST['Objet'];
          $Prenom=$_POST['Prenom'];
          $Nom=$_POST['Nom'];
          $mail = new PHPMailer();
          $message=$_POST['commentaire'];
          $msg='<html>
                  <body>
                    <p><b>Vous nous avez posé une question </b>'.$Prenom.'<b> et nous vous en remercions</b></p></br>   
                    <p>Le sujet : '.$subject.'</p>
                    <p>Votre message est :"'.$message.'"</p></br></br>
                    <p>Vous êtes : '.$Prenom.' '.$Nom.'</p>
                    <p>Votre email : '.$to.'</p></br></br>
                    <p>Nous vous repondrons très prochainement.</p></br>
                    <p>La team de BIO&BON vous remercie</p>
                    <p>Le pole Com : bioetbon.isep@gmail.com</p>          
                  </body>
                </html>';
          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
          $mail->SMTPAuth = true; // authentication enabled
          $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 465; // or 587
          $mail->IsHTML(true);
          $mail->Username = "bioetbon.isep@gmail.com";
          $mail->Password = "bioetbon";
          $mail->CharSet = "utf-8";
          $mail->SetFrom('bioetbon.isep@gmail.com');
          $mail->Subject = $subject; ?> </br> <?php
          $mail->Body = $msg;
          $mail->AddAddress($to,'quentin.lalle@gmail.com');
          /**/



            if ( !$mail->Send() ) {
              echo "Echec de l'envoi du mail, Erreur: " . $mail->ErrorInfo;
            } else {
               ?> <div align="center"><h3 class="ok"><strong><?php echo "Message envoyé!"; ?></strong> </h3> </div> <?php
            }
        }

        unset($mail);

      ?>
