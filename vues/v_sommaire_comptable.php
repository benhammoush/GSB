    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				<?php echo "comptable : ", $_SESSION['prenom']." ".$_SESSION['nom']   ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=validerFrais&action=afficherVisiteursEtSixDerniersMois" title="Valider les fiches de frais ">Valider les fiches de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=suivi&action=selectionnerMois" title="Suivi des fiches de frais">Suivi des fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    