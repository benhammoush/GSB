<h2>Validation des fiches de frais</h2>

<div class="encadre">
    <form action="index.php?uc=validerFrais&action=Valider" method="POST">
        <legend>Visiteur et mois à sélectionner</legend>
        <p>
            Visiteur
            <select name="visiteurs">
                <?php
                foreach($visiteurs as $visiteur) {
                    if ($visiteur['id'] == $visiteurASelectionner){
                        ?>
                        <option selected value="<?php echo $visiteur['id'] ?>"><?php echo $visiteur['nom']. " " .$visiteur['prenom'] ?></option>
                        <?php
                    } else { 
                        echo "<option value=".$visiteur['id'].">" .$visiteur['nom']. " " .$visiteur['prenom'] ." </option>";
                    }
                }
            ?>
            </select>

            </br>
        </p>
        <p>
            Mois
            <select name="leMois">
                <?php
                foreach($lesMois as $key => $value) {
                    if($value['year'].$value['month'] == $moisASelectionner) {
                        echo "<option selected value=", $value['year'].$value['month'].">" .$value['month'] ."-". $value['year']. "</option>";
                    }
                    else {
                        echo "<option value=", $value['year'], $value['month'], ">", $value['month']. "-" .$value['year'] . "</option>";
                    }
                }
            ?>    
            </select>
        </p>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>
    </form>
</div>


