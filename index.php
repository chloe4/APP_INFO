<?php
echo'<form id="form_nom_u" enctype="multipart/form_sata" method="post" action="conf_form.php">
<label for="nom_u">Nom</label>
<input type="text" id="nom_u" name="name" value=""/>
<input type="submit" value="Envoyer" />

</form>';
$sql='SELECT*FROM utilisateur ORDER BY date_naissance'// on select tout depuis table utili et on les affiche par ordre id 





?>