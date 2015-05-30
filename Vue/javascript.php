<?php
session_start();
if (isset($_SESSION['identifiant_u'])){ ?>
    <script type="text/javascript">

	    	confirm('Etes-vous sur de vouloir acheter ce produit ?');
	    	if (confirm('Etes-vous sur de vouloir acheter ce produit ?')){
	    		document.location.href="page_demande.php"; 
			}
			else{
				document.location.href="faire_courses.php";	
			}
			</script>
				<?php ;} else {
    		header('Location: /APP_INFO/Vue/faire_courses.php');
			}?>
