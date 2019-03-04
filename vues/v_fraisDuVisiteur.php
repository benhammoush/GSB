<div id="contenu">
    <h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : </h3>
    <div class="encadre">
        <p>
            Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>      
            
        </p>
        <form method="POST" action="index.php?uc=validerFrais&action=Modifier">
            
            <input id="leMois" name="leMois" type="hidden" value="<?php echo $leMois; ?>">
            <input id="visiteur" name="visiteurtest" type="hidden" value="<?php echo $visiteurtest; ?>">
           

        <table class="listeLegere">
           <caption>Eléments forfaitisés </caption>
            <tr>
                <?php

                foreach ( $lesFraisForfait as $unFraisForfait ) {
                    $libelle = $unFraisForfait['libelle'];
                    ?>	
                    <th> <?php echo $libelle ?></th>
                    <?php
                }
                ?>
            </tr>
            <tr>
                <?php
                foreach (  $lesFraisForfait as $unFraisForfait  ) {
                    $quantite = $unFraisForfait['quantite'];
                    $libelle = $unFraisForfait['libelle'];
                    $idfrais = $unFraisForfait['idfrais'];
                    ?>
                <td class="qteForfait"><input type="text" size="10" maxlength="5" name="lesFrais[<?php echo $idfrais; ?>]" value=" <?php echo $quantite?> " </td>
                    
                        <?php
                }
                ?> <td><input type="submit" value="Modifier"><td>    
            </tr>
        </table>
        </form>
       
            
      

        <table class="listeLegere">
            <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -</caption>
            <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>     
                <th class='supprimer'>Supprimer</th> 
                <th class='reporter'>Reporter</th> 
            </tr>
            <?php

            foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) {
                $id = $unFraisHorsForfait['id'];
                $date = $unFraisHorsForfait['date'];
                $libelle = $unFraisHorsForfait['libelle'];
                $montant = $unFraisHorsForfait['montant'];
                $leMois = $unFraisHorsForfait['mois'];
                $idVisiteur = $unFraisHorsForfait['idVisiteur'];
                
                ?>
                <tr>
                    <td><?php echo $date ?></td>
                    <td><?php echo $libelle ?></td>
                    <td><?php echo $montant ?></td>
                    <td><a href="index.php?uc=validerFrais&action=supprimer&id=<?php echo $id;?>">Supprimer</a></td>
                    <td><a href="index.php?uc=validerFrais&action=reporter&id=<?php echo $id?>&idVisiteur=<?php echo $idVisiteur?>&leMois=<?php echo $leMois?>">Reporter</a></td>
            </tr>
                <?php 
            }
            ?>
        </table>
    </div>
</div>