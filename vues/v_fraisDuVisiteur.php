<div id="contenu">
    <h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : </h3>
    <div class="encadre">
        <p>
            Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>      
            
        </p>
        <table class="listeLegere">
           <caption>Eléments forfaitisés </caption>
            <tr>
                <?php
                foreach ( $lesFraisForfait as $unFraisForfait ) {
                    $libelle = $unFraisForfait['libelle'];
                    ?>	
                    <th> <?php echo $libelle?></th>
                    <?php
                }
                ?>
            </tr>
            <tr>
                <?php
                foreach (  $lesFraisForfait as $unFraisForfait  ) {
                    $quantite = $unFraisForfait['quantite'];
                    ?>
                    <td class="qteForfait"><?php echo $quantite?> </td>
                    <?php
                }
                ?>
            </tr>
        </table>
        
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>

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
                ?>
                <tr>
                    <td><?php echo $date ?></td>
                    <td><?php echo $libelle ?></td>
                    <td><?php echo $montant ?></td>
                    <td><a href="index.php?uc=validerFrais&action=supprimer&id=<?php echo $id;?>">Supprimer</a></td>
                    <td><a href="index.php?uc=validerFrais&action=reporter&id=<?php echo $id;?>">Reporter</a></td>
            </tr>
                <?php 
            }
            ?>
        </table>
    </div>
</div>