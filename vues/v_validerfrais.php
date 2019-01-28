 <div id="contenu">
      <h2>Validation fiches de frais</h2>
      <h3>Visiteur et Mois à sélectionner : </h3>
      <form action="index.php?uc=validerFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
          

<p>
	 
        
        <label for="lstVisiteurs" accesskey="n">selectionner votre visiteur: </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
   
         <?php
            foreach ($visiteurs as $visiteur)
            {

            	  if ($visiteurs['id'] == $visiteuraselectionner){
            ?>	
              <option selected value="<?php echo $visiteurs['id']."".$visiteurs['nomvisiteur']."".$visiteurs['prenomvisiteur'] ?>"><?php echo $visiteur['nomvisiteur']." ".$visiteur['prenomvisiteur'] ?> </option>
             <?php
         }
         else{ ?>
         	<option value="<?php echo  $visiteurs['id']."".$visiteurs['prenomvisiteur'] ?>"><?php echo $visiteurs['nomvisiteur']." ".$visiteurs['prenomvisiteur'] ?> </option> 
         	<?php
              }
         }
            ?>

        </select>
</p>
<p>
        <label for="lstMois" accesskey="n">selectionner votre mois: </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach($lesmois as $key => $value){
			
				if($value['year'].$value['month'] == $Moisaselectionner){
				?>
	<option selected value="<?php echo $value['year'].$value['month'] ?>"><?php echo $value['month']. "-".$value['year']?> </option>
		<?php 
                                }
                                else
                                    { ?>
         	<option value="<?php echo  $value['month']. "-".$value['year'] ?>"><?php echo $value['month']. "-".$value['year'] ?> </option> 
         	<?php
              }
         }
            ?>
            
        </select>
</p>
      <div class="basForm">
      <p align="right">

        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />

      </p> 
      </div>

 </p>

        
      </form>