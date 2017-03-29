<?php 
	session_start();
	if(!isset($_SESSION['USR']))
{ //if login in session is not set
    header("Location:../index.php");
}




	$host = "localhost";
	$user = "root";
	$bd = "veignettes";  
	$bdd= new PDO("mysql:host=".$host.";dbname=".$bd, $user,"");	
	
	if(isset($_POST['date']))
	{
		$dat = $_POST['date'];
		$matricule = $_POST['matricule'];
		$kilometrage = $_POST['kilometrage'];
		$num_fact = $_POST['num_fact'];
		$Fournisseur = $_POST['Fournisseur'];
		$num_bon = $_POST['num_bon'];
		$Fonctionnaire = $_POST['Fonctionnaire'];
		$cout = $_POST['cout'];

		$q ="INSERT INTO reparation_cmd ( date_facture,	matricule,	kilometrage, num_facture, 	fournisseur, 	num_bon, fonctionnaire_repar, cout) 		VALUES  (:dat, :matricule, :kilometrage, :num_fact, :fournisseur, :num_bon, :Fonctionnaire, :cout)";
        $sql  = $bdd->prepare($q);
        $resultat = $sql->execute(array(
        	
        	':dat'=>$dat,
        	':matricule'=>$matricule,
        	':kilometrage'=>$kilometrage,
        	':num_fact'=>$num_fact,
        	':fournisseur'=>$Fournisseur,
        	':num_bon'=>$num_bon,
        	':Fonctionnaire'=>$Fonctionnaire,
        	':cout'=>$cout	));    
        $_SESSION['cout'] = $_POST['cout'];
        header("Location: vigs.php")    ;

	}

?>