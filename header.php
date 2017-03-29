	<div id="header">
		<div id="logo">
			<img src="../images/img02.png">
			<h1><a href="#">Gestion des Veignettes </a></h1>
			<p> Centre Regional D'investissement</p>
		</div>
		<a href="../Admin/admin_area.php" id="log"><?php echo "Espace Admin de ",$_SESSION['USR']; ?></a>
	</div>
	<div id="menu">

		<ul>
			<li><a href="../consulter/">voir l'etat des vignettes</a></li><!--class="current_page_item"-->
			<li><a href="../rechercher/">Rechercher</a></li>
			<li><a href="../cmd/">Commander</a></li>
			<li><a href="#">Modifier</a></li>
			<a id="logout" href="../deconnexion.php">déconnecter</a>
			
		</ul>
	</div>