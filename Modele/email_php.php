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

          $to=$_POST['email_u'];
          $subject=$_POST['objet'];
          $Prenom=$_POST['prenom_u'];
          $Nom=$_POST['nom_u'];
          $message=$_POST['commentaire'];
          $mail = new PHPMailer();
          $msg='<html>
                  <body>
                    <p>Bonjour '.$Prenom.', nous avons bien reçu votre message.</p></br>   
                    <p>De la part de : '.$Prenom.' '.$Nom.'</p>
                    <p>Votre email : '.$to.'</p></br></br>
                    <p>Objet : '.$subject.'</p>
                    <p>Votre message :"'.$message.'"</p></br></br>
                    <p>Nous vous répondrons le plus vite possible.</p></br>        
                  </body>
                </html>';
          $mail->IsSMTP(); // enable SMTP
          $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
          $mail->SMTPAuth = true; // authentication enabled
          $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
          $mail->Host = "smtp.gmail.com";
          $mail->Port = 465; // or 587
          $mail->IsHTML(true);
          $mail->Username = "jsmp.isep@gmail.com";
          $mail->Password = "jsmpisep";
          $mail->CharSet = "utf-8";
          $mail->SetFrom('jsmp.isep@gmail.com');
          $mail->Subject = $subject; ?> </br> <?php
          $mail->Body = $msg;
          $mail->AddAddress($to);
          $mail->AddAddress('chloe.van.cauwenberghe@gmail.com');
          /**/



            if ( !$mail->Send() ) {
              echo "Echec de l'envoi du mail, Erreur: " . $mail->ErrorInfo;
            } else {
               ?> <div align="center"><h3 class="ok"><strong><?php echo "Votre message a bien été envoyé."; ?></strong> </h3> </div> <?php
            }
        }

        unset($mail);

      ?>
